<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (empty($function)) {
    $function = 'form';
}

if (empty($variables)) {
    $variables = array();
}

echo $view['form']->$function($form, $variables);