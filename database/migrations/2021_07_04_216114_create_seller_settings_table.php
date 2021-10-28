<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('key_person')->nullable();
            $table->string('key_person_pan')->nullable();
            $table->string('key_person_adhaar')->nullable();
            $table->string('key_person_phone')->nullable();
            $table->string('key_person_email')->nullable();
            $table->string('key_person_signature')->nullable();
            $table->unsignedBigInteger('firmtype_id');
            $table->foreign('firmtype_id')->references('id')->on('firm_types')->onDelete('cascade');
            $table->string('legal_name')->nullable();
            $table->string('firm_phone')->nullable();
            $table->string('firm_email')->nullable();
            $table->text('firm_address')->nullable();
            $table->string('firm_logo')->nullable();
            $table->string('firm_url')->nullable();
            $table->string('ecom_url')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('beneficiary_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
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
        Schema::dropIfExists('seller_settings');
    }
}
