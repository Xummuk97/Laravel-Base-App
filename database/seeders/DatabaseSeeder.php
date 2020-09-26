<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin']);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'mail@mail.ru';
        $user->password = Hash::make(123);
        $user->assignRole('super-admin');
        $user->save();
    }
}
