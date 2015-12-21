<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function ($table) {
            $table->renameColumn('category', 'category_id');
            $table->string('customer_email')->after('customer_tel')->nullable();
            $table->string('post_serial')->after('category');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function ($table) {
            $table->renameColumn('category_id', 'category');
            $table->dropColumn('customer_email');
            $table->dropColumn('post_serial');
        });


    }
}
