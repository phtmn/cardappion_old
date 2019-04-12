<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('user_id');
            $table->string('store_name');
            $table->string('slogan')->nullable();
            $table->string('description')->nullable();
            $table->string('category');
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('maps')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->boolean('has_delivery')->default(0);
            $table->string('delivery_phone')->nullable();
            $table->string('banner')->nullable();
            $table->string('logo')->nullable();

            $table->foreign('tenant_id')->references('id')->on('tenants');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('configs');
    }
}
