<?php
include('../includes/connect.php');
$emid=$_POST['eid'];
$ename=$_POST['ename'];
$basic=$_POST['basic'];
$allow=$_POST['allow'];
$spl_allow=$_POST['spl_allow'];
$da_20 = $basic * 0.2 ;
$basic_da_total = $basic + $da_20;
$gross = $basic_da_total + $allow + $spl_allow ;
$pf_12 = $basic_da_total * 0.12;
$esi_3 = $gross * 3.25/100;
$total = $gross + $pf_12 + $esi_3;
$pf_24 = $basic_da_total * 24/100;
$esi_75 = $gross * 0.75/100;
$total_ded = $pf_24 + $esi_3 + $esi_75;
$net_sal = $total - $total_ded;

$sql="insert into salary_details values(null,'$ename','$basic','$da_20','$basic_da_total','$allow','$spl_allow','$gross','$pf_12','$total','$pf_24','$esi_3','$esi_75','$total_ded','$net_sal')";

$sql="update salary_details set ename='$ename',basic='$basic',da_20='$da_20',basic_da_total='$basic_da_total',allow='$allow',spl_allow='$spl_allow',gross='$gross',pf_12='$pf_12',total='$total',pf_24='$pf_24',esi_3='$esi_3',esi_75='$esi_75',total_ded='$total_ded',net_sal='$net_sal' where eid='$emid'";
mysqli_query($conn,$sql);
?>

<script>
alert("salary details updated successfully");
document.location="salary.php";
</script>