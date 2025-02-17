<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::create(['name' => 'admin']);

        // Crea roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        
        // Asignar permisos a los roles
        $adminRole->givePermissionTo(Permission::all()); // Todos los permisos para admin
        $userRole->givePermissionTo([
            'user-list',
            'post-list',
            // Agregar permisos específicos para el rol "user"
        ]);

        
    }
}