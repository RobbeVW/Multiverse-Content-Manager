<?php namespace RobVW\MultiverseContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRobvwMultiversecontentmanagerUploads2 extends Migration
{
    public function up()
    {
        Schema::table('robvw_multiversecontentmanager_uploads', function($table)
        {
            $table->boolean('upload_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('robvw_multiversecontentmanager_uploads', function($table)
        {
            $table->dropColumn('upload_active');
        });
    }
}
