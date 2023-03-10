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
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            //$table->string('experience');

          $table->foreignId('diplome_id')->constrained()->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('enterprise_id')->constrained()->nullable();

           //$table->foreignId('contact_id')->constrained()->nullable();
           $table->foreignId('experience_id')->constrained()->nullable();
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
        Schema::dropIfExists('postes');
    }
};
