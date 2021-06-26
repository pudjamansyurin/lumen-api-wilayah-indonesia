<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah', function (Blueprint $table) {
            $table->string('KODE_WILAYAH', 8)->nullable(false)->unique()->primary();
            $table->string('MST_KODE_WILAYAH', 8)->nullable(false)->unique();
            $table->string('NAMA', 255)->nullable(false);
            $table->enum('LEVEL', ['1', '2', '3', '4'])->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayah');
    }
}
