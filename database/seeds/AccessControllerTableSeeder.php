<?php

use Illuminate\Database\Seeder;

class AccessControllerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $dev=\DB::table('users')->where('email', 'lemonpatwari@gmail.com')->first();

        if(empty($dev)){

            $data=[
                ['name'=>'Lemon Patwari', 'email'=>'lemonpatwari@gmail.com', 'password'=>bcrypt('12345678')],
            ];

            \DB::table('users')->insert($data);

        }

        //data for roles table
        $data=[
            ['name'=>'developer', 'guard_name'=>'web'],
            ['name'=>'depo_admin', 'guard_name'=>'web'],
            ['name'=>'depo_user', 'guard_name'=>'web']
        ];

        \DB::table('roles')->insert($data);

        //data for permissions table
        $data=[
            ['name'=>'test', 'guard_name'=>'web'],//1
        ];

        \DB::table('permissions')->insert($data);

        $dev=\DB::table('users')->where('email', 'lemonpatwari@gmail.com')->first();

        //Data for role user pivot
        $data=[
            ['role_id'=>1, 'model_type'=>'App\User', 'model_id'=>$dev->id],
            ['role_id'=>2, 'model_type'=>'App\User', 'model_id'=>2],
            ['role_id'=>2, 'model_type'=>'App\User', 'model_id'=>3],
            ['role_id'=>1, 'model_type'=>'App\User', 'model_id'=>4],
        ];

        \DB::table('model_has_roles')->insert($data);

        //Data for role permission pivot
        $data=[
            ['permission_id'=>1, 'role_id'=>1],
        ];

        \DB::table('role_has_permissions')->insert($data);

    }

}
