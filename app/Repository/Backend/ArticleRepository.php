<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\Article;
use App\Repository\Interfaces\ArticleRepositoryInterface;
use App\Repository\UploaderImages;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

class ArticleRepository implements ArticleRepositoryInterface
{
    use UploaderImages;

    public function getAllVerified(): Collection
    {
        return Article::query()
            ->latest()
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return Article::query()
            ->when('key', fn($builder) => $builder->where('key', $key))
            ->with('comments')
            ->latest()
            ->first();
    }

    public function create($attributes): Model|Builder
    {
        $articles = Article::query()
            ->create([
                'title' => $attributes->input('title'),
                'content' => $attributes->input('content'),
                'picture' => self::uploadFiles($attributes),
                'status' => Article::DRAFT_ARTICLE,
                'resume' => $attributes->input('resume'),
                'user_id' => auth()->id()
            ]);
        toast("L'article a été publié", 'success');
        return $articles;
    }

    public function update($attributes, string $key): Model|Builder
    {
        $article = $this->getOneByKey($key);
        $this->removePathOfImages($article);
        $article->update([
            'title' => $attributes->input('title'),
            'content' => $attributes->input('content'),
            'picture' => self::uploadFiles($attributes),
            'status' => Article::PUBLISH_ARTICLE,
            'resume' => $attributes->input('resume'),
            'user_id' => auth()->id(),
        ]);
        toast("Une mise a jour a été effectuer", 'success');
        return $article;
    }

    public function delete(string $key): Model|Builder|RedirectResponse|null
    {
        $article = $this->getOneByKey($key);
        if ($article->status == true){
            toast("Veillez infirmer l'article avant de le suspendre", 'warning');
            return null;
        }
        $this->removePathOfImages($article);
        $article->delete();
        toast("L'article a ete supprimer", 'success');
        return $article;
    }

    public function confirmed(string $key): Model|Builder
    {
        $article = $this->getOneByKey($key);
        $article->update([
            'status' => Article::PUBLISH_ARTICLE
        ]);
        toast("Article a ete confirmer et publier", 'info');
        return $article;
    }

    public function unconfirmed(string $key): Model|Builder
    {
        $article = $this->getOneByKey($key);
        $article->update([
            'status' => Article::DRAFT_ARTICLE
        ]);
        toast("Article a ete mise au brouillon", 'info');
        return $article;
    }
}
