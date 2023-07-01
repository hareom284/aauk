<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $permissions = [
            'create_requisition',
            'edit_requisition',
            'delete_requisition',
            'access_requisition',
            'create_purchaseorder',
            'edit_purchaseorder',
            'delete_purchaseorder',
            'access_purchaseorder',
            'create_warehouse',
            'edit_warehouse',
            'delete_warehouse',
            'access_warehouse',
            'create_testing',
            'edit_testing',
            'delete_testing',
            'access_testing',
            'create_production',
            'edit_production',
            'delete_production',
            'access_production',
            'create_dispatch',
            'edit_dispatch',
            'delete_dispatch',
            'access_dispatch',
            'create_history',
            'edit_history',
            'delete_history',
            'access_history',
            'create_settings',
            'edit_settings',
            'delete_settings',
            'access_settings',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
