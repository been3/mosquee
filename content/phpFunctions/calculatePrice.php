<?php
function calculatePrice($nbNights, $dateStart, $idRoom)
{
   if (date(m,$dateStart)>4 or date(m, $dateStart)<11){
       $Price = "SELECT room_highpricing FROM room where $idRoom ='room_idroom' ";
       $Price = $Price*$nbNights;
       return $Price;

   }else{
       $Price = "SELECT room_lowpricing FROM room where $idRoom ='room_idroom' ";
       $Price = $Price*$nbNights;
       return $Price;
   }
}
