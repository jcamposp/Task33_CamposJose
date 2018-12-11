<?php

# To work with the actual year, you must use the next variable and include it inside the FOR loop
# $actualyear = date ("Y");

for ($year = 1;$year <= 3000; $year++)
{
    if ($year%4==0 && (($year%100!==0) || $year%400==0))
    {
        echo $year.' LEAP YEAR<br/><br/>';
    }  
}
?>
