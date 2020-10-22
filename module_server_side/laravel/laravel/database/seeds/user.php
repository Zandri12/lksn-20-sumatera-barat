<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' =>'finance_1',
            'email' => 'finance@gmail.com',
            'role' =>'user',
            'password' =>'fiance'
        ]);
    }
}
