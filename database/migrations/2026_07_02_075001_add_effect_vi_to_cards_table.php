<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->text('effect_vi')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('effect_vi');
        });
    }
};