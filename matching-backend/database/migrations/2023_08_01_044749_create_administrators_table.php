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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id()->comment('管理者ID');
            $table->string('register_id')->comment('管理企業ID');
            $table->string('name')->comment('氏名');
            $table->string('name_kana')->comment('カナ');
            $table->string('phone_number', 11)->comment('電話番号');
            $table->string('email_address')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->rememberToken('remember_token')->comment('自動ログイン用token');
            $table->timestamps();
            $table->softDeletes('deleted_at')->comment('削除日');

            $table->foreign('register_id')->references('register_code')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
};
