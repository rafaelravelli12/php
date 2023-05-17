<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_date_id');
            $table->integer('table_number');
            $table->boolean('booking_18h_20h')->default(false);
            $table->string('booking_18h_20h_added_by')->nullable();
            $table->boolean('booking_20h_22h')->default(false);
            $table->string('booking_20h_22h_added_by')->nullable();
            $table->boolean('booking_22h_24h')->default(false);
            $table->string('booking_22h_24h_added_by')->nullable();
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
        Schema::dropIfExists('tables');
    }
}
