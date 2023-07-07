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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('golongan_id');
            $table->string('pel_no');
            $table->string('pel_nama');
            $table->string('pel_alamat');
            $table->string('pel_hp');
            $table->string('pel_ktp');
            $table->string('pel_seri');
            $table->string('pel_meteran');
            $table->boolean('pel_aktif');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
