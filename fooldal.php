<?php
require_once "config.php";

$strTable="";

$sql="select * from filmek order by cim";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strTable.="<tr><td>{$row['cim']}</td></tr>";
}
?>
<style>
    th{
        position:sticky;
        top:0;  
    }
</style>
<div>
    <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
</div>
<div class="table" style="height:500px;overflow:scroll;">
    
    <table class="table-sm table-stripped">
        <thead class="thead-dark">
            
            <th>Cím</th>
     
        </thead>
        <tbody>
            <?=$strTable?>
        </tbody>
    </table>
</div>