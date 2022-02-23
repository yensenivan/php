<?php
$stock = 100;

if($stock > 50){
    echo "Hay Stock";
} else if ($stock > 0 && $stock <= 50){
    echo "Stock Critico";
    } else {
        echo "No Hay Stock";
    }
?>