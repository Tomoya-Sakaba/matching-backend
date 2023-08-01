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
        Schema::create('client_comments', function (Blueprint $table) {
            $table->id()->comment('企業コメントID');
            $table->unsignedBigInteger('counselor_id')->comment('カウンセラーID');
            $table->unsignedBigInteger('client_account_id')->comment('企業アカウントID');
            $table->string('comment')->comment('企業コメント');
            $table->timestamps();

            $table->foreign('counselor_id')->references('id')->on('counselors');
            $table->foreign('client_account_id')->references('id')->on('client_accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_comments');
    }
};
