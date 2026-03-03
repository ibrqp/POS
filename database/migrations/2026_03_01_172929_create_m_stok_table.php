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
        Schema::create('m_stok', function (Blueprint $table) {
            $table->id('stok_id');

            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('level_id');

            $table->dateTime('stok_tanggal');
            $table->integer('stok_jumlah');

            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('m_supplier')
                ->cascadeOnDelete();

            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang')
                ->cascadeOnDelete();

            $table->foreign('level_id')
                ->references('level_id')
                ->on('m_user')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_stok');
    }
};
