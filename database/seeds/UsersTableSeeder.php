<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User();
        $admin->name = "Administrador";
        $admin->dni = "00000000";
        $admin->type = "admin";
        $admin->email = "admin@tecsup.edu.pe";
        $admin->password = bcrypt(123456);
        $admin->save();

        $user = new \App\User();
        $user->name = "Marcos Torres";
        $user->dni = "45874514";
        $user->type = "user";
        $user->email = "usuario@tecsup.edu.pe";
        $user->password = bcrypt(123456);
        $user->save();
    }
}
