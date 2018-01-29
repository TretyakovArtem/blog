<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->text('text');
            $table->unsignedInteger('post_id');
            $table->timestamps();

            $table->index('post_id');

            $table->foreign('post_id', 'post_id_comment_foreign')
                ->references('id')
                ->on('posts')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('post_id_comment_foreign');
            $table->drop();
        });
    }
}
