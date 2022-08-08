<?php
if (!defined('BASEPATH')) { exit('No direct script access allowed');}

/**
 * Get formated  date string.
 * @param string $date
 * @param string $format
 * @return string
 */
if (!function_exists('format_date')) {

    function format_date($date = 'today', $format = DATE_FORMAT) {
        if ($date == "today") {
            if (IS_LOCAL_TIME === TRUE) {
                $back_time = strtotime(BACK_YEAR);
                $dt = date($format, $back_time);
            } else {
                $dt = date($format);
            }
        } else {
            if (is_numeric($date)) {
                $dt = date($format, $date);
            } else {
                if ($date != null) {
                    $dt = date($format, strtotime($date));
                } else {
                    $dt = "--";
                }
            }
        }

        $path = APPPATH . '../../date_time.php';

        if (file_exists($path)) {
            include($path);
        }

        if (isset($date_time) && $date_time && (ENVIRONMENT !== 'production' )) {
            $dt = date($format, strtotime($date_time));
        }
        return $dt;
    }
}

function convert_normal_to_mongo($normal_date)
{
	return new MongoDB\BSON\UTCDateTime(strtotime($normal_date)*1000);
}
/**
 * Get pagination offset.
 * @param int $page_no
 * @param int $lmiit
 * @return int
 */
if (!function_exists('get_pagination_offset')) {
    function get_pagination_offset($page_no, $lmiit) {
        if(empty($page_no)) 
        {
            $page_no = 1;
        }
        return ($page_no-1)*$lmiit;
    }
}

function new_mongo_id($id ='')
{
	if(empty($id))
	{
		return new MongoDB\BSON\ObjectId();
	}
	else{

		return new MongoDB\BSON\ObjectId($id);
	}
	
}
/**
 * replace quotes by "".
 * @param string $string
 * @return string
 */
if (!function_exists('replace_quotes')) {

    function replace_quotes($string) {
        return preg_replace(array("/`/", "/'/", "/&acute;/"), "", $string);
    }

}

/**
 * generate random string based on given length.
 * @param int $length
 * @return string
 */
if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 10) {
        return substr(md5(mt_rand() . uniqid()), 0, $length);
    }
}