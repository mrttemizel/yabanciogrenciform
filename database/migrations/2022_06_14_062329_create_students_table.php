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
            $table->text('dg_tarihi')->nullable();
            $table->text('sehir')->nullable();
            $table->text('ilce')->nullable();
            $table->text('cep_number')->nullable();
            $table->text('email')->nullable();
            $table->text('adres')->nullable();
            $table->text('country')->nullable();
            $table->text('country_number')->nullable();
            $table->text('dogum_yeri')->nullable();
            $table->text('cinsiyet')->nullable();
            $table->text('askerlik_durumu')->nullable(); 
            $table->text('university')->nullable(); 
            $table->text('faculty')->nullable(); 
            $table->text('birim')->nullable(); 
            $table->text('Dateofstart')->nullable(); 
            $table->text('Dateoffinish')->nullable(); 
            $table->text('degree')->nullable(); 
            $table->text('ales')->nullable(); 
            $table->text('yds')->nullable();
            $table->text('alesBelge')->nullable();
            $table->text('ydsBelge')->nullable();
            $table->text('kimlik')->nullable(); 
            $table->text('diploma')->nullable(); 
            $table->text('transkript')->nullable(); 
            $table->text('askerlikDurumuBelgesi')->nullable(); 
            $table->text('kvkk')->nullable(); 
            $table->unsignedBigInteger('bolum_id');
            $table->foreign('bolum_id')->references('id')->on('yuksel_lisans_bolumlers');
            
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
