<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João V. Barreto',
            'email' => 'sistemas@misericordia.com.br',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'João V. Barreto',
            'email' => 'suporte@misericordia.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
