<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatRelatedTaxDocumentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_related_tax_document_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('description');
        });
        DB::table('cat_related_tax_document_types')->insert([
            ['id' => '01', 'active' => true, 'description' => 'Factura – emitida para corregir error en el RUC'],
            ['id' => '02', 'active' => true, 'description' => 'Factura – emitida por anticipos'],
            ['id' => '03', 'active' => true, 'description' => 'Boleta de Venta – emitida por anticipos'],
            ['id' => '04', 'active' => true, 'description' => 'Ticket de Salida - ENAPU'],
            ['id' => '05', 'active' => true, 'description' => 'Código SCOP'],
            ['id' => '99', 'active' => true, 'description' => 'Otros'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_related_tax_document_types');
    }
}
