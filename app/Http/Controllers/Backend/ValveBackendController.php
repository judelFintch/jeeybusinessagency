<?php
declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Forms\ValveForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValveRequest;
use App\Repository\Backend\ValveRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Kris\LaravelFormBuilder\FormBuilder;

class ValveBackendController extends Controller
{
    public function __construct(
        public FormBuilder $builder,
        public ValveRepository $repository
    ){}

    public function index(): Factory|View|Application
    {
        return view('admins.valves.index', [
            'valves' => $this->repository->getAllVerified()
        ]);
    }

    public function create(): Factory|View|Application
    {
        $form = $this->builder->create(ValveForm::class, [
            'method' => 'POST',
            'url' => route('valves.store')
        ]);
        return view('admins.valves.create', compact('form'));
    }

    public function store(ValveRequest $attributes): RedirectResponse
    {
        $this->repository->create($attributes);
        return redirect()->route('valves.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $valve = $this->repository->getOneByKey($key);
        $form = $this->builder->create(ValveForm::class, [
            'method' => 'PUT',
            'url' => route('valves.update', $valve->key),
            'model' => $valve
        ]);
        return view('admins.valves.create', compact('form', 'valve'));
    }

    public function update(ValveRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->update($attributes, $key);
        return redirect()->route('valves.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->delete($key);
        return redirect()->route('valves.index');
    }
}
