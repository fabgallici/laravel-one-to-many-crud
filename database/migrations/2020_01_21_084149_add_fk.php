<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table -> bigInteger('post_id')
                   -> unsigned()
                   -> index();

            $table -> foreign('post_id', 'posts_comments')
                   -> references('id')
                   -> on('posts');
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
              $table -> dropForeign('posts_comments');
              $table -> dropColumn('post_id');
        });
    }
}
