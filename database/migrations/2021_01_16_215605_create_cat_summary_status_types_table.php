<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatSummaryStatusTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_summary_status_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->string('description');
        });
        DB::table('cat_summary_status_types')->insert([
            ['id' => '1', 'active' => true, 'description' => 'Adicionar'],
            ['id' => '2', 'active' => true, 'description' => 'Modificar'],
            ['id' => '3', 'active' => true, 'description' => 'Anulado'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_summary_status_types');
    }
}
