<?php

namespace Craft;

class TwigBetterSortTwigExtension extends \Twig_Extension
{
  protected $env;

  public function getName()
  {
    return 'Twig Better Sort Filter';
  }

  public function getFilters()
  {
    return array('sort' => new \Twig_Filter_Method($this, 'twig_sort'));
  }

  public function initRuntime(\Twig_Environment $env)
  {
    $this->env = $env;
  }

  public function twig_sort($array, $method='asort')
  {
	switch ($method) {
		case 'asort':
			asort($array);
			break;
			
		case 'arsort':
			arsort($array);
			break;
			
		case 'krsort':
			krsort($array);
			break;
			
		case 'ksort':
			ksort($array);
			break;
		
		case 'natsort':
			natsort($array);
			break;
			
		case 'rsort':
			rsort($array);
			break;
	}
	
	return $array;
  }

}
