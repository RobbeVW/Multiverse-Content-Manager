<?php namespace RobVW\MultiverseContentManager;

use System\Classes\PluginBase;
use Event;
use RobVW\MultiverseContentManager\Models\Upload;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['manogi.Mediathumb'];

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        opcache_reset();
        Event::listen('backend.multiverse.extendMain', function () {
            return Upload::all()->toArray();
        });
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'fireEvent' => ['Event', 'fire']
            ]
        ];
    }
}
