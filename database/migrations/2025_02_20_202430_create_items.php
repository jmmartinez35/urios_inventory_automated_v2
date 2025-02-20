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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('name');
            $table->tinyInteger('status')->default(0)->comment('1=hidden,0=visible');
            $table->integer('quantity')->default(0);
            $table->foreignId('category_id')->unsigned()->constrained('categories')->onDelete('cascade');
            $table->date('purchase_date')->nullable();
            $table->decimal('purchase_price', 10, 2)->nullable();
            $table->date('warranty_expiry')->nullable();
            $table->text('description')->nullable();
            $table->uuid('uuid')->unique()->nullable(false);
            $table->string('assigned_to')->nullable();
            $table->string('image_path')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
