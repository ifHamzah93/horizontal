<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dyn_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('icon', 50)->nullable();
            $table->string('link_type', 20)->nullable();
            $table->string('page_id', 20)->nullable();
            $table->string('module_name', 50)->nullable();
            $table->text('url', 50);
            $table->text('uri', 50)->nullable();
            $table->text('dyn_group_id', 50)->nullable();
            $table->string('position', 50)->nullable();
            $table->string('target', 50)->nullable();
            $table->string('parent_id');
            $table->smallInteger('is_parent')->nullable();
            $table->string('show_menu', 1)->nullable();
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
        Schema::dropIfExists('dyn_menu');
    }
}
