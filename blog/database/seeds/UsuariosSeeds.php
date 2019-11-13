<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email','=','admin@admin.com')->count()){
            $usuario = User::where('email','=','admin@admin.com')->first();
            $usuario->name = "Admin";
            $usuario->email = "admin@admin.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
        else{
            $usuario = new User();
            $usuario->name = "Admin";
            $usuario->email = "admin@admin.com";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
    }
}
