<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('access');
            $table->integer('sports_category_id');
            $table->string('title');
            $table->text('description');
            $table->string('release_date')->nullable();
            $table->string('duration');
            $table->string('video_type');
            $table->text('video');
            $table->integer('status')->default(1);
            $table->string('tag');
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
        Schema::dropIfExists('sports_videos');
    }
}
