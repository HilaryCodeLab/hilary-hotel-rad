<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',

            'roomStatus-list',

            'roomStatus-create',

            'roomStatus-edit',

            'roomStatus-delete',

            'rate-list',

            'rate-create',

            'rate-edit',

            'rate-delete',

            'feedback-list',

            'feedback-create',

            'feedback-edit',

            'feedback-delete',

            'user-list',

            'user-create',

            'user-edit',

            'user-delete'

        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }

    }
}
