<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_plan ORDER BY ID ASC ");
while($F = mysql_fetch_array($query)) 
{
	$Data[] = $F;
}
$check = DB::num_rows($query);
$query6 = DB::query("SELECT * FROM host_plan WHERE id = '$no'");
$array6 = mysql_fetch_array($query6);
if ($action == 'manage' AND $no)
{
	$query5 = DB::query("SELECT * FROM host_server ORDER BY ID ASC ");
	while($F5 = mysql_fetch_array($query5))
	{
		$Data5[] = $F5;
	}
	if ($array6[open] == 'on')
	{
		$array[checked2] = 'checked="checked"';
	}
	else
	{
		$array[checked2] ="";
	}
	if ($array6[reseller] == 'on')
	{
		$array[checked3] = 'checked="checked"';
	}
	else
	{
		$array[checked3] ="";
	}
	if ($array6[auto] == 'on')
	{
		$array[checked4] = 'checked="checked"';
	}
	else
	{
		$array[checked4] ="";
	}
	if ($array6[hidden] == 'on')
	{
		$array[checked5] = 'checked="checked"';
	}
	else
	{
		$array[checked5] ="";
	}
}
elseif ($action == 'change' AND $no)
{

	$InputArray = array('plan', 'package','space', 'traffic', 'cpu', 'dataspace', 'memory', 'mysql', 'emails', 'server','ads','open','reseller','auto','hidden','user','max','monprice','sixmonprice','yrprice','twoyrprice');
	unset ($sql);
	foreach ($InputArray as $i) 
	{	
			if($j > 0) $sep = ',';
			$sql .= $sep." `$i` = '$_POST[$i]'";
			$j++;
	}
	DB::query("UPDATE host_user SET plan='$_POST[plan]' WHERE plan='$_POST[plan]'");
	DB::query("UPDATE host_plan SET $sql WHERE id ='$no'");
	showmessage($lang[updated],'plugin.php?id=host:host&panel=admin&type=plan&action=manage&no='.$no);
}
elseif ($action == 'add')
{

	DB::query("INSERT INTO host_plan (plan,space,traffic,cpu,dataspace,memory,mysql,emails,package,server,ads,open,reseller,auto,hidden,max,monprice,sixmonprice,yrprice,twoyrprice) values('{$_POST[plan]}','{$_POST[space]}', '{$_POST[traffic]}','{$_POST[cpu]}','{$_POST[dataspace]}','{$_POST[memory]}','{$_POST[mysql]}','{$_POST[emails]}','{$_POST[package]}','{$_POST[server]}','{$_POST[ads]}','{$_POST[open]}','{$_POST[reseller]}','{$_POST[auto]}','{$_POST[hidden]}','{$_POST[max]}','{$_POST[monprice]}','{$_POST[sixmonprice]}','{$_POST[yrprice]}','{$_POST[twoyrprice]}')");
	showmessage($lang[add_ok],"plugin.php?id=host:host&panel=admin&type=plan");
}
elseif ($action == 'delete' AND $no)
{
	DB::query("DELETE  FROM host_plan WHERE id = '$no'");
	showmessage($lang[deleted],'plugin.php?id=host:host&panel=admin&type=plan');
} 
include template("host:admin_plan");
?>