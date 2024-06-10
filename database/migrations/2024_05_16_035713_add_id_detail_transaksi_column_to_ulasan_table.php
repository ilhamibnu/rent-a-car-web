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
        Schema::table('ulasan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detail_transaksi')->after('id');
            $table->foreign('id_detail_transaksi')->references('id')->on('detail_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ulasan', function (Blueprint $table) {
            $table->dropForeign(['id_detail_transaksi']);
            $table->dropColumn('id_detail_transaksi');
        });
    }
};
