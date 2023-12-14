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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('rrr')->nullable();
            $table->integer('invoice_number')->nullable();
            $table->integer('invoice_generated_at')->nullable();
            $table->integer('invoice_duration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('rrr')->nullable();
            $table->dropColumn('invoice_number')->nullable();
            $table->dropColumn('invoice_generated_at')->nullable();
            $table->dropColumn('invoice_duration')->nullable();
        });
    }
};
