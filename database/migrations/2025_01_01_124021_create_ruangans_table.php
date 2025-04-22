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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id(); 
            $table->string('kode_ruangan', 20)->unique(); 
            $table->string('nama_ruangan', 100); 
            $table->string('gedung', 50); 
            $table->integer('lantai'); 
            $table->string('jenis_ruangan', 50); 
            $table->integer('kapasitas'); 
            $table->text('keterangan')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
