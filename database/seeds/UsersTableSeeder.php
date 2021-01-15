<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Shah Rakibur',
                'email'=>'libon@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Alvi Ahmed',
                'email'=>'alvi@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Arif Khan',
                'email'=>'arif@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Asraful islam',
                'email'=>'asraful3161@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'Mohammad Ali',
                'email'=>'ali@gmail.com',
                'password'=>bcrypt('12345678')
            ],[
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('12345678')
            ]

        ];

        \DB::table('users')->insert($data);
    }
}
