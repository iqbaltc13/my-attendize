<?php

use Illuminate\Database\Migrations\Migration;

class AddAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliates', function ($table) {
            $table->string('id',255)->primary();
            $table->string('name', 125);
            $table->integer('visits');
            $table->integer('tickets_sold')->default(0);
            $table->decimal('sales_volume', 10, 2)->default(0);
            $table->dateTime('last_visit');
            $table->string('account_id',255)->index();
            $table->string('event_id',255);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('affiliates');
    }
}
