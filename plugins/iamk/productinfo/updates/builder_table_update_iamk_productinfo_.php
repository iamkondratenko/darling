<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkProductinfo extends Migration
{
    public function up()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->smallInteger('description');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
