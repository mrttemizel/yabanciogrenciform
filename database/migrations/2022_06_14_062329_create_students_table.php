<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('surname')->nullable();
            $table->text('country')->nullable();
            $table->text('country_number')->nullable();
            $table->text('place_of_birth')->nullable();
            $table->text('dg_tarihi')->nullable();
            $table->text('passport_photo')->nullable();
            $table->text('sehir')->nullable();
           
            $table->text('cep_number_number')->nullable();
            $table->text('email')->nullable();
            $table->text('adres')->nullable(); 
            $table->text('university')->nullable(); 
            $table->text('scholl_country')->nullable(); 
            $table->text('scholl_city')->nullable(); 
            $table->text('Dateoffinish')->nullable(); 
            $table->text('degree')->nullable(); 
            $table->text('exam_file_i')->nullable(); 
            $table->text('transkript')->nullable(); 
            $table->text('test_score')->nullable(); 
 	    	$table->text('kvkk')->nullable(); 
	    	$table->text('kvkk2')->nullable();
            $table->unsignedBigInteger('bolum_id');
            $table->foreign('bolum_id')->references('id')->on('yuksel_lisans_bolumlers');
 	    	$table->unsignedBigInteger('bolum_id_2');
            $table->foreign('bolum_id_2')->references('id')->on('yuksel_lisans_bolumlers');
            
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
        Schema::dropIfExists('students');
    }
};
