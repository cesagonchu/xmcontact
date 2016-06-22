<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmcontact module
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */
include 'header.php';
$xoopsOption['template_main'] = 'xmcontact_index.tpl';
include_once XOOPS_ROOT_PATH.'/header.php';
$xoopsTpl->assign('info_header', $xoopsModuleConfig['info_header']);
$xoopsTpl->assign('info_footer', $xoopsModuleConfig['info_footer']);
$xoopsTpl->assign('info_addresse', $xoopsModuleConfig['info_addresse']);
$xoopsTpl->assign('info_googlemaps', $xoopsModuleConfig['info_googlemaps']);


include XOOPS_ROOT_PATH.'/footer.php';