<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatPerceptionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_perception_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->decimal('percentage', 10, 2);
            $table->string('description');
        });
        DB::table('cat_perception_types')->insert([
            ['id' => '01', 'active' => true, 'percentage' => 2,   'description' => 'Percepción Venta Interna'],
            ['id' => '02', 'active' => true, 'percentage' => 1,   'description' => 'Percepción a la adquisición de combustible'],
            ['id' => '03', 'active' => true, 'percentage' => 0.5, 'description' => 'Percepción realizada al agente de percepción con tasa especial'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_perception_types');
    }
}
