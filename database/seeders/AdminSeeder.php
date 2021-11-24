<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        User::query()
            ->create([
                'name' => 'thanzie',
                'email' => 'admin.thanzie@thanzie.com',
                'password' => Hash::make('adminthanzie'),
                'status' => User::CONFIRMED
            ]);
    }
}
