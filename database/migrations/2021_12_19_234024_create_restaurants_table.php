<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('name')->nullable()->default('')->nullable();
            $table->string('furi_name')->default('')->nullable();
            $table->string('post')->default('')->nullable();
            $table->string('address')->default('')->nullable();
            $table->string('rest_kind')->default(0)->nullable();
            $table->time('open_time')->default('00:00:00')->nullable();
            $table->time('close_time')->default('00:00:00')->nullable();
            $table->string('link')->nullable();
            $table->text('info')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
