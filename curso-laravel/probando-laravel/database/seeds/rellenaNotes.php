<?php

use Illuminate\Database\Seeder;

class RellenaNotes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i <= 40; $i++){
        	DB::table('notes')->insert(array(
        		'title' => 'Mi nota '.$i,
        		'description' => 'La descripción de la nota'.$i
        	));
        }

        $this->command->info('Tabla de Notas rellena correctamente');
    }
}
