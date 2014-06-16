<?php
/**
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
        return '0.2';
    }

    function getDeveloper()
    {
        return 'Victor In.';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigbettersort.twigextensions.TwigBetterSortTwigExtension');
        return new TwigBetterSortTwigExtension();
    }
}
