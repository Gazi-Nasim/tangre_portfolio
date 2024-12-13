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
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('logo_two');
            $table->string('home_cover_photo');
            $table->string('home_interior_photo');
            $table->string('home_exterior_photo');
            $table->string('home_branding_photo');
            $table->string('home_exclusive_photo');
            $table->string('exclusive_cover_photo');
            $table->string('service_cover_photo');
            $table->string('interior_cover_photo');
            $table->string('exterior_cover_photo');
            $table->string('branding_cover_photo');
            $table->string('portfolio_cover_photo');
            $table->string('contact_cover_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_infos');
    }
};
