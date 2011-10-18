<?php
/**
* This file provides output functions
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author Richard Cantzler <rmcii@users.sourceforge.net>
* @version 03-30-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/

$basedir = dirname(__FILE__) . '/..';

include_once($basedir . '/lib/Auth1.class.php');

/**
* Provides functions for outputting template HTML
*/
class Template1 {
	var $title;
	var $link;
	var $dir_path;
	
	/**
	* Set the page's title
	* @param string $title title of page
	* @param int $depth depth of the current page relative to phpScheduleIt root
	*/
	function Template($title = '', $depth = 0) {
		global $conf;
		
		//$this->title = (!empty($title)) ? $title : $conf['ui']['welcome'];
		$this->title='Room  Reservation System';
		$this->dir_path = str_repeat('../', $depth);
		$this->link = CmnFns::getNewLink();
	}
	
	/**
	* Print all XHTML headers
	* This function prints the HTML header code, CSS link, and JavaScript link
	*
	* DOCTYPE is XHTML 1.0 Transitional
	* @param none
	*/
	function printHTMLHeader() {
		global $conf;
		global $languages;
		global $lang;
		global $charset;
		
		$path = $this->dir_path;
		echo "<?xml version=\"1.0\" encoding=\"$charset\"?" . ">\n";
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $languages[$lang][2]?>" lang="<?php echo $languages[$lang][2]?>">
	<head>
	<title> Room Reservation System
	
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset?>" />
	<?php
	
	if ((bool)$conf['app']['allowRss'] && Auth::is_logged_in()) {
		echo '<link rel="alternate" type="application/rss+xml" title="phpScheduleIt" href=" ' . CmnFns::getScriptURL() . '/rss.php?id=' . Auth::getCurrentID() . "\"/>\n";
	}
	?>
	<link rel="shortcut icon" href="favicon.ico"/>
	<link rel="icon" href="favicon.ico"/>
	<script language="JavaScript" type="text/javascript" src="<?php echo $path?>functions1.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $path?>ajax.js"></script>
	<style type="text/css">
	@import url(<?php echo $path?>jscalendar/calendar-blue-custom.css);
	@import url(<?php echo $path?>css.css);
	</style>
	<script type="text/javascript" src="<?php echo $path?>jscalendar/calendar.js"></script>
	<script type="text/javascript" src="<?php echo $path?>jscalendar/lang/<?php echo get_jscalendar_file()?>"></script>
	<script type="text/javascript" src="<?php echo $path?>jscalendar/calendar-setup.js"></script>
	</head>
	<body>
	<?php
	}
	
	
	/**
	* Print welcome header message
	* This function prints out a table welcoming
	*  the user.  It prints links to My Control Panel,
	*  Log Out, Help, and Email Admin.
	* If the user is the admin, an admin banner will
	*  show up
	* @global $conf
	*/
	function printWelcome() {
		global $conf;
		
		// Print out notice for administrator
		//echo Auth::isAdmin() ? '<h3 align="center">' . translate('Administrator') . '</h3>' : '';
		
		// Print out logoImage if it exists
		//echo (!empty($conf['ui']['logoImage']))
		//	? '<div align="left"><img src="' . $conf['ui']['logoImage'] . '" alt="logo" vspace="5" /></div>'
		//	: '';
	?>
	<!--
	<div id="banner-bg">
		<div id="banner">
			<div id="comment"><a href="http://www.gelman.gwu.edu/search-1/feedback/studyroomres-feedback-form">Questions or Feedback?</a></div>
		</div>
	</div>
	<div id="instructionbox">
		<div class="inst">
			<div class="insttitle">
			Policies in a Nutshell
			</div>
			<div class="instbody">
			<ul><li>This is Template1. Rooms are available for groups of <strong>two or more</strong> students.</li>
			<li>You may place <strong>up to two hours</strong> of reservations each day.</li>
			<li>Please print your email receipt and bring it to your study session.</li></ul>
			</div>
		</div>
		<div class="inst">
			<div class="insttitle">
			Reserving a Room
			</div>
			<div class="instbody">
			<ul><li>Select <em>Place a Reservation</em> on the left menu.</li>
			<li>Click on an open box on the grid below at the time you want.</li>
			<li>Verify your reservation on the popup window, and click <em>Save</em></li></ul>
			</div>
		</div>
	</div>
	-->
	<div id="main">
	
	
	<table width="100%" border="0" cellspacing="0" cellpadding="5" class="mainBorder">
	  <tr>
		<td class="mainBkgrdClr">
		   Gelman Library Study Room Reservation System<br />
		  <h4 class="welcomeBack"><?php echo translate('Welcome Back', array($_SESSION['sessionName'], 1))?></h4>
		</td>
		<!--
		<td>
			<h3>To reserve a room, click an unfilled time slot on the grid below.</h3>
		</td>
		-->
		<td class="mainBkgrdClr" valign="top">
		  <ul>
		  	<li>You may reserve rooms for up to a total of two hours each day.</li>
			<li>Study rooms may be used by groups of two or more people.</li>
		  </ul>
		</td>
	  </tr>
	</table> 
	
	
	<?php 
	}
	
	
	/**
	* Start main HTML table
	* @param none
	*/
	function startMain() {
	?>
	<p>&nbsp;</p>
	<table id="maintable" width="100%" border="0" cellspacing="0" cellpadding="10">
	  <tr>
		<td valign = top bgcolor="#FAFAFA" width = "20%">
		  <?php 
	}
	
	
	/**
	* End main HTML table
	* @param none
	*/
	function endMain() {
	?>
		</td>
	  </tr>
	</table>
	<?php 
	}
	
	
	/**
	* Print HTML footer
	* This function prints out a tech email
	* link and closes off HTML page
	* @global $conf
	*/
	function printHTMLFooter() {
		global $conf;
	?>
	</div>
	<div id="portal-footer">
		<div id="footer-container">
			<div class="footer-segment">Melvin Gelman Library</div>
    		<div class="footer-segment">2130 H St. NW</div>
			<div class="footer-segment">Washington, DC 20052</div>
			<div class="footer-segment">202-994-6558</div>
		</div>
	</div>

	<!-- <p id="footer" align="center"><a href="http://phpscheduleit.sourceforge.net">phpScheduleIt v<?php echo $conf['app']['version']?></a></p> -->
	</body>
	</html>
	<?php 
	}
	
	/**
	* Sets the link class variable to reference a new Link object
	* @param none
	*/
	function set_link() {
		$this->link = CmnFns::getNewLink();
	}
	
	/**
	* Returns the link object
	* @param none
	* @return link object for this class 
	*/
	function get_link() {
		return $this->link;
	}
	
	/**
	* Sets a new title for the template page
	* @param string $title title of page
	*/
	function set_title($title) {
		$this->title = $title;
	}
	
	/**
	*Splits main table to display main data display column
	* @param noen
	*/
	function startDataDisplayCol() {
	?>
	</td>
	<td style="padding-left:5px; vertical-align:top;">
	<?php
	}

	/**
	*Ends main data display column
	* @param noen
	*/
	
	function endDataDisplayCol() {
	?>
	</td>
	</tr>
	</table>
	<?php
	}
	
	function startNavLinkTable()
	{?>
		<table id="navtable" width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td style="vertical-align:top; width:20%; background-color:#FFFFFF;">
	<?php
	}
	
	function endNavLinkTable()
	{?>
		</td>
		</tr>
		</table>
	<?php
	}

	function showNavLinksTable($is_admin = false, $is_group_admin = false){
			global $conf;
			global $link;
		?>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
		    <td>
		      <table width="100%" border="0" cellspacing="0" cellpadding="0">
		        <tr>
		          <td class="tableTitle" style="background-color:#A2B5CD;">
				   <?php echo translate('My Quick Links')?>
				  </td>
		          <td class="tableTitle" style="background-color:#A2B5CD;"><div align="right">
		              <?php $link->doLink("javascript: help('quick_links');", '?', '', 'color: #FFFFFF', translate('Help') . ' - ' . translate('My Quick Links')) ?>
		            </div>
		          </td>
		        </tr>
		      </table>
		<?php //TODO: get show hide function call should be here?>
		      <div id="quicklinks" style="display: block">
		      <table width="100%" border="0" cellspacing="0" cellpadding="0">
		        <tr style="padding: 5px;" class="cellColor">
		          <td colspan="2">
			       <ul><li>
		              <?php $link->doLink($this->dir_path . 'ctrlpnl1.php', translate('View Dashboard')) ?>
		            </li>
			    
					<li>
					  <?php $link->doLink('form.php', translate('Create Reservation')) ?>
				    </li>	
				<!-- Removed. There is no need to display this calendar for now.	<p><b>&raquo;</b>
		              <?php $link->doLink('mycalendar.php?view=3', translate('View Reservation Calendar')) ?>
		            </p> -->

		<!-- TODO: rename this menu item from "Schedule Calendar" to "View Resource Calendar" even though it is renamed in here it is not displayed properly -->
		<!-- AK: Do not need this functionality			<p><b>&raquo;</b>
		              <?php $link->doLink('rescalendar.php?view=3', translate('View Resource Calendar')) ?>
		            </p>
		            <p><b>&raquo;</b>
		              <?php $link->doLink('my_email.php', translate('Manage My Email Preferences')) ?>
		            </p> -->
		<!-- e-mail administrator menu item commented out	-->
		<!--			<p><b>&raquo;</b>

		              <?php $link->doLink('mailto:' . $conf['app']['adminEmail'].'?cc=' . $conf['app']['ccEmail'], translate('Email Administrator'), '', '', 'Send a non-technical email to the administrator') ?> 
		-->
		           <!-- 
					<li>
		              <?php $link->doLink('register.php?edit=true', translate('Change My Profile Information/Password')) ?>
		            </li>
					<li>
		 			  <?php $link->doLink('javascript: help();', translate('Help'))?>
					</li>
					-->
					<li>
					
		              <?php $link->doLink('index1.php?logout=true', translate('Log Out')) ?>
		            </li></ul>
		<!--Showing Floor Plans to the user -->
				<!--	<?php echo '<p style="margin-top:7;font-size:11pt;font-weight:bold;">' . translate('Floor Plans') . '</p>';?>
					<ul><li>
					<a href="javascript:floorPic('img/3rd-floor.gif')">3rd Floor</a>
					</li>
					<li>
					<a href="javascript:floorPic('img/4th-floor.gif')">4th Floor</a>
					</li>
					<li>
					<a href="javascript:floorPic('img/5th-floor.gif')">5th Floor</a>
					</li>
					<li>
					<a href="javascript:floorPic('img/6th-floor.gif')">6th Floor</a>
					</li>
					-->
		            <?php
					// If it's the admin, print out admin links
					/*if ($is_admin) {
						echo '<p style="margin-top:7px;font-weight:bold;">' . translate('System Administration') . '</p>';
					}
					else if ($is_group_admin) {
						echo '<p style="margin-top:7px;font-weight:bold;">' . translate('Group Administration') . '</p>';
					}
					if ($is_admin) {
						echo
						'<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=schedules', translate('Manage Schedules')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('blackouts.php', translate('Manage Blackout Times')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=resources', translate('Manage Resources')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=announcements', translate('Manage Announcements')) . "</p>\n"
						. '<p style="margin-top:10px;"><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=groups', translate('Manage Groups')) . "</p>\n";
					}
					if ($is_admin || $is_group_admin) {
						echo
						'<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=users', translate('Manage Users')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=reservations', translate('Manage Reservations')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=approval', translate('Approve Reservations')) . "</p>\n";
					}
					if ($is_admin) {
						echo
						'<p style="margin-top:10px;"><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=email', translate('Mass Email Users')) . "</p>\n"
		                . '<p><b>&raquo;</b> ' .  $link->getLink('usage.php', translate('Search Scheduled Resource Usage')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('admin.php?tool=export', translate('Export Database Content')) . "</p>\n"
						. '<p><b>&raquo;</b> ' .  $link->getLink('stats.php', translate('View System Stats')) . "</p>\n";
					}
					*/
				?>

		          </td>
		        </tr>
		      </table>
			  </div>
		    </td>
		  </tr>
		</table>
		<?php		
	}
	
/********************************************************************************************************************/
/********************************************************************************************************************/
/***********************************NEED TO UPDATED FUNCTION BELOW***************************************************/
/********************************************************************************************************************/
/********************************************************************************************************************/
	
		/** AK:
		* Print nav pane
	    * This function prints cell where nav pane is located
	    * @global $conf
	    */
		function splitTable()
		{ ?>
			</td>
			<td valign = top bgcolor="#FAFAFA" style="padding-left:5px;" width = "80%">
		<?php
		}
		
		/**
		* Returns the proper expansion type for this table
		*  based on cookie settings
		* @param string table name of table to check
		* @return either 'block' or 'none'
		*/
		function getShowHide($table) {
		//	if (isset($_COOKIE[$table]) && $_COOKIE[$table] == 'hide') {
		//		return 'none';
		//	}
		//	else
				return 'block';
		}
	
}
	?>
