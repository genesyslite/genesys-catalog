<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatSystemIscTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_system_isc_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('description');
        });
        DB::table('cat_system_isc_types')->insert([
            ['id' => '01', 'active' => true, 'description' => 'Sistema al valor'],
            ['id' => '02', 'active' => true, 'description' => 'Aplicación del Monto Fijo'],
            ['id' => '03', 'active' => true, 'description' => 'Sistema de Precios de Venta al Público'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_system_isc_types');
    }
}
