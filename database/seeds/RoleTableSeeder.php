<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();
        
        $rol = new Role();
        $rol->name = "asist";
        $rol->description = "Asistente";
        $rol->save();
        
        $ro = new Role();
        $ro->name = "est";
        $ro->description = "Estudiante";
        $ro->save();
    }
}
