<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Forms\UserForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repository\Backend\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class UserBackendController extends Controller
{
    public function __construct(
        public UserRepository $repository,
        public FormBuilder $formBuilder
    ){}

    public function index(): Factory|View|Application
    {
        return view('admins.users.index', [
            'users' => $this->repository->getAllUsers()
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('admins.users.show', [
            'user' => $this->repository->getOneByKey($key)
        ]);
    }

    public function create(): Factory|View|Application
    {
        $form = $this->formBuilder->create(UserForm::class, [
            'method' => 'POST',
            'url' => route('utilisateur.store')
        ]);
        return view('admins.users.create', compact('form'));
    }

    public function store(UserRequest $attributes): RedirectResponse
    {
        $this->repository->create($attributes);
        return redirect()->route('utilisateur.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $user = $this->repository->getOneByKey($key);
        $form = $this->formBuilder->create(UserForm::class, [
            'method' => 'PUT',
            'url' => route('utilisateur.update', $user->key),
            'model' => $user
        ]);
        return view('admins.users.create', compact('form', 'user'));
    }

    public function update(UserRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->update($attributes, $key);
        return redirect()->route('utilisateur.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->delete($key);
        return redirect()->route('utilisateur.index');
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
