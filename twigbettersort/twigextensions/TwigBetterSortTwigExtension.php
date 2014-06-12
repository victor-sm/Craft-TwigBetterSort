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

  public function twig_sort($array, $method='asort', $sort_flag='SORT_REGULAR')
  {
	settype($sort_flag, 'integer');
	
	switch ($method)
	{
		case 'asort':
			asort($array, $sort_flag);
			break;
			
		case 'arsort':
			arsort($array, $sort_flag);
			break;
			
		case 'krsort':
			krsort($array, $sort_flag);
			break;
			
		case 'ksort':
			ksort($array, $sort_flag);
			break;
		
		case 'natcasesort':
			natcasesort($array);
			break;
			
		case 'natsort':
			natsort($array);
			break;
			
		case 'rsort':
			rsort($array, $sort_flag);
			break;
			
		case 'sort':
			sort($array, $sort_flag);
			break;
	}
	
	return $array;
  }

}
