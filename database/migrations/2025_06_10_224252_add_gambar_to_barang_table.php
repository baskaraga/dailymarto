<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGambarToBarangTable extends Migration
{
    public function up()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('stok');
        });
    }

    public function down()
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }
}
