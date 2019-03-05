<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cardapio_id');
            $table->unsignedBigInteger('user_id');

            $table->string('codigo_produto')->nullable();
            $table->string('descricao_resumida')->nullable();
            $table->string('descricao_completa');
            $table->integer('categoria')->nullable();
            $table->decimal('valor',10,2)->nullable();
            $table->text('foto')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('cardapio_id')->references('id')->on('cardapios')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
