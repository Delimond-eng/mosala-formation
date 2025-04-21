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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->string('media');
            $table->string('price');
            $table->string('module');
            $table->string('quize');
            $table->string('lang')->default('Français');
            $table->string('date')->nullable();
            $table->string('duree')->nullable();
            $table->string('duree_unite')->nullable();
            $table->string('time')->nullable();
            $table->string('place')->default("online");
            $table->string('type')->nullable();
            $table->string('spotlink')->nullable();
            $table->unsignedBigInteger('domaine_id');
            $table->unsignedBigInteger('formateur_id');
            $table->boolean("slider")->default(false);
            $table->unsignedBigInteger("user_id");
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
        Schema::dropIfExists('formations');
    }
};
