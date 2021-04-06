<?php namespace Iamk\Productinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIamkProductinfo11 extends Migration
{
    public function up()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->text('description_en')->default('0');
        });
    }
    
    public function down()
    {
        Schema::table('iamk_productinfo_', function($table)
        {
            $table->dropColumn('description_en');
        });
    }
}
