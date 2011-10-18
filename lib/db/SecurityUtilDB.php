<?php

//NOT TESTED. NEED TO TEST.

@define('BASE_DIR', dirname(__FILE__) . '/../..');

include_once('AdminDB.class.php');

$db = new AdminDB();

//get users ids to delete
$date = date('Y-m-d', (time() - 30*24*60*60));

$query = 'SELECT memberid FROM'. ' ' . $db->get_table('login') . ' ' . 'WHERE last_login <' . ' ' . $date . ' ' . 'OR last_login IS NULL';

$result = $db->db->query($query); 

$db->check_for_error($result);

$memberids = array();

print $query;

while ($id = $result->fetchRow()) {
	$memberids[] = $id['memberid'];
	#print $id['memberid'];
}

//delet users
$db->del_users($memberids);
CmnFns::write_log('Users deleted based because of inactivity. ' . join(', ', 'memberids' ), 'sessionID');

?>