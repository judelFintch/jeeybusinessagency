<?php
declare(strict_types=1);

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;

interface UserRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllUsers(): Collection;

    /**
     * @param string $key
     * @return Model|Builder
     */
    public function getOneByKey(string $key): Model|Builder;

    /**
     * @param $attributes
     * @return Model|Builder
     */
    public function create($attributes): Model|Builder;

    /**
     * @param $attributes
     * @param string $key
     * @return Model|Builder
     */
    public function update($attributes, string $key): Model|Builder;

    /**
     * @param string $key
     * @return Model|Builder|RedirectResponse
     */
    public function delete(string $key): Model|Builder|RedirectResponse|null;

    /**
     * @param string $key
     * @return Model|Builder
     */
    public function confirmed(string $key): Model|Builder;

    /**
     * @param string $key
     * @return Model|Builder
     */
    public function unconfirmed(string $key): Model|Builder;
}
