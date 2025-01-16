<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->longText('image')->change();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('image')->change(); 
        });
    }
}
