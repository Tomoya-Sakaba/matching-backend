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
        Schema::create('clients', function (Blueprint $table) {
            $table->id()->comment('企業ID');
            $table->string('name')->comment('企業名');
            $table->string('phone_number', 11)->comment('電話番号');
            $table->string('client_url')->nullable()->comment('企業サイトURL');
            $table->integer('code')->comment('郵便番号');
            $table->string('prefecture')->comment('都道府県');
            $table->string('city')->comment('市区町村');
            $table->string('address')->comment('番地');
            $table->string('building')->nullable()->comment('建物');
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
        Schema::dropIfExists('clients');
    }
};
