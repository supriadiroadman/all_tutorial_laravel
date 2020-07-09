<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear cache
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Roles
        $roles = ["super-admin", "manager", "admin"];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // Create Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }


        // Super Admin
        $superAdmin = User::create([
            'name' => 'Supriadi',
            'email' => 'supriadiroadman@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $superAdminRole = Role::where('name', "super-admin")->first(); // role super-admin
        $superAdminRole->syncPermissions(Permission::all()); // add all permissions to role super-admin
        $superAdmin->assignRole($superAdminRole); // add role to user super-admin



        // Manager
        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $managerRole = Role::where('name', "manager")->first();
        $managerRole->syncPermissions(
            'role-list',
            'role-create',
            'role-edit',
            'product-list',
            'product-create',
            'product-edit',
        );
        $manager->assignRole($managerRole);



        // Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $adminRole = Role::where('name', "admin")->first();
        $adminRole->syncPermissions(
            'role-list',
            'role-edit',
            'product-list',
            'product-edit',
        );
        $admin->assignRole($adminRole);
    }
}
