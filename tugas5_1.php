<!DOCTYPE html>
<head>
<title>Tugas 5_1 PHP</title>
</head>
<body>
<?php
$t = true;
$f = false;


?>



<table border ='1'>
<tr>
<td>Input true</td>
<td>Input 2</td>
<td>AND</td>
<td>OR</td>
</tr>

<tr>
<td>false</td>
<td>false</td>
<td><?php echo"".printf($f && $f); ?></td>
<td><?php echo"".printf($f || $f); ?></td>
</tr>

<tr>
<td>false</td>
<td>true</td>
<td><?php echo"".printf($f && $t); ?></td>
<td><?php printf($f || $t); ?></td>
</tr>

<tr>
<td>true</td>
<td>false</td>
<td><?php echo"".printf($t && $f); ?></td>
<td><?php printf($t || $f); ?></td>
</tr>

<tr>
<td>true</td>
<td>true</td>
<td><?php printf($t && $t); ?></td>
<td><?php printf($t || $t); ?></td>
</tr>
</table>


</body>

</html>