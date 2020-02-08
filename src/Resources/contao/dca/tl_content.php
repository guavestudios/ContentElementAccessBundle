<?php

/* Configuration */

use Guave\ContentElementAccess\GuaveContentElementAccessBundle;

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = [GuaveContentElementAccessBundle::class, 'filterContentElements'];

/* Operations */
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['edit']['button_callback']   = [GuaveContentElementAccessBundle::class, 'hideButton'];
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['copy']['button_callback']   = [GuaveContentElementAccessBundle::class, 'hideButton'];
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['cut']['button_callback']    = [GuaveContentElementAccessBundle::class, 'hideButton'];
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['delete']['button_callback'] = [GuaveContentElementAccessBundle::class, 'deleteButton'];
$GLOBALS['TL_DCA']['tl_content']['list']['operations']['toggle']['button_callback'] = [GuaveContentElementAccessBundle::class, 'toggleButton'];
