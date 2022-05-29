<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);//個人フットサル名
            $table->dateTime('holding_time');//開催時期
            $table->dateTime('reservation_time');//予約開始日
            $table->string('institution',255);//施設
            $table->string('court',255);//コート
            $table->integer('applicants');//募集人数
            $table->integer('remainder');//残り人数
            $table->integer('status');//状況
            $table->integer('level');//レベル
            $table->integer('category');//カテゴリー
            $table->integer('price');//価格
            $table->text('eligibility',1000);//参加資格
            $table->text('payment',1000);//支払い方法
            $table->text('notes',1000);//注意事項
            $table->boolean('flag');//削除フラグ 0：無効 1:有効
            $table->dateTimeTz('created_at');//作成日
            $table->dateTimeTz('updated_at');//更新日付
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
