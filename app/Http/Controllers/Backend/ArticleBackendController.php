<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Forms\ArticleForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Repository\Backend\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ArticleBackendController extends Controller
{
    public function __construct(public ArticleRepository $repository, public FormBuilder $formBuilder){}

    public function index(): Factory|View|Application
    {
        return view('admins.articles.index', [
            'articles' => $this->repository->getAllVerified()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('admins.articles.show', [
            'article' => $this->repository->getOneByKey($key)
        ]);
    }

    public function create(): Factory|View|Application
    {
        $form = $this->formBuilder->create(ArticleForm::class, [
           'method' => 'POST',
           'url' => route('article.store')
        ]);
        return view('admins.articles.create', compact('form'));
    }

    public function store(ArticleRequest $attributes): RedirectResponse
    {
        $this->repository->create($attributes);
        return redirect()->route('article.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $article = $this->repository->getOneByKey($key);
        $form = $this->formBuilder->create(ArticleForm::class, [
            'method' => 'PUT',
            'url' => route('article.update', $article->key),
            'model' => $article
        ]);
        return view('admins.articles.create', compact('form', 'article'));
    }

    public function update(ArticleRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->update($attributes, $key);
        return redirect()->route('article.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->delete($key);
        return redirect()->route('article.index');
    }

    public function confirmed(string $key): RedirectResponse
    {
        $this->repository->confirmed($key);
        return redirect()->back();
    }

    public function unconfirmed(string $key): RedirectResponse
    {
        $this->repository->unconfirmed($key);
        return redirect()->back();
    }

}
