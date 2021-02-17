<?php namespace Iamk\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkCategory extends Migration
{
    public function up()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->smallInteger('slug');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
