<?php
/**
 * @package   Twig Better Sort
 * @author    Victor In.
 * @copyright Copyright 2016
 * @link      https://github.com/victor-in/Craft-TwigBetterSort
 * @license   MIT
 */
namespace Craft;

class TwigBetterSortPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Twig Better Sort Filter');
    }
	
	public function getVersion()
    {
        return '0.3';
    }
	
	public function getSchemaVersion() {
		return '0.1';
	}

    public function getDeveloper()
    {
        return 'Victor In.';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }
	
    public function getDocumentationUrl()
    {
        return 'https://github.com/victor-in/Craft-TwigBetterSort';
    }
	
	public function getReleaseFeedUrl()
	{
		return 'https://github.com/victor-in/Craft-TwigBetterSort/blob/master/changelog.json';
	}

    public function addTwigExtension()
    {
        Craft::import('plugins.twigbettersort.twigextensions.TwigBetterSortTwigExtension');
        return new TwigBetterSortTwigExtension();
    }
}
