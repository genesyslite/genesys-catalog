<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatUnitTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_unit_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('symbol')->nullable();
            $table->string('description');
        });
        DB::table('cat_unit_types')->insert([
            ['id' => 'ZZ',  'active' => true, 'symbol' => null, 'description' => 'Servicio'],
            ['id' => 'BX',  'active' => true, 'symbol' => null, 'description' => 'Caja'],
            ['id' => 'GLL', 'active' => true, 'symbol' => null, 'description' => 'Galones'],
            ['id' => 'GRM', 'active' => true, 'symbol' => null, 'description' => 'Gramos'],
            ['id' => 'KGM', 'active' => true, 'symbol' => null, 'description' => 'Kilos'],
            ['id' => 'LTR', 'active' => true, 'symbol' => null, 'description' => 'Litros'],
            ['id' => 'MTR', 'active' => true, 'symbol' => null, 'description' => 'Metros'],
            ['id' => 'FOT', 'active' => true, 'symbol' => null, 'description' => 'Pies'],
            ['id' => 'INH', 'active' => true, 'symbol' => null, 'description' => 'Pulgadas'],
            ['id' => 'NIU', 'active' => true, 'symbol' => null, 'description' => 'Unidades'],
            ['id' => 'YRD', 'active' => true, 'symbol' => null, 'description' => 'Yardas'],
            ['id' => 'HUR', 'active' => true, 'symbol' => null, 'description' => 'Hora'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_unit_types');
    }
}
