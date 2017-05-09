<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'id' => '1',
            'username' => 'pedram',
            'email' => 'pedramkhoshnevis@gmail.com',
            'roles' => '1',
            'password' => bcrypt('110110')
            ],
            [
            'id' => '2',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'roles' => '1',
            'password' => bcrypt('110110')
            ]
        );
        
    }
}