<?php

namespace Craft;

class HowToVideosPlugin extends BasePlugin
{

    /**
     * Returns the plugin’s version number.
     *
     * @return string The plugin’s version number.
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * Returns the plugin developer’s name.
     *
     * @return string The plugin developer’s name.
     */
    public function getDeveloper()
    {
        return 'Port One Five';
    }

    /**
     * Returns the plugin developer’s URL.
     *
     * @return string The plugin developer’s URL.
     */
    public function getDeveloperUrl()
    {
        return 'http://portonefive.com';
    }

    public function getDescription()
    {
        return 'How to videos to help you with the management of your site.';
    }

    public function getName()
    {
        return 'How To Videos';
    }

    public function hasCpSection()
    {
        return true;
    }
}