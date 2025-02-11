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
        Schema::create('mail_requests', function (Blueprint $table) {
            $table->id();
            $table->string('service');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('mesg')->nullable()->default('No Message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_requests');
    }
};
