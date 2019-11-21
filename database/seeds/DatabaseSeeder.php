<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SeederUsuario::class);
         DB::table("usuarios")->insert(
           ["email"->"zoe@zoe.com",
           "contrasena"->"hola123"
           ]
         );
    }
}
