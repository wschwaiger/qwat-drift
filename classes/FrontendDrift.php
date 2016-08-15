<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Drift
 * @author    Wolfgang Schwaiger
 * @license   LGPLv3
 * @copyright quality work | clever.simple.effective
 */


/**
 * Namespace
 */
namespace Drift;


/**
 * Class Drift
 *
 * @copyright  quality work | clever.simple.effective
 * @author     Wolfgang Schwaiger
 * @package    Devtools
 */
class FrontendDrift extends \Frontend
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'drift_default';


	/**
	 * Generate the module
	 */
	protected function compile()
	{
        return '';
	}
    
    public function loadJS($strContent, $strTemplate)
    {
        /* only activate when settings say so */
        if (\Config::get('drift_enable_frontend'))
        {
            /* load backend theme */
            $objTemplate = new \FrontendTemplate($this->strTemplate);
            
            /* insert right before the closing <body> tag */
            $strContent = str_replace('</body>', $objTemplate->parse() . "\n" . '</body>', $strContent);
        }

        return $strContent;
    }
}
