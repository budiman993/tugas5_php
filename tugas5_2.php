<!DOCTYPE html>
<head>
<title>Tugas 5_2 PHP</title>
</head>
<body>
<?php
$input1_1 = "Ayo ";
$input1_2 = "Bersama ";
$input2_1 = "Belajar ";
$input2_2 = "Niomic ";
?>

<table border ='1'>
<tr>
<td>Input 1</td>
<td>Input 2</td>
<td>Hasil</td>

</tr>

<tr>
<td><?php echo $input1_1 ?></td>
<td><?php echo $input2_1 ?></td>
<td><?php echo $input1_1.$input2_1;?></td>

</tr>

<tr>
<td><?php echo $input1_2 ?></td>
<td><?php echo $input2_2 ?></td>
<td><?php echo $input1_2.$input2_2;?></td>

</tr>

</table>
<?php echo "<br> Gabungan : ".$input1_1.$input2_1.$input1_2.$input2_2." :)";?>

</body>

</html>