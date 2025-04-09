<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permisos
        Permission::create(['name' => 'clientes']);
        Permission::create(['name' => 'usuarios']);
        Permission::create(['name' => 'blogs']);
        Permission::create(['name' => 'proyectos']);
        Permission::create(['name' => 'imagenes']);
      
        Permission::create(['name' => 'secciones']);
        Permission::create(['name' => 'editar_plantilla']);
        Permission::create(['name' => 'editar_inicio']);
        Permission::create(['name' => 'editar_nosotros']);
        Permission::create(['name' => 'editar_blog']);
        Permission::create(['name' => 'editar_proyectos']);
        Permission::create(['name' => 'editar_contactos']);

        Permission::create(['name' => 'agregar']);
        Permission::create(['name' => 'editar']);
        Permission::create(['name' => 'actualizar']);
        Permission::create(['name' => 'eliminar']);

        $role0 = Role::create(['name' => 'Asistente']);

        // Asignar todos los permisos menos "usuarios" y "administrar"
        $permissions = Permission::whereNotIn('name', ['usuarios', 'administrar'])->get();
        $role0->syncPermissions($permissions);

        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'Administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin@gmail.com',
        ]);
        //asignar rol
        $user1->assignRole('Administrador');
        ///////////////////////////////////////////////////////////////////////
        $user2= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas1',
            'lastname' => 'Aquino1',
            'names' => 'Anthony Robert1',
            'password' => Hash::make('sdc123456'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'admin1@gmail.com',
        ]);
        

    }

}
