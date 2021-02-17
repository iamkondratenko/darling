<?php namespace Iamk\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkCategory2 extends Migration
{
    public function up()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->renameColumn('category_info', 'subcategory');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->renameColumn('subcategory', 'category_info');
        });
    }
}
