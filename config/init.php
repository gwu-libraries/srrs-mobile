<?php
/**
* Initialization file.  Please do not edit.
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author Richard Cantzler <rmcii@users.sourceforge.net>
* @version 05-22-06
* @package phpScheduleIt
*/
/**
* Please refer to readme.html and LICENSE for any additional information
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* This program is free software; you can redistribute it and/or modify it
* under the terms of the GNU General Public License as published by the
* Free Software Foundation; either version 2 of the License, or (at your option)
* any later version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* this program; if not, write to the
* Free Software Foundation, Inc.
* 59 Temple Place
* Suite 330
* Boston, MA
* 02111-1307
* USA
*/

/********************************************************************/
/*                   DO NOT CHANGE THIS SECTION                     */
/********************************************************************/
// Set session name
ini_set('session.name', $conf['app']['sessionName']);

//AK: The line bellow sets inactivity timeout for session. It doesn't guruantee that the session will timeout exactly after time specified. It more random, but it is the easiest way to do it.
ini_set('session.gc_maxlifetime', 60);

// Start the session (do not edit!)
session_start();

// Turn off magic quotes (do not edit!)
set_magic_quotes_runtime(0);

$conf['app']['version'] = '1.2.8';

include_once('constants.php');
include_once('langs.php');

if ($lang = determine_language()) {    // Functions exist in the langs.php file
    set_language($lang);
    load_language_file($lang);
}
/********************************************************************/
?>