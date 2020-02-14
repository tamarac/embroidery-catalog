<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('material_id');
            $table->timestamps();
        });

        Schema::table('product_materials', function (Blueprint $table) {
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->foreign('material_id')
                ->references('id')
                ->on('materials');

                $table->index('product_id');
                $table->index('material_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_materials', function (Blueprint $table) {
            $table->dropForeign(['material_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('product_materials');
    }
}
