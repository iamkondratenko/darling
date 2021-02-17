<?php namespace Iamk\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkCategory5 extends Migration
{
    public function up()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->string('main_banner_mobile')->default('null');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->dropColumn('main_banner_mobile');
        });
    }
}
