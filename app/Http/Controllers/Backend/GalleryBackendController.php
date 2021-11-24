<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Forms\GalleryForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Repository\Backend\GalleryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class GalleryBackendController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public GalleryRepository $repository
    ){}

    public function index(): Factory|View|Application
    {
        return view('admins.galleries.index', [
            'galleries' => $this->repository->getAllVerified()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('admins.galleries.show', [
            'valve' => $this->repository->getOneByKey($key)
        ]);
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(GalleryForm::class, [
            'method' => 'POST',
            'url' => route('galleries.store')
        ]);
        return view('admins.galleries.create', compact('form'));
    }

    public function store(GalleryRequest $attributes): RedirectResponse
    {
        $this->repository->create($attributes);
        return redirect()->route('galleries.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $valve = $this->repository->getOneByKey($key);
        $form = $this->builder->create(GalleryForm::class, [
            'method' => 'PUT',
            'url' => route('galleries.update', $valve->key),
            'model' => $valve
        ]);
        return view('admins.galleries.create', compact('form', 'valve'));
    }

    public function update(GalleryRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->update($attributes, $key);
        return redirect()->route('galleries.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->delete($key);
        return redirect()->route('galleries.index');
    }
}
