<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
             
        $use = new User();
        $use->name = "Admin";
        $use->email = "joel@gmail.com";
        $use->password = bcrypt('123456789');
        $use->save();
        $use->roles()->attach($role_admin);
        
    }
}
