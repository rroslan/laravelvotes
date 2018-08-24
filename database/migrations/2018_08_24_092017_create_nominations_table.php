<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('gender');
            $table->string('bio')->nullable();
            $table->string('linked_url')->nullable();
            $table->string('business_name')->nullable();
            $table->string('reason_for_nomination')->nullable();
            $table->string('category_id')->nullable();
            $table->integer('no_of_nominations');
            $table->boolean('is_admin_selected')->default(0);
            $table->boolean('is_won')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('nominations');
    }
}
