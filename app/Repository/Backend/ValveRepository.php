<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\Valve;
use App\Repository\FilesystemManager;
use App\Repository\Interfaces\ValveRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

class ValveRepository implements ValveRepositoryInterface
{
    use FilesystemManager;

    public function getAllVerified(): Collection
    {
        return Valve::query()
            ->orderBy('created_at', 'DESC')
            ->latest()
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return Valve::query()
            ->when('key', fn($builder) => $builder->where('key', $key))
            ->first();
    }

    public function create($attributes): Model|Builder
    {
        $valve = Valve::query()
            ->create([
                'title' => $attributes->input('title'),
                'files' => $this->uploadFile($attributes)
            ]);
        toast("Un fichier a ete ajouter au valve", 'success');
        return $valve;
    }

    public function update($attributes, string $key): Model|Builder
    {
        $valve = $this->getOneByKey($key);
        $this->unsetFilesUploads($valve);
        $valve->update([
            'title' => $attributes->input('title'),
            'files' => $this->uploadFile($attributes)
        ]);
        toast("Une modification a ete  faite sur ce valve", 'success');
        return $valve;
    }

    public function delete(string $key): Model|Builder|RedirectResponse
    {
        $valve = $this->getOneByKey($key);
        $this->unsetFilesUploads($valve);
        $valve->delete();
        toast("Le valve a ete surpprimer", 'info');
        return $valve;
    }
}
