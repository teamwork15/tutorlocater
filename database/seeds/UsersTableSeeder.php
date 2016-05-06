<?php

use Illuminate\Database\Seeder;
use App\models\User;
use \App\models\Role;
use \App\models\Permission;
use \Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('permission_role')->truncate();
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $user1 = new User();
        $user1->name = 'Pankaj Kumar';
        $user1->email = 'pankaj@newgenray.com';
        $user1->password = bcrypt('pankaj');
        $user1->is_active = 1;
        $user1->save();

        $user2 = new User();
        $user2->name = 'Vijay Kumar';
        $user2->email = 'vijayknmodi@gmail.com';
        $user2->password = bcrypt('vijay');
        $user2->is_active = 1;
        $user2->save();

        $superAdmin = new Role();
        $superAdmin->name         = 'super-admin';
        $superAdmin->display_name = 'Super Admin';
        $superAdmin->description  = 'This is super admin of website and it is only for Newgenray Employees.';
        $superAdmin->save();

        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Admin';
        $admin->description = 'This is admin of website';
        $admin->save();

        $createUser = new Permission();
        $createUser->name         = 'create-user';
        $createUser->display_name = 'Create Users';
        $createUser->description  = 'Create new user';
        $createUser->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users';
        $editUser->description  = 'Edit existing user';
        $editUser->save();

        $manageAdmin = new Permission();
        $manageAdmin->name         = 'manage-admin';
        $manageAdmin->display_name = 'Manage Admin';
        $manageAdmin->description  = 'Can login to admin';
        $manageAdmin->save();

        $superAdmin->attachPermissions(array($createUser, $editUser, $manageAdmin));
        $admin->attachPermissions(array($createUser, $editUser));

        $user1->attachRole($superAdmin);
        $user2->attachRole($admin);


    }
}
