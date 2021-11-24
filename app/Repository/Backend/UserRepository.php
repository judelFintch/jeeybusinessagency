<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers(): Collection
    {
        return User::query()
            ->orderBy('created_at', 'DESC')
            ->latest()
            ->get();
    }

    public function getOneByKey(string $key): Model|Builder
    {
        return User::query()
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function create($attributes): Model|Builder
    {
        // TODO: Implement create() method.
    }

    public function update($attributes, string $key): Model|Builder
    {
        // TODO: Implement update() method.
    }

    public function delete(string $key): Model|Builder|RedirectResponse|null
    {
        // TODO: Implement delete() method.
    }

    public function confirmed(string $key): Model|Builder
    {
        // TODO: Implement confirmed() method.
    }

    public function unconfirmed(string $key): Model|Builder
    {
        // TODO: Implement unconfirmed() method.
    }
}
