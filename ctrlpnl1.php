<?php
/**
* This file is the control panel, or "home page" for logged in users.
* It provides a listing of all upcoming reservations
*  and functionality to modify or delete them. It also
*  provides links to all other parts of the system.
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-30-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/

include_once('lib/Template1.class.php');
include_once('lib/Utility.class.php');
include_once('templates/cpanel.template.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$t = new Template1(translate('My Control Panel'));
$db = new DBEngine();

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

$user = new User(Auth::getCurrentID());
$is_group_admin = $user->is_group_admin();

$t->startNavLinkTable();
$t->showNavLinksTable(Auth::isAdmin());
$t->endNavLinkTable();
$t->splitTable();

$order = array('number');
$announcements = $db->get_announcements(mktime());
if ($announcements)
{
	showAnnouncementTable( $announcements, $db->get_err() );
	printCpanelBr();
}

// Valid order values in reservation retreival
$order = array('start_date', 'name', 'starttime', 'endtime', 'created', 'modified');
//$order = array('start_date', 'name', 'starttime', 'endtime');
$res = $db->get_user_reservations(Auth::getCurrentID(), CmnFns::get_value_order($order), CmnFns::get_vert_order());

showReservationTable($res, $db->get_err());	// Print out My Reservations

printCpanelBr();

// AK: Invitations are not used in our case.
//showInvitesTable($db->get_user_invitations(Auth::getCurrentID(), true), $db->get_err());
//printCpanelBr();

//showParticipatingTable($db->get_user_invitations(Auth::getCurrentID(), false), $db->get_err());
//printCpanelBr();

if ($conf['app']['use_perms']) {
	showTrainingTable($db->get_user_permissions(Auth::getCurrentID()), $db->get_err());
}

endDataDisplayCol();
$t->endMain();
//$t->printHTMLFooter();
?>
