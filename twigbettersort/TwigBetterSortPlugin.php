<?php
/**
 * Expand links in tweets: plugin for Craft CMS
 *
 * @package   Twig Better Sort
 * @author    Victor In.
 * @copyright Copyright 2014
 * @link      https://github.com/victor-in/Craft-TwigBetterSort
 * @license   MIT
 */
namespace Craft;

class TwigBetterSortPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Twig Better Sort Filter');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Victor In.';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }

    function hookAddTwigExtension()
    {
        Craft::import('plugins.twigbettersort.twigextensions.TwigBetterSortTwigExtension');
        return new TwigBetterSortTwigExtension();
    }
}
