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
        Schema::create('events', function (Blueprint $table) {
            $table->id()->foreign('event_tag.event_id');
            $table->string('name', 100);
            $table->string('slug', 105);
            $table->text('description');
            $table->dateTime('start');
            $table->time('duration');
            $table->string('image');
            $table->decimal('price');
            $table->integer('total_tickets');
            $table->dateTime('end_of_sale');
            $table->integer('location_id');
            $table->integer('user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
