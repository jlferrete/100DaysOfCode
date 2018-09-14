<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldFrutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //SchemaBuilder
        /*
        Schema::table('frutas', function(Blueprint $table){
            $table->string('pais')->after('temporada');
            $table->renameColumn('nombre_fruta','nombre');
        });
        */

        //Mediante SQL

        DB::statement('
            CREATE TABLE probandosql(
                id int(255) auto_increment not null,
                publication int(255),
                PRIMARY KEY (id)
                )

            ');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
