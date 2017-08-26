<?php namespace Hosseinhkj\Slug;

class Slug
{
    public static function slugify($string, $separator = '-', $limit = 8)
    {
        $string = strtolower($string);
        $string = str_replace('‌',' ',$string);
        $string = \Illuminate\Support\Str::words($string,$limit,'');
        $string = mb_ereg_replace('([^آ-ی۰-۹a-z0-9]|-)+', $separator, $string);
        $string = strtolower($string);
        return trim($string, $separator);
    }
}
