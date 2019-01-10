<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->default(0)->change();
            $table->text('desc')->nullable()->change();
            $table->integer('hot_product')->default(0)->change();
            $table->text('product_detail')->nullable()->change();
            $table->text('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
