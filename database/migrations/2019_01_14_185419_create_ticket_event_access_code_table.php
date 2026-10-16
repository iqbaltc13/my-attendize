<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketEventAccessCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_event_access_code', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_id',255)->nullable();
            $table->string('event_access_code_id',255)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('event_access_code_id')->references('id')->on('event_access_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('ticket_event_access_code');
        Schema::enableForeignKeyConstraints();
    }
}
