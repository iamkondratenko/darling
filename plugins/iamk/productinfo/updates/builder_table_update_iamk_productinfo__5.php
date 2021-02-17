<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkProductinfo5 extends Migration
{
    public function up()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->string('picture')->default('null');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->dropColumn('picture');
        });
    }
}
