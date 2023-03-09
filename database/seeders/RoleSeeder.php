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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home', 'description' => 'See Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'See Users List'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Assign Roles'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.users.update', 'description' => ''])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'See Categories List'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Create Categories'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Edit Categories'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Delete Categories'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'See Tags Lists'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Create Tags'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Edit Tags'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Delete Tags'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'See Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Create Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Edit Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Delete Posts'])->syncRoles([$role1, $role2]);
    }
}
