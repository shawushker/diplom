<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCategoryToCategoryIdInGoodsTable extends Migration
{
    public function up()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->renameColumn('category', 'category_id');
        });
    }

    public function down()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->renameColumn('category_id', 'category');
        });
    }
}
