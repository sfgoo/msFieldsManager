<?php
/** @var modX $modx */
/** @var array $sources */

$menus = array();

$tmp = array(
    'msfieldsmanager' => array(
        'description' => 'Описание 555',
        'action' => 'msfmfields',
        //'icon' => '<i class="icon icon-large icon-modx"></i>',
    ),
);

foreach ($tmp as $k => $v) {
    /** @var modMenu $menu */
    $menu = $modx->newObject('modMenu');
    $menu->fromArray(array_merge(array(
        'text' => $k,
        'parent' => 'components',
        'namespace' => PKG_NAME_LOWER,
        'icon' => '',
        'menuindex' => 0,
        'params' => '',
        'handler' => '',
    ), $v), '', true, true);
    $menus[] = $menu;
}
unset($menu, $i);

return $menus;