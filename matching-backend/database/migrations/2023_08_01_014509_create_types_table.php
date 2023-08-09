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
        Schema::create('types', function (Blueprint $table) {
            $table->id()->comment('管理企業ID');
            $table->string('name')->comment('名前');
            $table->boolean('is_su')->default(false)->comment('SU権限');
            $table->boolean('is_edit')->default(false)->comment('edit権限');
            $table->string('register_code')->index()->comment('登録用コード');
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
        Schema::dropIfExists('types');
    }
};
