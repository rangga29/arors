<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // reset cached roles and permission
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'edit permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'view clinics']);
        Permission::create(['name' => 'create clinics']);
        Permission::create(['name' => 'edit clinics']);
        Permission::create(['name' => 'delete clinics']);

        //create roles and assign existing permissions
        $sisfoRole = Role::create(['name' => 'sisfo']);
        $sisfoRole->givePermissionTo('view clinics');
        $sisfoRole->givePermissionTo('create clinics');
        $sisfoRole->givePermissionTo('edit clinics');
        $sisfoRole->givePermissionTo('delete clinics');

        $rmRole = Role::create(['name' => 'rm']);
        $rmRole->givePermissionTo('view clinics');

        $csRole = Role::create(['name' => 'cs']);
        $csRole->givePermissionTo('view clinics');

        // gets all permissions via Gate::before rule
        $adminRole = Role::create(['name' => 'administrator']);

        // create user
        $adminUser = User::create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $adminUser->assignRole($adminRole);

        $sisfoUser = User::create([
            'name' => 'Silvester Rangga',
            'username' => '199423075',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $sisfoUser->assignRole($sisfoRole);

        $rmUser = User::create([
            'name' => 'Monica Rambeau',
            'username' => '199423085',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $rmUser->assignRole($rmRole);

        $csUser = User::create([
            'name' => 'Kamala Khan',
            'username' => '199423095',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_by' => 'Administrator',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $csUser->assignRole($csRole);
    }
}
