<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pregunta', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger("enquesta_id")->unsigned();
            $table->integer("numero");
            $table->string("enunciat");
            $table->timestamps();

            $table->foreign("enquesta_id")->references('id')->on("enquesta")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
