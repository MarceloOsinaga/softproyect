<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan db:seed --class=PermissionsTableSeeder
     * @return void
     */
    public function run()
    {
        // tipo contrato
        Permission::create([
        	'name' => 'Lista de contratos',
        	'slug' => 'tipocontrato.index',
        	'description' => 'Optener la lista de todos los contratos',
        ]);
        Permission::create([
        	'name' => 'Crear un nuevo contratos',
        	'slug' => 'tipocontrato.create',
        	'description' => 'formulario para crear un nuevo contrato',
        ]);
        Permission::create([
        	'name' => 'Editar un contratos',
        	'slug' => 'tipocontrato.edit',
        	'description' => 'formulario para edita un  contrato',
        ]);
        Permission::create([
        	'name' => 'Lista de contratos',
        	'slug' => 'tipocontrato.show',
        	'description' => 'Optener la lista de todos los contratos',
        ]);


        // sindicato
        Permission::create([
        	'name' => 'Lista de sindicatos',
        	'slug' => 'sindicato.index',
        	'description' => 'Optener la lista de todos los sindicatos',
        ]);
        Permission::create([
        	'name' => 'Crear un nuevo sindicato',
        	'slug' => 'sindicato.create',
        	'description' => 'formulario para crear un nuevo sindicato',
        ]);
        Permission::create([
        	'name' => 'Editar un sindicato',
        	'slug' => 'sindicato.edit',
        	'description' => 'formulario para edita un  sindicato',
        ]);
        Permission::create([
        	'name' => 'Lista de contratos',
        	'slug' => 'sindicato.show',
        	'description' => 'Optener la lista de todos los contratos',
        ]);

        // causa
        Permission::create([
        	'name' => 'Lista de causas',
        	'slug' => 'causa.index',
        	'description' => 'Optener la lista de todas las causas',
        ]);
        Permission::create([
        	'name' => 'Crear un nuevo contratos',
        	'slug' => 'causa.create',
        	'description' => 'formulario para crear una nueva causa',
        ]);
        Permission::create([
        	'name' => 'Editar un contratos',
        	'slug' => 'causa.edit',
        	'description' => 'formulario para edita una causa',
        ]);
        Permission::create([
        	'name' => 'Lista de contratos',
        	'slug' => 'causa.show',
        	'description' => 'Optener la lista de todas las causas',
        ]);
        
    }
}
