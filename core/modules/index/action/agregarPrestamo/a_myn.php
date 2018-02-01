<?php

if(!isset($_SESSION["cart"])){


	$product = array("id_libro"=>$_POST["id_libro"],"id_ejemplar"=>$_POST["id_ejemplar"]);
	$_SESSION["cart"] = array($product);


	$cart = $_SESSION["cart"];



}else {

$found = false;
$cart = $_SESSION["cart"];
$index=0;

$can = true;
?>

<?php
if($can==true){
foreach($cart as $c){
	if($c["id_libro"]==$_POST["id_libro"]){
		echo "found";
		$found=true;
		break;
	}
	$index++;
//	print_r($c);
//	print "<br>";
}

if($found==false){
    $nc = count($cart);
	$product = array("id_libro"=>$_POST["id_libro"],"item_id"=>$_POST["id_ejemplar"]);
	$cart[$nc] = $product;
//	print_r($cart);
	$_SESSION["cart"] = $cart;
}else{
 print "<script>alert('El ejemplar ya esta agregado en la lista!');</script>";

}

}
}
 print "<script>window.location='index.php?view=prestamo';</script>";
// unset($_SESSION["cart"]);

?>