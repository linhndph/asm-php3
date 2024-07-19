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
        Schema::create('tintucs', function (Blueprint $table) {
            $table->id();
            $table->string('tieuDe',255);
            $table->text('noiDung');
            $table->text('moTa');
            $table->string('anh');
            $table->foreignId('id_danh_muc')->constrained('danhmucs');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tintucs');
    }
};
