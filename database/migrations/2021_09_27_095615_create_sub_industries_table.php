<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id')
                    ->references('id')
                    ->on('industries')
                    ->onDelete('cascade');
            $table->string('name');
            $table->boolean('for_seller')->default(0);
            $table->boolean('is_active')->default(1);        

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
        Schema::dropIfExists('sub_industries');
    }
}
