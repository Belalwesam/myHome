<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->text('property_type');
            $table->text('property_for');
            $table->text('property_space');
            $table->text('property_address');
            $table->text('property_bedrooms');
            $table->text('property_bathrooms');
            $table->text('property_garges');
            $table->text('property_desc');
            $table->integer('user_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
