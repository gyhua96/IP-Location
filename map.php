<?php
$ak="INPUT YOU AK KEY";
if($_POST['ip']!="")
{
        $ip=$_POST['ip'];
        $dev=$_POST['dev'];
}
else
{
	$ip="220.181.38.113";
	$dev="pc";
}
	$url='http://api.map.baidu.com/highacciploc/v1?qcip='.$ip.'&qterm='.$dev.'&ak='.$ak.'&coord=bd09ll';
        $data=file_get_contents($url);
//        echo '{"url":'.$url."},";
	echo $data;
?>
