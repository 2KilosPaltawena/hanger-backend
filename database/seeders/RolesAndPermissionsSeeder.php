<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        Role::create(['name' => 'competitor']);
        Role::create(['name' => 'coach']);
        Role::create(['name' => 'admin']);
    }
}
