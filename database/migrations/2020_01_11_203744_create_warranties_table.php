<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('category');
            $table->string('subCategory');
            $table->string('brand');
            $table->string('picture')->nullable();
            $table->double('cost');
            $table->date('dateOfPurchase')->nullable();
            $table->string('placeOfPurchase')->nullable();
            $table->string('serialNumber')->nullable();
            $table->string('warrantyType')->nullable();
            $table->string('duration')->nullable();
            $table->string('additionalWarranty')->nullable();
            $table->string('additionalDuration')->nullable();
            $table->string('receiptPicture')->nullable();
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
        Schema::dropIfExists('warranties');
    }
}
