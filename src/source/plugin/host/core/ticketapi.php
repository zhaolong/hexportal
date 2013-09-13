<?php
/**
 File:	ticketapi.php
 说明:	工单系统 聊天记录GET API
*/
header('Cache-Contrl: max-age=1');
header('Expires: ');
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}

$a=array();
if($_GET['formhash']!=formhash()){
	$a['code']='failed';
	$a['msg']='The form hash check failed.';
	die(json_encode($a));
}

switch($_GET['action']){
	case "fresh":
		//获取工单数据
		//看是否请求有uniq_id
		$ticket_id=intval($_GET['ticketid']);
		if($ticket_id<1){
			$a['code']='failed';
			$a['msg']='The ticket id was required.';
			die(json_encode($a));
		}
		$sql="SELECT * FROM host_tickets WHERE user =  '$discuz_userss' AND ticketid =  $ticket_id AND ttype = 'post'";
		$query = DB::query($sql);
		if(!mysql_fetch_array($query)){
			$a['code']='failed';
			$a['msg']='The ticket was not yours.';
			die(json_encode($a));
		}
		$a['code']="ok";
		$uniq_id=intval($_GET['uniqid']);
		if($uniq_id){
			//如果有
			$sql="SELECT * FROM host_tickets WHERE ticketid =  $ticket_id AND id > $uniq_id ORDER BY 'id' ASC ";
		}else{
			//如果没有
			$sql="SELECT * FROM host_tickets WHERE ticketid =  $ticket_id ORDER BY 'id' ASC ";
		}

		$query = DB::query($sql);

		while($F = mysql_fetch_array($query,1)) {
			//print_r($F);
			$F['time']=date('Y-m-d H:i:s',$F['time']);
			$data[]=$F;
		}
		sort($data);
		$a['data']=$data;
	break;
	case "new":
		$ticketid=rand(10000,9999999);
		$title=htmlspecialchars($_POST['data']);
		$content=htmlspecialchars($_POST['body']);
		$sql="INSERT INTO `host_tickets` ( `user`, `title`, `urgency`, `content`,  `ticketid`, `ttype`, `status`, `time`) VALUES ( '".$discuz_userss."', '".$title."', 'medium', '".$content."', '".$ticketid."', 'post', '新提交', ".time().");";
		$query = DB::query($sql);

		$sql="SELECT * FROM host_tickets WHERE user = '$discuz_userss' ORDER BY `id` DESC  ";
		$query = DB::query($sql);
		$F = mysql_fetch_array($query, 1);

		$a['code']='ok';
		$a['data']=array('user'=>$discuz_userss,'id'=>$F['id'],'ticketid'=>$F['ticketid'],'content'=>$F['content'],'time'=>date('Y-m-d H:i:s',$F['time']));

	break;
	case "reply":
		$ticket_id=intval($_GET['ticketid']);
		$sql="SELECT * FROM host_tickets WHERE user =  '$discuz_userss' AND ticketid =  $ticket_id AND ttype = 'post'";
		$query = DB::query($sql);
		$d=mysql_fetch_array($query, 1);
		if(!$d){
			$a['code']='failed';
			$a['msg']='The ticket was not yours.';
			die(json_encode($a));
		}
		if($d['status']=="已关闭"){
			$a['code']='failed';
			$a['msg']='The ticket was closed.';
			die(json_encode($a));
		}
		$content=htmlspecialchars($_POST['data']);
		if($ticket_id<1){
			$a['code']='failed';
			$a['msg']='The ticket id was required.';
			die(json_encode($a));
		}
		$sql="INSERT INTO `host_tickets` ( `user`, `title`, `urgency`, `content`, `ticketid`, `ttype`, `status`, `time`) VALUES ( '".$discuz_userss."', '', 'medium', '".$content."', '".$ticket_id."', 'reply', '客户回复', ".time().");";
		$query = DB::query($sql);
		
		$sql="SELECT * FROM host_tickets WHERE user = '$discuz_userss' AND ticketid = $ticket_id ORDER BY  `id` DESC  ";
		$query = DB::query($sql);
		$F = mysql_fetch_array($query, 1);
		$a['code']='ok';
		$a['data']=array('user'=>$discuz_userss,'id'=>$F['id'],'content'=>$F['content'],'time'=>date('Y-m-d H:i:s',$F['time']));
	break;
	case "csreply":
		
	break;
}
die(json_encode($a));
?>