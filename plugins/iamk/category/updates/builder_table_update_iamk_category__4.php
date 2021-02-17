<?php namespace Iamk\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkCategory4 extends Migration
{
    public function up()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->dropColumn('products');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_category_', function($table)
        {
            $table->text('products')->default('null');
        });
    }
}
