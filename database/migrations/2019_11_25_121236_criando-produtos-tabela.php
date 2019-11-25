<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoProdutosTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                        //nome da tabela
         Schema::create('produtos', function(Blueprint $table){
            $table->bigincrements('id');
            $table->string('nome',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   //funcao para dropar a tabela
        Schema::dropIfExists('produtos');
    }
}
