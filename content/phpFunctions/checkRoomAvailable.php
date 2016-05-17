<?php
function checkRoomAvailable($bathroom,$numberPersons,$dateStart,$dateEnd){ //returns booking_roomnbr if a room is free else returns 0
    if ($bathroom == 1 && $numberPersons == 1){ //rooms : nbr1 nbr3
       $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '1' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
       $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '1' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
       if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 1;}
       $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '3' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
       $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '3' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
       if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 3;}else{return 0;}
    }
    if ($bathroom == 0 && $numberPersons == 1){ //rooms : nbr2 nbr4
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '2' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '2' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 2;}
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '4' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '4' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 4;}else{return 0;}
    }
    if ($bathroom == 1 && $numberPersons == 2){ //rooms : nbr5 nbr7 nbr9 nbr11
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '5' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '5' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 5;}
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '7' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '7' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 7;}
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '9' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '9' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 9;}
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '11' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
         $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '11' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart <$lastDateEnd && $lastDateEnd < $dateStart){return 11;}else{return 0;}
    }
    if ($bathroom == 0 && $numberPersons == 2) { //rooms : nbr6 nbr8 nbr10 nbr12
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '6' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '6' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart < $lastDateEnd && $lastDateEnd < $dateStart) {
            return 6;
        }
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '8' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '8' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart < $lastDateEnd && $lastDateEnd < $dateStart) {
            return 8;
        }
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '10' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '10' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart < $lastDateEnd && $lastDateEnd < $dateStart) {
            return 10;
        }
        $lastDateStart = "SELECT b.booking_datestart FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '12' AND b.booking_datestart < $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        $lastDateEnd = "SELECT b.booking_dateend FROM booking b , room r where b.booking_idroom = r.room_idroom AND r.room_roomnbr = '12' AND b.booking_dateend< $dateEnd ORDER BY b.booking_datestart DESC LIMIT 1";
        if ($lastDateStart < $lastDateEnd && $lastDateEnd < $dateStart) {
            return 12;
        } else {
            return 0;
        }
    }
}