<?php
declare(strict_types=1);

namespace App\Repository\Backend;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\UploaderImages;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    use UploaderImages;

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
        $user = User::query()
            ->create([
                'name' => $attributes->input('name'),
                'email' => $attributes->input('email'),
                'picture' => self::uploadFiles($attributes),
                'phone_number' => $attributes->input('phone_number'),
                'password' => Hash::make($attributes->input('password')),
                'status' => User::PENDING
            ]);
        toast("Un nouveau utilisateur a ete ajouter", 'success');
        return $user;
    }

    public function update($attributes, string $key): Model|Builder
    {
        $user = $this->getOneByKey($key);
        $this->removePathOfImages($user);
        $user->update([
            'name' => $attributes->input('name'),
            'email' => $attributes->input('email'),
            'picture' => self::uploadFiles($attributes),
            'phone_number' => $attributes->input('phone_number'),
            'password' => Hash::make($attributes->input('password')),
        ]);
        toast("Une mise a jours a ete effectuer",'success');
        return $user;
    }

    public function delete(string $key): Model|Builder|RedirectResponse|null
    {
        $user = $this->getOneByKey($key);
        $this->removePathOfImages($user);
        if ($user->status == true){
            toast("Veillez desactiver l'utilisateur avant de le suspendre", 'warning');
            return null;
        }
        $user->delete();
        toast("L'utilisateur a ete supprimer", 'success');
        return $user;
    }

    public function confirmed(string $key): Model|Builder
    {
        $user = $this->getOneByKey($key);
        $user->update([
            'status' => User::CONFIRMED
        ]);
        toast("Utilisateur a ete confirmer et publier", 'info');
        return $user;
    }

    public function unconfirmed(string $key): Model|Builder
    {
        $user = $this->getOneByKey($key);
        $user->update([
            'status' => User::PENDING
        ]);
        toast("Utilisateur a ete confirmer et publier", 'info');
        return $user;
    }
}
