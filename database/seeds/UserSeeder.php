<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'admin',
            'phone' => '081231231231',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);
        DB::table('users')->insert([
            'user_name' => 'John',
            'phone' => '081111111111',
            'password' => Hash::make('john'),
            'is_admin' => false
        ]);
        DB::table('users')->insert([
            'user_name' => 'Doe',
            'phone' => '0822222222222',
            'password' => Hash::make('doe'),
            'is_admin' => false
        ]);
        DB::table('users')->insert([
            'user_name' => 'Mark',
            'phone' => '083333333333',
            'password' => Hash::make('mark'),
            'is_admin' => false
        ]);
    }
}
