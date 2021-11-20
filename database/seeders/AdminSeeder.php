<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::query()
            ->create([
                'name' => 'thanzie',
                'email' => 'admin.thanzie@thanzie.com',
                'password' => Hash::make('adminthanzie')
            ]);
    }
}
