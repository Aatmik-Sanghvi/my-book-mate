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
        Schema::create('borrowed_book_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('request_to_user_id');
            $table->unsignedInteger('request_by_user_id');
            $table->unsignedInteger('book_id');
            $table->text('request_message');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowed_book_histories');
    }
};
