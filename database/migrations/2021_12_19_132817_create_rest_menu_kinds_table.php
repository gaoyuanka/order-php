<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestMenuKindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_menu_kinds', function (Blueprint $table) {
            $table->id();
            $table->integer('restaurant_id')->nullable()->index();
            $table->integer('kind_id')->default(0)->nullable();
            $table->timestamps();
            $table->unique(['kind_id','restaurant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rest_menu_kinds');
    }
}
