<?php
require_once "config.php";
if(isset($_POST['beir'])){
    $cim=$_POST['cim'];
    
    $sql="INSERT into filmek values(null,'{$cim}')";
    $stmt=$db->exec($sql);
    
    header("Location:index.php"); 
}
?>
<div class="col-6">
    <form method="post">
        Cím: <input type="text" name="cim" id="" class="form-control" required>
        <input type="submit" value="Beír" name="beir" class="btn btn-outline-primary">
    </form>
</div>