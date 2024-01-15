<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('company');
            $table->string('company_name')->nullable();
            $table->string('kvk_number')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('house_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('email');
            $table->string('phone_number');
            $table->string('function')->nullable();
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained();
            $table->date('conversation_date');
            $table->time('conversation_time');
            $table->string('spoken_with');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('clients');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('conversations');
    }
}
