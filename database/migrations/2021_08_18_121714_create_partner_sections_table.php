<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('partners');
            $table->string('heading');
            $table->string('subheading')->nullable();
            $table->string('short_description')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('description')->nullable();
            $table->string('btn_class')->nullable();
            $table->string('btn_label')->nullable();
            $table->string('btn_link')->nullable();
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
        Schema::dropIfExists('partner_sections');
    }
}
