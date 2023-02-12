<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_type_id')->nullable(false)->references('id')->on('customers');
            $table->foreignId('customer_id')->nullable(true)->references('id')->on('customers');
            $table->foreignId('project_id')->nullable(true)->references('id')->on('projects');
            $table->date('date')->nullable(false);
            $table->time('time')->nullable(false);
            $table->bigInteger('amount')->nullable(false);
            $table->text('details')->nullable(false); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
