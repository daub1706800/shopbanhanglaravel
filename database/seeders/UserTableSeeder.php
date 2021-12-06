<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Roles;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRoles=Roles::where('name','admin')->first();
        $authorRoles=Roles::where('name','author')->first();
        $userRoles=Roles::where('name','user')->first();
        $khachhangRoles=Roles::where('name','Khach hang')->first();

        $admin=Admin::create([
              'admin_name'=>'dauadmin',
              'admin_email'=>'dauadmin@gmail.com',
              'admin_phone'=>'123423',
              'admin_password' => md5('123456')
        ]);
        $author=Admin::create([
            'admin_name'=>'dauauthor',
            'admin_email'=>'dauauthor@gmail.com',
            'admin_phone'=>'123423',
            'admin_password' => md5('123456')
      ]);
      $user=Admin::create([
        'admin_name'=>'dauuser',
        'admin_email'=>'dauuser@gmail.com',
        'admin_phone'=>'123423',
        'admin_password' => md5('123456')
               ]);
  $admin->roles()->attach($adminRoles);
  $author->roles()->attach($authorRoles);
  $user->roles()->attach($userRoles);


    }
}
