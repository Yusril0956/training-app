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
        Schema::create('tmbook', function (Blueprint $table) {
            $table->id('i_id_book')->comment('ID Buku');
            $table->string('n_title')->comment('Judul Buku');
            $table->string('n_author')->comment('Pengarang Buku');
            $table->integer('i_rating')->comment('Rating Buku');
            $table->unsignedBigInteger('i_entry')->nullable()->comment('User Entry');
            $table->unsignedBigInteger('i_update')->nullable()->comment('User Update');
            $table->timestamp('d_entry')->comment('Tanggal Entry');
            $table->timestamp('d_update')->nullable()->comment('Tanggal Update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmbook');
    }
};
