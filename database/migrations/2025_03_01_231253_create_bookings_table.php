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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date("date_booking");
            $table->foreignId("time_start")->constrained("tims")->onDelete("cascade");;
            $table->foreignId("time_fin")->constrained("tims")->onDelete("cascade");
            $table->foreignId("id_salle")->constrained("salles")->onDelete("cascade");
            $table->foreignId("id_prof")->constrained("profs")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
