<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatChargeDiscountTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_charge_discount_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->boolean('base');
            $table->enum('level', ['item', 'global']);
            $table->enum('type', ['discount', 'charge']);
            $table->string('description');
        });
        DB::table('cat_charge_discount_types')->insert([
            ['id' => '00', 'active' => true,  'base' => true,  'level' => 'item',   'type' => 'discount', 'description' => 'Descuentos que afectan la base imponible del IGV/IVAP'],
            ['id' => '01', 'active' => true,  'base' => false, 'level' => 'item',   'type' => 'discount', 'description' => 'Descuentos que no afectan la base imponible del IGV/IVAP'],
            ['id' => '02', 'active' => true,  'base' => true,  'level' => 'global', 'type' => 'discount', 'description' => 'Descuentos globales que afectan la base imponible del IGV/IVAP'],
            ['id' => '03', 'active' => true,  'base' => false, 'level' => 'global', 'type' => 'discount', 'description' => 'Descuentos globales que no afectan la base imponible del IGV/IVAP'],
            ['id' => '04', 'active' => false, 'base' => true,  'level' => 'global', 'type' => 'discount', 'description' => 'Descuentos globales por anticipos gravados que afectan la base imponible del IGV/IVAP'],
            ['id' => '05', 'active' => false, 'base' => false, 'level' => 'global', 'type' => 'discount', 'description' => 'Descuentos globales por anticipos exonerados'],
            ['id' => '06', 'active' => false, 'base' => false, 'level' => 'global', 'type' => 'discount', 'description' => 'Descuentos globales por anticipos inafectos'],
            ['id' => '45', 'active' => false, 'base' => true,  'level' => 'global', 'type' => 'charge',   'description' => 'FISE'],
            ['id' => '46', 'active' => true,  'base' => false, 'level' => 'global', 'type' => 'charge',   'description' => 'Recargo al consumo y/o propinas'],
            ['id' => '47', 'active' => true,  'base' => true,  'level' => 'item',   'type' => 'charge',   'description' => 'Cargos que afectan la base imponible del IGV/IVAP'],
            ['id' => '48', 'active' => true,  'base' => false, 'level' => 'item',   'type' => 'charge',   'description' => 'Cargos que no afectan la base imponible del IGV/IVAP'],
            ['id' => '49', 'active' => true,  'base' => true,  'level' => 'global', 'type' => 'charge',   'description' => 'Cargos globales que afectan la base imponible del IGV/IVAP'],
            ['id' => '50', 'active' => true,  'base' => false, 'level' => 'global', 'type' => 'charge',   'description' => 'Cargos globales que no afectan la base imponible del IGV/IVAP'],
            ['id' => '51', 'active' => false, 'base' => true,  'level' => 'global', 'type' => 'charge',   'description' => 'Percepción venta interna'],
            ['id' => '52', 'active' => false, 'base' => true,  'level' => 'global', 'type' => 'charge',   'description' => 'Percepción a la adquisición de combustible'],
            ['id' => '53', 'active' => false, 'base' => true,  'level' => 'global', 'type' => 'charge',   'description' => 'Percepción realizada al agente de percepción con tasa especial'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_charge_discount_types');
    }
}
