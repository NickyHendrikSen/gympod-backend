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
        ]);
    }
}
