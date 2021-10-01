<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('bank');
            $table->string('category');
            $table->string('business');
            $table->string('period');
            $table->string('need');
            $table->string('analysis');
            $table->string('yes');
            $table->string('competition');
            $table->string('obsatcle');
            $table->string('strategy');
            $table->string('grant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
