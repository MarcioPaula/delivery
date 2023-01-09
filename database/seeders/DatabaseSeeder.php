<?php

namespace Database\Seeders;

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Willian',
            'email' => 'willian@hotmail.com',
            'password' => bcrypt('secret'),
            'cod_estabel' => '1',
            'admin' => 'Sim'
        ]);

    }
}
