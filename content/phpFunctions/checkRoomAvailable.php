<?php
function checkRoomAvailable($bathroom, $type,$dateStart,$dateEnd){

    $avaibleRoom = "SELECT r.'room_idroom' FROM 'room' r,'booking' b  WHERE r.'room_bathroom'== $bathroom AND r.'room-type'== $type";
    return $avaibleRoom;
}