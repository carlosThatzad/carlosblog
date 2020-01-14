<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Generator $faker
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name' => 'Alex',
            'email' => 'a.esco@gmail.com',
            'password'  => bcrypt('secret'),
        ));

        \DB::table('users')->insert(array(
            'name' => 'diego',
            'email' => 'diego@gmail.com',
            'password'  => bcrypt('secret'),
        ));

        \DB::table('users')->insert(array(
            'name' => 'carlos',
            'email' => 'carlos@gmail.com',
            'password'  => bcrypt('secret'),
        ));

        User::where('active', '=', '1');
    }
}
