<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('prodi_quotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('graduation_id')->constrained();
            $table->foreignId('study_program_id')->constrained();
            $table->integer('quota');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prodi_quota');
    }
};
