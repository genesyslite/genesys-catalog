<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatRelatedDocumentsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_related_documents_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('description');
        });
        DB::table('cat_related_documents_types')->insert([
            ['id' => '01', 'active' => true, 'description' => 'Numeración DAM'],
            ['id' => '02', 'active' => true, 'description' => 'Número de orden de entrega'],
            ['id' => '03', 'active' => true, 'description' => 'Número SCOP'],
            ['id' => '04', 'active' => true, 'description' => 'Número de manifiesto de carga'],
            ['id' => '05', 'active' => true, 'description' => 'Número de constancia de detracción'],
            ['id' => '06', 'active' => true, 'description' => 'Otros'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_related_documents_types');
    }
}
