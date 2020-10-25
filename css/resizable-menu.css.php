<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for the resizable menus
 *
 * used by js/vendor/jquery/jquery.menuResizer-1.0.js
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
    exit();
}
?>
ul.resizable-menu a,
ul.resizable-menu span {
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    color: <?= $GLOBALS['cfg']['NaviColor'] ?>;
}
ul.resizable-menu ul a,
ul.resizable-menu ul span {
    color: #f2f2f2;
}

ul.resizable-menu .submenu {
    display: none;
    position: relative;
}

ul.resizable-menu .shown {
    display: inline-block;
}

ul.resizable-menu ul {
    margin: 0;
    padding: 0;
    position: absolute;
    list-style-type: none;
    display: none;
    border: 1px <?php echo $GLOBALS['cfg']['NaviBackground']; ?> solid;
    border-radius: 3px;
    z-index: 2;
    <?php echo $right; ?>: 0;
}

ul.resizable-menu li:hover {
    color: #eaeaea;
    background: rgba(234, 234, 234, 0.1);
}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
    display: block;
    background: <?php echo $GLOBALS['cfg']['ControlColor']; ?>;
}

ul.resizable-menu ul li {
    width: 100%;
}
