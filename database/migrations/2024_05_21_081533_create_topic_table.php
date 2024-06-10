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
        Schema::create('ntt_topic', function (Blueprint $table) {
            $table->id();
            $table->string("name", 1000);
            $table->string("slug", 1000)->nullable();
            $table->text("description", 255)->nullable();
            $table->unsignedInteger("created_by")->nullable();
            $table->unsignedInteger("updated_by")->nullable();
            $table->unsignedTinyInteger("status")->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ntt_topic');
    }
};
