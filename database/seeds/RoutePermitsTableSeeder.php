<?php

use Illuminate\Database\Seeder;

class RoutePermitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes=\Route::getRoutes();

        foreach($routes as $key=>$route){

            $action_name=$route->getActionName();

            $passport_namespace="\Laravel\Passport\Http\Controllers\\";
            $http_namespace="App\Http\Controllers\\";


            /*if(\Str::contains($action_name, $passport_namespace)){
                $permission=\Str::snake(str_replace([$passport_namespace, '@', '\\'], ['', '_', ''], $action_name));
            }elseif(\Str::contains($action_name, $http_namespace)){
                $permission=\Str::snake(str_replace([$http_namespace,'@','\\'], ['', '_', ''], $action_name));
            }*/

            $permission=\Str::snake(str_replace([$passport_namespace, '@', '\\'], ['', '_', ''], $action_name));
            $permission=\Str::snake(str_replace([$http_namespace,'@','\\'], ['', '_', ''], $action_name));

//            if(empty($permission)) dd($action_name);

            if(\DB::table('route_permits')->where('permission', $permission)->exists()) continue;

            \DB::table('route_permits')->insert([
                'permission'=>$permission,
                'action_name'=>$action_name,
                'uri'=>$route->uri(),
                'active'=>FALSE
            ]);

            \DB::table('permissions')->insert([
                'name'=>$permission,
                'guard_name'=>'web'
            ]);

        }
    }
}
