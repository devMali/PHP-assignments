<?php 
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $pri=$_POST['price'];
    $disc=$_POST['disc'];
    $price=$_POST['price'];

    function discount($pri,$disc)
    {
        $per=$pri*$disc/100;
        $price=$pri-$per;
        return $price;
    }
    echo "Product code:$pid<br>Prodcut Name:$pname<br>Product Price:$pri<br>product discount percentage:$disc<br>Product net Amount:".discount($price,$disc);
?>
