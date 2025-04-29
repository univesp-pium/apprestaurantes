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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('nickname');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('cep');
            $table->string('number')->nullabe();
            $table->string('complement')->nullable();
            $table->text('observation')->nullable();
            $table->boolean('is_main_address')->default(false);
            $table->timestamps();

            //Foreign keys
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
