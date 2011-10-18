<?php
include_once('lib/Template1.class.php');
include_once('lib/Utility.class.php');
include_once('templates/cpanel.template.php');

if (!Auth::is_logged_in()) {
    Auth::print_login_msg();    // Check if user is logged in
    }
   $t = new Template1();

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();
$t->startNavLinkTable();
$t->showNavLinksTable(Auth::isAdmin());
$t->endNavLinkTable();
$t->splitTable();





$curr_date=date('d F Y G');
$val=array();
$months=array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
$days=array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
$hours=array("60","120","180","240","300","360","420","480","540","600","660","720","780","840","900","960","1020","1080","1140","1200","1260","1320","1380","1440");
$dhours=array("12 AM","1 AM","2 AM","3 AM","4 AM","5 AM","6 AM","7 AM","8 AM","9 AM","10 AM","11 AM","12 PM","1 PM","2 PM","3 PM","4 PM","5 PM","6 PM","7 PM","8 PM","9 PM","10 PM","11 PM" );
$i=0;
$token = strtok($curr_date," ");
while ($token !== false)
{
	$val[$i]=$token;	
	$token=strtok(" ");
	$i++;
}
$curr_day=$val[0];
$curr_month=$val[1];

$curr_year=$val[2];
$curr_hour=($val[3]+3)%23;

//echo $days[0];
//$t=curr_month+0;
//echo $t;
//echo $curr_hour;

echo '<Form method="post" action="schedule1.php">';

echo '<table   border="0" cellspacing="0" cellpadding="1" >';
echo ' <tr>';
echo  ' <td >';
echo 'Month';
echo '</td>';
echo '<td>';

echo '<select name="Month">';


	for ($i=1; $i<=12; $i++)
	{
		$index=$i-1;
	
		if($months[$index]==$curr_month)
		{
			echo '<option value='.$i .' selected="selected">' .$months[$index].'</option>';
		}
		else
		{
		echo "<option value=$i>$months[$index]</option>";
		}
	} 

echo '</select>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';

echo 'Day';
echo '</td>';
echo '<td>';
echo '<select name="Day">';
	 for ($i=1; $i<=31; $i++)
	 {
	 	$index=$i-1;
	 	if($i==$curr_day)
			echo '<option value='.$i. ' selected="selected">' .$days[$index].'</option>';
		else
			echo "<option value=$i>$days[$index]</option>";
	}

    
echo '</select>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';

echo 'Year';
echo '</td>';
echo '<td>';
$next=$curr_year+1;
echo '<select name="Year">';
echo '<option value='. $curr_year. ' selected = "selected">'. $curr_year.' </option>';
echo "<option value= $next> $next </option>";
				
echo '</select>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';

echo 'Start Time';
echo '</td>';
echo '<td>';
echo '<select name="startTime">';
	for ($i=0; $i<=23; $i++)
	{
		if($curr_hour==$i)
			echo '<option value ='. $hours[$i].' selected= "selected">'. $dhours[$i]. '</option>';
		else
    			echo "<option value = $hours[$i]> $dhours[$i] </option>";
	}
     echo '</select>';
     echo '</td>';
     echo '</tr>';
     
 echo '<tr>';
 echo '<td>';
 
 echo '<input type="submit" value="submit" name="submit"><br />';
echo '</td>';
echo '</tr>';
echo '</table>';
 echo '</form>';


echo '</body>';
echo '</html>';
$t->endMain();
?>

