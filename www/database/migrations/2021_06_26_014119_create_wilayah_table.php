<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string('KODE_WILAYAH', 8)->nullable(false)->primary();
            $table->string('MST_KODE_WILAYAH', 8)->nullable(false);
            $table->string('NAMA', 255)->nullable(false);
            $table->enum('LEVEL', ['1', '2', '3', '4'])->nullable(false);
            $table->unique(['KODE_WILAYAH', 'MST_KODE_WILAYAH']);
        });

        $file = realpath(__DIR__ . '/wilayah-20170525.sql');

        DB::unprepared(file_get_contents($file));
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
