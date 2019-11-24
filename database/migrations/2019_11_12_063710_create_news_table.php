<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumtext('news_title');
            $table->string('writer_id');
            $table->longtext('news_description');
            $table->longtext('news');
            $table->string('categories');
            $table->integer('views');
            $table->string('seo_title');
            $table->longtext('seo_keywords');
            $table->longtext('seo_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
