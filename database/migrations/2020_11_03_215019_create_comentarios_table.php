<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            
 $table->bigIncrements("id");

 $table->string("comentario");
 
 $table->unsignedBigInteger("persona")->unsigned();
 $table->unsignedBigInteger("producto")->unsigned();
 
 $table->foreign("producto")->references("id")->on("productos")->onDelete("cascade");
 $table->foreign("persona")->references("id")->on("personas")->onDelete("cascade");

 $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
