<?php namespace RobVW\MultiverseContentManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRobvwMultiversecontentmanagerUploads extends Migration
{
    public function up()
    {
        Schema::table('robvw_multiversecontentmanager_uploads', function($table)
        {
            $table->string('upload_title', 255)->nullable();
            $table->string('upload_description', 255)->nullable();
            $table->renameColumn('path', 'upload_path');
            $table->dropColumn('title');
            $table->dropColumn('description');
        });
    }
    
    public function down()
    {
        Schema::table('robvw_multiversecontentmanager_uploads', function($table)
        {
            $table->dropColumn('upload_title');
            $table->dropColumn('upload_description');
            $table->renameColumn('upload_path', 'path');
            $table->string('title', 255)->nullable();
            $table->string('description', 255)->nullable();
        });
    }
}
