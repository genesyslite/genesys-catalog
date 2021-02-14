<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatLegendTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_legend_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('description');
        });

        DB::table('cat_legend_types')->insert([
            ['id' => '1000', 'active' => true, 'description' => 'Monto en Letras'],
            ['id' => '1002', 'active' => true, 'description' => 'TRANSFERENCIA GRATUITA DE UN BIEN Y/O SERVICIO PRESTADO GRATUITAMENTE'],
            ['id' => '2000', 'active' => true, 'description' => 'COMPROBANTE DE PERCEPCIÓN'],
            ['id' => '2001', 'active' => true, 'description' => 'BIENES TRANSFERIDOS EN LA AMAZONÍA REGIÓN SELVA PARA SER CONSUMIDOS EN LA MISMA'],
            ['id' => '2002', 'active' => true, 'description' => 'SERVICIOS PRESTADOS EN LA AMAZONÍA  REGIÓN SELVA PARA SER CONSUMIDOS EN LA MISMA'],
            ['id' => '2003', 'active' => true, 'description' => 'CONTRATOS DE CONSTRUCCIÓN EJECUTADOS  EN LA AMAZONÍA REGIÓN SELVA'],
            ['id' => '2004', 'active' => true, 'description' => 'Agencia de Viaje - Paquete turístico'],
            ['id' => '2005', 'active' => true, 'description' => 'Venta realizada por emisor itinerante'],
            ['id' => '2006', 'active' => true, 'description' => 'Operación sujeta a detracción'],
            ['id' => '2007', 'active' => true, 'description' => 'Operación sujeta al IVAP'],
            ['id' => '2008', 'active' => true, 'description' => 'VENTA EXONERADA DEL IGV-ISC-IPM. PROHIBIDA LA VENTA FUERA DE LA ZONA COMERCIAL DE TACNA'],
            ['id' => '2009', 'active' => true, 'description' => 'PRIMERA VENTA DE MERCANCÍA IDENTIFICABLE ENTRE USUARIOS DE LA ZONA COMERCIAL'],
            ['id' => '2010', 'active' => true, 'description' => 'Restitucion Simplificado de Derechos Arancelarios'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_legend_types');
    }
}
