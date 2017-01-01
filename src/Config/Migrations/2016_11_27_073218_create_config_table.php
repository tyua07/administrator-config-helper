<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');           // id
            $table->string('name', 20);         // key
            $table->string('value', 100);       // 值
            $table->timestamps();               // 加入 created_at 和 updated_at 字段。
            $table->index(['name', 'value']);   //创建联合索引
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('config');
    }
}
