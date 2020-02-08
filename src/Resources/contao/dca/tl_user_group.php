<?php

/* Palettes */

use Guave\ContentElementAccess\GuaveContentElementAccessBundle;

$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = preg_replace(
    '@([,;])(modules[,;])@',
    '$1elements,$2',
    $GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']
);

/* Fields */
$GLOBALS['TL_DCA']['tl_user_group']['fields']['elements'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_user_group']['elements'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'options_callback' => [GuaveContentElementAccessBundle::class, 'getContentElements'],
    'reference' => &$GLOBALS['TL_LANG']['CTE'],
    'eval' => ['multiple' => true],
    'sql' => 'blob NULL default 0'
];
