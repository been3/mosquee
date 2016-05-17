<?php
function calculatePrice($nbNights, $dateStart, $idRoom)
{
   if (date(m,$dateStart)>4 or date(m, $dateStart)<11){
       $price = "SELECT room_highpricing FROM room where $idRoom ='room_idroom' ";
       if ($board = 1){$price = $price+15;}
       $price = $price*$nbNights;
       return $price;

   }else{
       $price = "SELECT room_lowpricing FROM room where $idRoom ='room_idroom' ";
       if ($board = 1){$price = $price+15;}
       $price = $price*$nbNights;
       return $price;
   }
}
