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
        Schema::create('admin_comments', function (Blueprint $table) {
            $table->id()->comment('管理者コメントID');
            $table->unsignedBigInteger('counselor_id')->comment('カウンセラーID');
            $table->unsignedBigInteger('administrator_id')->comment('管理者ID');
            $table->string('comment')->comment('管理者コメント');
            $table->timestamps();

            $table->foreign('counselor_id')->references('id')->on('counselors');
            $table->foreign('administrator_id')->references('id')->on('administrators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_comments');
    }
};
