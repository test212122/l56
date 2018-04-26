<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户表
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name',255);//用户名
            $table->string('password',255);//密码
            $table->string('tpassword',255)->nullable();//交易密码
            $table->string('mobile',255)->nullable();//手机号码
            $table->string('email',255)->nullable();//邮箱
            $table->boolean('is_lock')->default(false);//是否冻结
            $table->integer('sort')->default(59);//排序
            $table->timestamps();
        });
        //用户关系网
        Schema::create('user_tree', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//用户id
            $table->integer('tid')->nullable();//用户推荐人id
            $table->integer('aid')->nullable();//用户推荐人id
            $table->integer('left_id')->nullable();//左区用户
            $table->integer('right_id')->nullable();//右区用户
            $table->integer('layer')->default(1);//第几代用户
            $table->text('left_tree')->nullable();//右区团队用户
            $table->text('right_tree')->nullable();//右区团队用户
            $table->text('a_tree')->nullable();//安置人团队
            $table->text('t_tree')->nullable();//推荐人团队
            $table->timestamps();
        });
        //用户业绩
        Schema::create('user_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//用户id
            $table->decimal('left_asset',20,8)->default(0); //左区业绩
            $table->decimal('total_left_asset',20,8)->default(0);//左区总业绩
            $table->decimal('right_asset',20,8)->default(0);//右区业绩
            $table->decimal('total_right_asset',20,8)->default(0);//右区总业绩
            $table->timestamps();
        });
        //币种
        Schema::create('coins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);//币种中文名
            $table->string('en_name',255);//币种英文名
            $table->string('short_name',255);//简称
            $table->string('logo_path',255)->nullable();//简称
            $table->boolean('is_out')->default(false);//是否出金
            $table->boolean('is_in')->default(false);//是否入金
            $table->timestamps();
        });
        //用户账户
        Schema::create('user_finance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//用户id
            $table->integer('coin_id');//币种
            $table->decimal('num',20,8);//用户可用资产
            $table->decimal('lock_num',20,8);//用户冻结资产
            $table->boolean('status')->default(true);//
            $table->string('index')->unique();//唯一值
            $table->timestamps();
        });
        //用户静态奖
        Schema::create('reward_static', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');//用户id
            $table->integer('rate')->nullable();//比例
            $table->decimal('num',20,8);//金额
            $table->decimal('num_u',20,8);//用户冻结资产
            $table->boolean('status')->default(true);//是否释放
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
