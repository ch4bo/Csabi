<?php
require_once "config.php";

$strTable=$optStr=$cim=$rendezo=$gyarto=$ev=$hossz=$selectedId="";
$sql="SELECT id,cim from filmek";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){


    $optStr.="<option value='{$row['id']}'>{$row['cim']}</option>";
}


if(isset($_POST['filmId'])&& $_POST['filmId']!=0){
    
    $selectedId=$_POST['filmId']; 
    
    $_SESSION['torlendo']=$selectedId;
    
    $sql="SELECT * from filmek where id={$selectedId}";
    $stmt=$db->query($sql);
    $row=$stmt->fetch();
    

$strTable= "<tr><td>{$row['cim']}</td></tr>";

$_SESSION['torolt']=$row['cim'];

}


if(isset($_POST['del'])&& isset($_SESSION['torlendo'])){
$sql="DELETE from filmek where id={$_SESSION['torlendo']}";
$stmt=$db->exec($sql);
$_SESSION['msg']=$stmt ? "A(z) {$_SESSION['torolt']}  ltávolítva a megnézendők közül" : "Nem sikerült eltávolítani";
header("Location:index.php"); 
}
?>


<div>

<form method="post">
        <select name="filmId">
            <option value="0">Válaszd ki a megnézettt filmet</option>
            <?=$optStr?>
        </select>
        <input type="submit" value="Kiválaszt" name="kivalaszt">
    </form>
    <table class="table-sm table-stripped">
        <thead class="thead-dark">
            
            <th>Cím</th>
     
        </thead>
        <tbody>
            <?=$strTable?>
        </tbody>
    </table>

<form method="post">

<input type="submit" value="Megnéztem!" name="del">
</form>

    </div>