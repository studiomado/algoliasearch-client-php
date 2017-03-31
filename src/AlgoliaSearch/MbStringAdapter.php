<?php

namespace AlgoliaSearch;

class MbStringAdapter
{   
    const EXTENSION = 'mbstring';

	/**
     * @param string $str
     *
     * @return int
     */
    public static function getStrlenFromString($str)
    {
        if (extension_loaded(EXTENSION)) {
            return mb_strlen($str);
        }
        
        return strlen($str);
    }

	/**
     * @param string $haystack
     * @param string $haystack
     *
     * @return int
     */
    public static function getStrposFromString($haystack, $needle)
    {	
        if (extension_loaded(EXTENSION)) {
            return mb_strpos($haystack, $needle);
        }
        
        return strpos($haystack, $needle);
    }

	/**
     * @param string $str
     * @param int $start
     * @param int $length
     *
     * @return string
     */
    public static function getSubstrFromString($str, $start, $length)
    {
    	if (extension_loaded(EXTENSION)) {
            return mb_substr($str, $start, $length);
        }
        
        return substr($str, $start, $length);
    }
}