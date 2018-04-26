<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //新闻公告
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->string('title',255);//标题
            $table->string('lang',5)->default('zh');
            $table->integer('sort')->default(99);//排序
            $table->integer('status')->nullable();//推荐类型
            $table->string('intro',500)->nullable();//简介
            $table->text('content')->nullable();//内容
            $table->timestamps();
        });
        //分类
        Schema::create('news_class', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('title',255);//标题
            $table->integer('sort')->default(99);//排序
            $table->integer('status')->nullable();//推荐类型
            $table->string('intro',500)->nullable();//简介
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
        //
    }
}
