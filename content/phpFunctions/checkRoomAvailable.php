<?php
function checkRoomAvailable($bathroom,$board,$dateStart,$dateEnd){

    $avaibleRoom = "SELECT r.'room_idroom' FROM 'room' r,'booking' b  WHERE r.'room_bathroom'== $bathroom ";
    return $avaibleRoom;
}