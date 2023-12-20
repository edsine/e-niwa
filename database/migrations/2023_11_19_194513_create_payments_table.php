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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->dateTime('payment_date')->default(now());
            $table->string('transaction_reference', 100);
            $table->string('service', 100);
            $table->decimal('amount', 10, 2);
            $table->enum('payment_status', ['paid', 'pending'])->default('pending');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('rrr')->nullable();
            $table->integer('invoice_number')->nullable();
            $table->integer('invoice_generated_at')->nullable();
            $table->integer('invoice_duration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
