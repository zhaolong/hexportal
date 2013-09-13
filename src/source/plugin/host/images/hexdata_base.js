  startInstance=function(hid,token){
	jConfirm('确定要开启'+hid+'这个实例么?', '和谐数据', function(r) {
		if(r==true){
			jQuery.getJSON("./plugin.php?id=host:host&page=api&hid="+hid+"&action=StartInstance&token="+token,function(d){
				if(d.code!="OK"){
					   jAlert('操作失败,可能当前主机已处于运行状态或者已过期.\r\n如有疑问请联系我们的客服', '和谐数据');
				}else{
					   jAlert('操作成功,请等待最多3分钟.', '和谐数据');
					   jQuery('#stspan').html("开机中");
				}
			});
		}
	});
	/*
   if (confirm('确定要开启'+hid+'这个实例么？\r\n')){
		location.href="./plugin.php?id=host:host&page=api&hid="+hid+"&action=StartInstance&token="+token;
	}
	*/
  }
  function stopInstance(hid,token){
	jConfirm('确定要停止'+hid+'这个实例么？\r\n请确认您在此主机上的任何工作已经保存。', '和谐数据', function(r) {
		if(r==true){
			jQuery.getJSON("./plugin.php?id=host:host&page=api&hid="+hid+"&action=StopInstance&token="+token,function(d){
				if(d.code!="OK"){
					   jAlert('操作失败,可能当前主机已处于关机状态或者已过期.\r\n如有疑问请联系我们的客服', '和谐数据');
				}else{
					   jAlert('操作成功,请等待最多15分钟.', '和谐数据');
					   jQuery('#stspan').html("停止中");
				}
			});
		}
	});
	/*
	if (confirm('确定要停止'+hid+'这个实例么？\r\n请确认您在此主机上的任何工作已经保存。')){
		location.href="./plugin.php?id=host:host&page=api&hid="+hid+"&action=StopInstance&token="+token;
	}
	*/
  }
  function rebootInstance(hid,token){
	jConfirm('确定要重启'+hid+'这个实例么？\r\n请确认您在此主机上的任何工作已经保存。', '和谐数据', function(r) {
		if(r==true){
			jQuery.getJSON("./plugin.php?id=host:host&page=api&hid="+hid+"&action=RebootInstance&token="+token,function(d){
				if(d.code!="OK"){
					   jAlert('操作失败,可能当前主机已过期.\r\n如有疑问请联系我们的客服', '和谐数据');
				}else{
					   jAlert('操作成功,请等待最多15分钟.', '和谐数据');
					   jQuery('#stspan').html("开机中");
				}
			});
		}
	});
	/*
	if (confirm('确定要重启'+hid+'这个实例么？\r\n请确认您在此主机上的任何工作已经保存。')){
		location.href="./plugin.php?id=host:host&page=api&hid="+hid+"&action=RebootInstance&token="+token;
	}
	*/
  }
  function resetPasswd(hid,token){
	jConfirm('确定要重置'+hid+'这个实例的密码么？\r\n请修改后重启此实例以使新密码生效。', '和谐数据', function(r) {
			if(r==true){
				jPrompt('请输入新密码:', '', '和谐数据', function(w) {
					if(w){
						jQuery.getJSON("./plugin.php?id=host:host&page=api&hid="+hid+"&action=ModifyInstanceAttribute&Password="+w+"&token="+token,function(d){
							if(d.code!="OK"){
								   jAlert('操作失败.\r\n如有疑问请联系我们的客服', '和谐数据');
							}else{
								   jAlert('操作成功,重启后新密码即生效.', '和谐数据');
							}
						});
					}
				});
			}
		});
	/*
		if (confirm('确定要重置'+hid+'这个实例的密码么？\r\n请修改后重启此实例以使新密码生效。')){
			var newPw=prompt("请输入新密码","");
			if (confirm('一定要修改并保证新密码无误？\r\n修改后需要重启此实例才能生效。')){
				location.href="./plugin.php?id=host:host&page=api&hid="+hid+"&action=ModifyInstanceAttribute&Password="+newPw+"&token="+token;
			}
		}
	*/
  }
  function hexdata_call(json){
	var imageId=json.ImageId,regionId=json.RegionId,zoneId=json.ZoneId,instanceType=json.InstanceType,status=json.Status,publicIpAddress=json.PublicIpAddress.IpAddress[0],innerIpAddress=json.InnerIpAddress.IpAddress[0],bandwidthOut=json.InternetMaxBandwidthOut,st="";
	switch(status){
		case 'Running':st="运行中";break;
		case 'Stopping':st="停止中";break;
		case 'Stopped':st="已停止";break;
		case 'Starting':st="开机中";break;
	}
	jQuery('#ipspan').html(publicIpAddress+" / "+innerIpAddress);
	jQuery('#stspan').html(st);
  }