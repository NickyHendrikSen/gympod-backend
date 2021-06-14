<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'status_name' => 'Pending',
        ]);
        DB::table('status')->insert([
            'status_name' => 'Paid',
        ]);
        DB::table('status')->insert([
            'status_name' => 'Cancelled',
        ]);
    }
}
