<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminMenuTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //后台菜单表
        Schema::create('admin_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);//标题
            $table->string('url',255)->nullable();//路由
            $table->integer('parent_id')->nullable();//父级id
            $table->boolean('is_show')->default(false);//是否展示
            $table->boolean('is_parameter')->default(false);//是否代参数
            $table->integer('sort')->default(59);//排序
            $table->timestamps();
        });
        //后台菜单表
        Schema::create('admin_menu_node', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id');//菜单id
            $table->integer('group_id');//管理员分组
        });
        Schema::create('admin_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);//标题
            $table->boolean('is_enable')->default(false);//是否启用
            $table->timestamps();
        });
        Schema::table('admins', function (Blueprint $table) {
            $table->integer('group_id')->nullable();//管理员权限id
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
