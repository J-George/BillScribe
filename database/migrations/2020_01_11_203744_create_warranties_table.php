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
            $table->string('title');
            $table->string('category');
            $table->string('subCategory');
            $table->string('brand');
            $table->string('picture')->default(NULL);
            $table->double('cost');
            $table->date('dateOfPurchase');
            $table->string('placeOfPurchase');
            $table->string('serialNumber')->default(NULL);
            $table->string('warrantyType')->default(NULL);
            $table->string('duration')->default(NULL);
            $table->string('additionalWarranty')->default(NULL);
            $table->string('additionalDuration')->default(NULL);
            $table->string('receiptPicture')->default(NULL);
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
