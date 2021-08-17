<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_addons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_id')->constrained('pricings');
            $table->string('title');
            $table->double('rate', 15, 2)->nullable()->default(0.00);
            $table->integer('sort')->unsigned()->nullable()->default(12);
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
        Schema::dropIfExists('pricing_addons');
    }
}
