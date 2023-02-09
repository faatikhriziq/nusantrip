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
        Schema::table('review_tour_ratings', function (Blueprint $table) {
            $table->unsignedBigInteger('tour_id')->after('id')->required();

            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_tour_ratings', function (Blueprint $table) {
            $table->dropForeign(['tour_id']);
            $table->dropColumn('tour_id');
        });
    }
};
