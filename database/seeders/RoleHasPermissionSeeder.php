<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::where('name', 'Super Admin')->select('id')->first();
        $all_permissions = Permission::all();

        $data = [];
        foreach ($all_permissions as $permission) {
            $data[] = ['role_id' => $super_admin->id, 'permission_id' => $permission->id];
        }

        DB::table('role_has_permissions')->insert($data);

        DB::table('model_has_roles')->insert([
            [
                'role_id' => '1',
                'model_type' => 'App\Models\User',
                'model_id' => '1',
            ],
        ]);

    }

}
