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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('postTitle');
            $table->longText('postContent');
            $table->enum('status', ['featured', 'non-featured']);
            $table->string('fImagePost');
            $table->bigInteger('countViews')->default(0);
            $table->string('slugPost');

            $table->integer('category_id');
            $table->integer('user_id');

            $table->string('metaDes')->nullable();
            $table->string('metaKey')->nullable();
            $table->string('metaTitle')->nullable();

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
        Schema::dropIfExists('posts');
    }
};
