<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\Gallery;
use App\Repository\Interfaces\GalleryRepositoryInterface;
use App\Repository\UploaderImages;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

class GalleryRepository implements GalleryRepositoryInterface
{
    use UploaderImages;

    public function getAllVerified(): Collection
    {
        return Gallery::query()
            ->latest()
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return Gallery::query()
            ->when('key', fn($builder) => $builder->where('key', $key))
            ->first();
    }

    public function create($attributes): Model|Builder
    {
        $gallery = Gallery::query()
            ->create([
                'picture' => self::uploadFiles($attributes),
                'status' => Gallery::FALSE_STATUS
            ]);
        toast("Une nouvelle photo a ete ajouter a la gallerie", 'success');
        return $gallery;
    }

    public function update($attributes, string $key): Model|Builder
    {
        $gallery = $this->getOneByKey($key);
        $this->unsetFilesUploads($gallery);
        $gallery->update([
            'picture' => self::uploadFiles($attributes)
        ]);
        toast("La gallerie vient d'etre modifier", 'success');
        return $gallery;
    }

    public function delete(string $key): Model|Builder|RedirectResponse
    {
        $gallery = $this->getOneByKey($key);
        $this->unsetFilesUploads($gallery);
        $gallery->delete();
        toast("La gallerie vient d'etre supprimer", 'info');
        return $gallery;
    }
}
