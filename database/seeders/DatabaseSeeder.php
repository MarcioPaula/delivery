<?php

namespace Database\Seeders;

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'name' => 'mayra',
            'email' => 'mayra@hotmail.com',
            'password' => bcrypt('secret'),
            'cod_estabel' => '2',
            'admin' => 'Sim',
            'api_token' =>'6MWqljFoJ44beKzPRS6fqXT4MJxUDzZQYWG1ZCJmONRyh6QWx1JCZt2SzVlU',
        ]);

    }
}
