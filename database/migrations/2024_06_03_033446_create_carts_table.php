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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id'); // Ensure this is an unsigned big integer
            $table->string('product_name', 100); // Corrected the syntax for the length
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->timestamps();

            // Adding the foreign key constraint
            $table->foreign('customer_id')->references('id')->on('user_accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
