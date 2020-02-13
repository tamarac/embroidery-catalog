<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('type_id');
            $table->string('name', 100)->nullable();
            $table->text('description')->nullable();
            $table->text('material_used')->nullable();
            $table->double('price')->nullable();
            $table->double('cost_price')->nullable();
            $table->timestamps();
        });

        Schema::table('produts', function (Blueprint $table) {
            $table->foreign('type_id')
                ->on('types')
                ->references('id');

            $table->index('type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produts', function (Blueprint $table) {
            $table->dropForeign('type_id');
            $table->dropIndex('type_id');
        });
        Schema::dropIfExists('produts');
    }
}
