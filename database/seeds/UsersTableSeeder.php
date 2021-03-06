<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan db:seed --class=UsersTableSeeder
     * @return void
     */
    public function run()
    {
     	Role::create([
        	'name' => 'Admin',
        	'slug' => 'admin',
        	'special' => 'all-access',
        ]);   
    }
}
