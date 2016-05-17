<?php
function calculateNbNights($start, $end)
{
$ts1 = strtotime($start);
$ts2 = strtotime($end);
$seconds_diff = $ts2 - $ts1;
$day_diff = $seconds_diff/(60*60*24);
return $day_diff;
}
?>
