<?php

use Illuminate\Database\Seeder;

class BookingTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 2,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);


        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 3,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 3,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);

        
        DB::table('booking_transactions')->insert([
            'pod_id' => 2,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-20 11:00:00',
            'booking_end' => '2021-06-20 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 1,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-21 11:00:00',
            'booking_end' => '2021-06-21 13:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-22 13:00:00',
            'booking_end' => '2021-06-22 15:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 4,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-23 10:00:00',
            'booking_end' => '2021-06-23 12:00:00'
        ]);
        DB::table('booking_transactions')->insert([
            'pod_id' => 5,
            'user_id' => 4,
            'status_id' => rand(1,3),
            'price' => rand(10,100),
            'booking_start' => '2021-06-25 18:00:00',
            'booking_end' => '2021-06-25 20:00:00'
        ]);
    }
}
