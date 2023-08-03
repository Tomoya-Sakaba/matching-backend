<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselors', function (Blueprint $table) {
            $table->id()->comment('カウンセラーID');
            $table->string('name')->comment('氏名');
            $table->string('register_code')->comment('登録用コード');
            $table->string('email_address')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('phone_number', 11)->comment('電話番号');
            $table->string('gender')->comment('性別');
            $table->date('birthday')->comment('誕生日');
            $table->unsignedBigInteger('profession_id')->comment('職業ID');
            $table->integer('code')->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('address')->comment('番地');
            $table->string('building')->nullable()->comment('建物');
            $table->string('movie_url')->nullable()->comment('動画URL');
            $table->timestamps();

            $table->foreign('profession_id')->references('id')->on('professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counselors');
    }
};
