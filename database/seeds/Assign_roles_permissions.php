<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\User;

class Assign_roles_permissions extends Seeder
{
    /*
     * Run the database seeds.
     * @return void
     */
    public function run()
    {

        //Assign existing roles to permissions
        //role:booking staff
        $role1= Role::find(2);
        $role1->givePermissionTo('roomStatus-list');
        $role1->givePermissionTo('roomStatus-create');
        $role1->givePermissionTo('roomStatus-edit');
        $role1->givePermissionTo('roomStatus-delete');
        $bookingStaff = User::create
        ([
            'name'=> 'Norah Jones',
            'email'=> 'bookingstaff@mail.com',
            'password'=> bcrypt('bs@123456')
        ]);
        $bookingStaff->assignRole($role1);

        //role:general staff
        $role2= Role::find(3);
        $role2->givePermissionTo('roomStatus-list');
        $role2->givePermissionTo('rate-list');
        $role2->givePermissionTo('feedback-list');
        $generalStaff = User::create
        ([
             'name'=> 'Peter Alexander',
             'email'=> 'generalstaff@mail.com',
             'password'=> bcrypt('gs@123456')
         ]);
        $generalStaff->assignRole($role2);

        //role:maintenance
        $role4= Role::find(4);
        $permissions = Permission::pluck('id','id')->all();
        $role4->syncPermissions($permissions);
        $maintenance =  User::create
        ([
             'name'=> 'Gordon Ramsay',
             'email'=> 'maintenance@mail.com',
             'password'=> bcrypt('m@123456')
         ]);
        $maintenance->assignRole($role4);

        //role:manager
        $role5= Role::find(5);
        $permissions = Permission::pluck('id','id')->all();
        $role5->syncPermissions($permissions);
        $manager =  User::create
        ([
             'name'=> 'Harry Patterson',
             'email'=> 'hotelmanager@mail.com',
             'password'=> bcrypt('hm@123456')
         ]);
        $manager->assignRole($role5);



    }
}
