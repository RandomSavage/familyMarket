<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralItemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('general_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->text('image_url')->nullable();
            $table->float('price', 8, 2);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
          });

          Schema::table('general_items', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('general_categories')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_items');
    }
}
