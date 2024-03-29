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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('logoTop')->nullable();
            $table->string('logoFooter')->nullable();
            $table->string('logoMobile')->nullable();
            $table->string('logoLoader')->nullable();

            $table->string('ads')->nullable();
            $table->string('altAds')->nullable();
            $table->string('backLinkAds')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('phone')->nullable();
            $table->string('webName')->nullable();
            $table->string('webDes')->nullable();

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
        Schema::dropIfExists('settings');
    }
};
