<?php
$shareid=$_GET['shareid'];
$uk=$_GET['uk'];
$x=file_get_contents('http://pan.baidu.com/share/link?shareid='.$shareid.'&uk='.$uk.'');
//echo $x;
preg_match("/\<a\ class\=\"new\-dbtn\"\ href\=\"(.*)\"\ id\=\"downFileButtom\">/U",$x,$a);
$a[1]=str_replace('&amp;','&',$a[1]);
header('location:'.$a[1]);
?>