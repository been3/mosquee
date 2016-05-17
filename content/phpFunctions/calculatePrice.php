<?php
function calculatePrice($nbNights, $dateStart, $idRoom, $board)
{
    $dateMonth = date("m",$dateStart);
   if ($dateMonth>4 or $dateMonth<11){
       $price = intval("SELECT room_highpricing FROM room where $idRoom ='room_idroom' ");
       if ($board == 1){$price = $price + 15;}
       $price = $price*$nbNights;
       return $price;

   }else{
       $price = intval("SELECT room_lowpricing FROM room where $idRoom ='room_idroom' ");
       if ($board == 1){$price = $price + 15;}
       $price = $price*$nbNights;
       return $price;
   }
}
