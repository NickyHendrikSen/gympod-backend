<?php

use Illuminate\Database\Seeder;

class PodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pods')->insert([
            'pod_name' => '131 Jalan Bukit Merah'
        ]);
        DB::table('pods')->insert([
            'pod_name' => '79 Robinson Road'
        ]);
        DB::table('pods')->insert([
            'pod_name' => 'Alexandra Technopark'
        ]);
        DB::table('pods')->insert([
            'pod_name' => 'The Cathay'
        ]);
        DB::table('pods')->insert([
            'pod_name' => 'Punggol Park'
        ]);
        
    }
}
