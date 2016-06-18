<?php namespace Hosseinhkj\Slug;

class Slug
{
    public static function slugify($string, $separator = '-')
    {
        $string = strtolower($string);
        $string = mb_ereg_replace('([^ا-ی۰-۹a-z0-9]|-)+', $separator, $string);
        $string = strtolower($string);
        return trim($string, $separator);
    }
}