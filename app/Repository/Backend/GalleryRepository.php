<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Repository\Interfaces\GalleryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

class GalleryRepository implements GalleryRepositoryInterface
{

    public function getAllVerified(): Collection
    {
        // TODO: Implement getAllVerified() method.
    }

    public function getOneByKey(string $key): Model|Builder
    {
        // TODO: Implement getOneByKey() method.
    }

    public function create($attributes): Model|Builder
    {
        // TODO: Implement create() method.
    }

    public function update($attributes, string $key): Model|Builder
    {
        // TODO: Implement update() method.
    }

    public function delete(string $key): Model|Builder|RedirectResponse
    {
        // TODO: Implement delete() method.
    }
}
