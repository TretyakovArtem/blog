<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('likes');

            $table->index('post_id');

            $table->foreign('post_id', 'post_id_likes_foreign')
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
        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('post_id_foreign');
            $table->drop();
        });
    }
}
