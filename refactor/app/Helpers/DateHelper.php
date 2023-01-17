<?php

namespace App\Helpers;

/**
 * Class DateHelper
 */
class DateHelper
{
    
    /**
     * Convert number of minutes to hour and minute variant
     * 
     * @param int $time 
     * @param string $format 
     * @return string         
     */
    public static function convertToHoursMins($time, $format = '%02dh %02dmin')
    {
        if ($time < 60) {
            return $time . 'min';
        } else if ($time == 60) {
            return '1h';
        }

        $hours = floor($time / 60);
        $minutes = ($time % 60);
        
        return sprintf($format, $hours, $minutes);
    }
}