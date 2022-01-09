<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            // $table->integer('menu_kind_id')->nullable()->index();
            $table->integer('restaurant_id')->index();
            $table->string('name');
            $table->string('furi_name');
            $table->integer('price')->default(0);
            $table->integer('rest_menu_kind_id')->default(0);
            $table->boolean('is_lunch')->default(false);
            $table->boolean('is_dinner')->default(false);
            $table->text('info')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
