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
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('type_movement_id')->unsigned();
            $table->smallInteger('category_movement_id')->unsigned();
            $table->decimal('amount', 15, 2);
            $table->string('description', 255);
            $table->date('transaction_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_movement_id')->references('id')->on('types_movement');
            $table->foreign('category_movement_id')->references('id')->on('categories_movement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
