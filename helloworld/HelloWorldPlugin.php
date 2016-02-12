<?php
namespace Craft;

class HelloWorldPlugin extends BasePlugin
{

    public function getName()
    {
        return Craft::t('Hello World');
    }

    public function getVersion()
    {
        return '0.1';
    }

    public function getDeveloper()
    {
        return 'Craft Plus';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/CraftPlus/Hello-World';
    }

    public function getDeveloperUrl()
    {
        return 'https://craftpl.us/';
    }

    public function hasCpSection()
    {
        return false;
    }

}
