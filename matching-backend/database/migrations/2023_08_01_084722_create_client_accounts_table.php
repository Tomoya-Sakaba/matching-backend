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
        Schema::create('client_accounts', function (Blueprint $table) {
            $table->id()->comment('企業アカウントID');
            $table->unsignedBigInteger('client_id')->comment('企業ID');
            $table->string('name')->comment('名前');
            $table->string('email_address')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->timestamps();
            $table->softDeletes('deleted_at')->comment('削除日');

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_accounts');
    }
};
