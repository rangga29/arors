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

        Permission::create(['name' => 'view logs']);

        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'view business partners']);
        Permission::create(['name' => 'create business partners']);
        Permission::create(['name' => 'edit business partners']);
        Permission::create(['name' => 'delete business partners']);

        Permission::create(['name' => 'view clinics']);
        Permission::create(['name' => 'create clinics']);
        Permission::create(['name' => 'edit clinics']);
        Permission::create(['name' => 'delete clinics']);

        Permission::create(['name' => 'view schedule dates']);
        Permission::create(['name' => 'create schedule dates']);
        Permission::create(['name' => 'edit schedule dates']);

        Permission::create(['name' => 'view schedules']);
        Permission::create(['name' => 'download schedules']);
        Permission::create(['name' => 'update schedules']);
        Permission::create(['name' => 'delete schedules']);

        Permission::create(['name' => 'view schedules history']);

        //create roles and assign existing permissions
        $sisfoRole = Role::create(['name' => 'sisfo']);
        $sisfoRole->givePermissionTo('view logs');

        $sisfoRole->givePermissionTo('view users');
        $sisfoRole->givePermissionTo('create users');
        $sisfoRole->givePermissionTo('edit users');
        $sisfoRole->givePermissionTo('delete users');

        $sisfoRole->givePermissionTo('view business partners');
        $sisfoRole->givePermissionTo('create business partners');
        $sisfoRole->givePermissionTo('edit business partners');
        $sisfoRole->givePermissionTo('delete business partners');

        $sisfoRole->givePermissionTo('view clinics');
        $sisfoRole->givePermissionTo('create clinics');
        $sisfoRole->givePermissionTo('edit clinics');
        $sisfoRole->givePermissionTo('delete clinics');

        $sisfoRole->givePermissionTo('view schedule dates');
        $sisfoRole->givePermissionTo('create schedule dates');
        $sisfoRole->givePermissionTo('edit schedule dates');

        $sisfoRole->givePermissionTo('view schedules');
        $sisfoRole->givePermissionTo('download schedules');
        $sisfoRole->givePermissionTo('update schedules');
        $sisfoRole->givePermissionTo('delete schedules');

        $sisfoRole->givePermissionTo('view schedules history');


        $rmRole = Role::create(['name' => 'rm']);
        $rmRole->givePermissionTo('view business partners');
        $rmRole->givePermissionTo('create business partners');
        $rmRole->givePermissionTo('edit business partners');
        $rmRole->givePermissionTo('delete business partners');

        $rmRole->givePermissionTo('view clinics');
        $rmRole->givePermissionTo('create clinics');
        $rmRole->givePermissionTo('edit clinics');
        $rmRole->givePermissionTo('delete clinics');

        $rmRole->givePermissionTo('view schedule dates');
        $rmRole->givePermissionTo('create schedule dates');
        $rmRole->givePermissionTo('edit schedule dates');

        $rmRole->givePermissionTo('view schedules');
        $rmRole->givePermissionTo('download schedules');
        $rmRole->givePermissionTo('update schedules');
        $rmRole->givePermissionTo('delete schedules');

        $rmRole->givePermissionTo('view schedules history');


        $csRole = Role::create(['name' => 'cs']);
        $csRole->givePermissionTo('view business partners');

        $csRole->givePermissionTo('view clinics');

        $csRole->givePermissionTo('view schedule dates');

        $csRole->givePermissionTo('view schedules');

        $csRole->givePermissionTo('view schedules history');


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
