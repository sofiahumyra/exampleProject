<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //

            $table->integer('total_seat');
            $table->date('date');
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('flights');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
              $table->dropColumn('total_seat');
              $table->dropColumn('date');
              $table->dropForeign(['flight_id']);
              $table->dropColumn('flight_id');

        });
    }
};
