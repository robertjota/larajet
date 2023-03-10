<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'Admin',
            'description' => 'Administrador'
        ]);
        $role2 = Role::create([
            'name' => 'Blogger',
            'description' => 'Blogger'
        ]);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver el Dashboad'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.roles.index',
            'description' => 'Ver Listado de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.create',
            'description' => 'Crear rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.edit',
            'description' => 'Editar rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.roles.destroy',
            'description' => 'Eliminar rol'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.permissions.index',
            'description' => 'Ver Listado de permisos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.permissions.create',
            'description' => 'Crear permiso'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.permissions.edit',
            'description' => 'Editar permiso'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.permissions.destroy',
            'description' => 'Eliminar permiso'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver Listado de categorias'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categorias'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar categorias'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tags.index',
            'description' => 'Ver Listado de etiquetas'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.tags.create',
            'description' => 'Crear etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.tags.edit',
            'description' => 'Editar etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'admin.tags.destroy',
            'description' => 'Eliminar etiquetas'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.posts.index',
            'description' => 'Ver listado de posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.create',
            'description' => 'Crear post'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.edit',
            'description' => 'Editar post'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.destroy',
            'description' => 'Eliminar post'
        ])->syncRoles([$role1, $role2]);
    }
}
