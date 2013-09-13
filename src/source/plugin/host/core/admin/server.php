<?php

if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_server ORDER BY ID ASC ");
while($F = mysql_fetch_array($query)) 
{
	$Data[] = $F;
}
$check = DB::num_rows($query);
$query5 = DB::query("SELECT * FROM host_server WHERE id = '$no'");
$array5 = mysql_fetch_array($query5);
if ($action == 'change' AND $no)
{
	if(substr($array5[passlogin],0,1)."***".substr($array5[passlogin],strlen($array5[passlogin])-1,1)!=$_POST[passlogin])$InputArray = array('server','ip', 'ns1', 'ns2', 'cp', 'location', 'userlogin', 'passlogin');
	else $InputArray = array('server','ip', 'ns1', 'ns2', 'cp', 'location', 'userlogin');

	unset ($sql);
	foreach ($InputArray as $i) 
	{
		if(!empty($_POST[$i])){
			if($j > 0) $sep = ',';
			$sql .= $sep." `$i` = '$_POST[$i]'";
		}
		$j++;
	}
	DB::query("UPDATE host_plan SET server ='$_POST[server]' WHERE server='$array5[server]'");
	DB::query("UPDATE host_server SET $sql WHERE id ='$no'");
	showmessage($lang[updated],'plugin.php?id=host:host&panel=admin&type=server');
}
elseif ($action == 'add')
{
	DB::query("INSERT INTO host_server (server,uptime,ip,ns1,ns2,cp,location,userlogin,passlogin) values('{$_POST[server]}','$timestamp','{$_POST[ip]}','{$_POST[ns1]}','{$_POST[ns2]}','{$_POST[cp]}','{$_POST[location]}','{$_POST[userlogin]}','{$_POST[passlogin]}')");
	showmessage($lang[add_ok],"plugin.php?id=host:host&panel=admin&type=server");
}
elseif ($action == 'delete' AND $no)
{
	DB::query("DELETE  FROM host_server WHERE id = '$no'");
	showmessage($lang[deleted],'plugin.php?id=host:host&panel=admin&type=server');
} 
$array5[passlogin]=substr($array5[passlogin],0,1)."***".substr($array5[passlogin],strlen($array5[passlogin])-1,1);

include template("host:admin_server");
?>