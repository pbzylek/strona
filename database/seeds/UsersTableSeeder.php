<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Roles::where('name', 'Admin')->first();
        
        $user = new User();
        $user->login='pbzyl';
        $user->password=bcrypt('bzylek');
        $user->email='pawelbzyl@gmail.com';
        $user->imie='Paweł';
        $user->nazwisko='Bzyl';
        $user->firma='PawPol';
        $user->nip='6221962354';
        $user->adres='Dębowa 18';
        $user->miejscowosc='Antonin';
        $user->kod='63-421';
        $user->telefon='500212996';
        $user->save();
        $user->roles()->attach($role);
    }
}
