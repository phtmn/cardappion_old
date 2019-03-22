<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nome');
            $table->string('slogan')->nullable();
            $table->boolean('delivery')->default(0);
            $table->string('tel_delivery1')->nullable();
            $table->string('tel_delivery2')->nullable();

            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->string('ponto_ref')->nullable();

            $table->text('dias_aberto')->nullable();
            $table->text('dias_fechado')->nullable();
            $table->boolean('aberto_feriados')->default(0);
            $table->boolean('aberto_domingos')->default(0);

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whastapp')->nullable();
            $table->text('mapa')->nullable();
            $table->string('site')->nullable();
            $table->text('logo')->nullable();
            $table->text('foto_capa')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('lojas');
    }
}
