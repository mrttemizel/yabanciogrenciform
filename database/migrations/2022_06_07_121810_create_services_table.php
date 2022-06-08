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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('header_tr')->nullable();
            $table->string('header_en')->nullable();
            $table->text('incontent_tr')->nullable();
            $table->text('incontent_en')->nullable();
            $table->string('slug_tr')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('servicesCategori_id');
            $table->foreign('servicesCategori_id')->references('id')->on('services_catergoris');
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
        Schema::dropIfExists('services');
    }
};
