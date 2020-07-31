<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class Assign_roles_permissions extends Seeder
{
    /*
     * Run the database seeds.
     * @return void
     */
    public function run()
    {

        //Assign existing roles to permissions
        //role:admin
        $roleAdmin= Role::find(1);
        $permissions = Permission::pluck('id','id')->all();
        $roleAdmin->syncPermissions($permissions);
        $admin =  User::create
        ([
             'given_name'=> 'Marry',
             'family_name'=>'Jane',
             'dob'=>Carbon::create('1972','06','14'),
             'email'=> 'admin@gmail.com',
             'password'=> bcrypt('mary@123456')
         ]);
        $admin->assignRole($roleAdmin);


        //role:booking staff
        $role1= Role::find(2);
        $role1->givePermissionTo('roomStatus-list');
        $role1->givePermissionTo('roomStatus-create');
        $role1->givePermissionTo('roomStatus-edit');
        $role1->givePermissionTo('roomStatus-delete');
        $bookingStaff = User::create
        ([
            'given_name'=> 'Norah',
            'family_name'=>'Jones',
            'dob'=>Carbon::create('1992','12','15'),
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
             'given_name'=> 'Peter',
             'family_name'=>'Alexander',
             'dob'=>Carbon::create('1985','03','13'),
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
             'given_name'=> 'Gordon',
             'family_name'=>'Ramsay',
             'dob'=>Carbon::create('1972','04','15'),
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
             'given_name'=> 'Harry',
             'family_name'=>'Patterson',
             'dob'=>Carbon::create('1975','05','27'),
             'email'=> 'hotelmanager@mail.com',
             'password'=> bcrypt('hm@123456')
         ]);
        $manager->assignRole($role5);

        //role:guest
        $role6 = Role::find(6);
        $role6 -> givePermissionTo('user-edit');
        $role6 -> givePermissionTo('user-list');
        $guest = User::create
        ([
             'given_name'=> 'Jean',
             'family_name'=>'Pierre',
             'dob'=>Carbon::create('1988','02','14'),
             'email'=> 'jeanpierre@mail.com',
             'password'=> bcrypt('jp@123456')
         ]);
        $guest->assignRole($role6);



    }
}
