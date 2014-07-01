<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Live Streaming</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>
<?php 
 $server="rtmp://202.169.224.206/live";
 echo "Judul Video : ";
 echo $_GET["file"];
?>
<div align=center>
<script type='text/javascript' src="swfobject.js" tppabs="swfobject.js"></script>
	<div id='preview' align='center'>This text will be replaced</div>
<script type='text/javascript'>
	var s1 = new SWFObject('player.swf','ply','400','300','5');
	s1.addParam('allowfullscreen','true');
	s1.addParam('allowscriptaccess','always');
	s1.addParam('menu','false');
	s1.addParam('flashvars','file: "<?php echo $server."/".$_GET["file"]; ?>", ');
	s1.write('preview');
</script>
  </div>
<?php 
echo $server."/".$_GET["file"]; 
?>
</body>
</html>
