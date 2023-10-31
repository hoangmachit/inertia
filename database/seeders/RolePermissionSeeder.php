<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = $this->allRole();
        DB::table('roles')->insert($roles);
        $permissions = $this->allPermission();
        DB::table('permissions')->insert($permissions);
    }
    /**
     * Summary of allRole
     * @return array
     */
    private function allRole()
    {
        $roles = [
            [
                'role_name' => 'Supper',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Content',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'View',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        return $roles;
    }
    private function allPermission()
    {
        $arrayPermission = collect(Route::getRoutes())->map(function ($route) {
            if($route->getName()){
                return [
                    'route_name' => $route->getName(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        })->filter()->toArray();
        return $arrayPermission;
    }
}
