<?php

/* Palettes */

use Guave\ContentElementAccess\GuaveContentElementAccessBundle;

$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = preg_replace(
    '@([,;])(modules[,;])@',
    '$1elements,$2',
    $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']
);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = preg_replace(
    '@([,;])(modules[,;])@',
    '$1elements,$2',
    $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']
);

/* Fields */
$GLOBALS['TL_DCA']['tl_user']['fields']['elements'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_user']['elements'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'options_callback' => [GuaveContentElementAccessBundle::class, 'getContentElements'],
    'reference' => &$GLOBALS['TL_LANG']['CTE'],
    'eval' => ['multiple' => true],
    'sql' => 'blob NULL default 0'
];
