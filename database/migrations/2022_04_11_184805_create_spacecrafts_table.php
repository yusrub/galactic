<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacecraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spacecrafts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('class')->nullable(false);
            $table->integer('crew')->nullable(true)->default(0);
            $table->string('image')->nullable(true);
            $table->decimal('value', 10, 2)->nullable(true)->default(0);
            $table->enum('status', ['active', 'inactive', 'operational'])->nullable(false)->default('active');
            $table->json('armament')->nullable(true);
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
        Schema::dropIfExists('spacecrafts');
    }
}
