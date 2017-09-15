<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMigselectT2Table extends Migration
{
    
    public function up()
    {
        Schema::create('mig_selectT2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opcion')->nullable();
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
        Schema::dropIfExists('mig_selectT2');
    }
}
