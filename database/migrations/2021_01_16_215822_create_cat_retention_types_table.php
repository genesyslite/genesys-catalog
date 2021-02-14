<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatRetentionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_retention_types', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->boolean('active');
            $table->decimal('percentage', 10, 2);
            $table->string('description');
        });

        DB::table('cat_retention_types')->insert([
            ['id' => '01', 'active' => true, 'percentage' => 3, 'description' => 'Tasa 3%'],
            ['id' => '02', 'active' => true, 'percentage' => 6, 'description' => 'Tasa 6%'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_retention_types');
    }
}
