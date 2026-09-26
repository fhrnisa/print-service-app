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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->string('itemable_type')->nullable();
            $table->unsignedBigInteger('itemable_id')->nullable();
            $table->unsignedInteger('quantity')->default(1);
            $table->json('details')->nullable();
            $table->string('file_path')->nullable();
            $table->decimal('estimated_price', 10, 2)->nullable();
            $table->decimal('confirmed_price', 10, 2)->nullable();
            $table->timestamps();

            $table->index(['itemable_type', 'itemable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
