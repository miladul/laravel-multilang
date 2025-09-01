<?php

if (!function_exists('mlang')) {
    function mlang($key, $replace = [], $locale = null)
    {
        return __($key, $replace, $locale);
    }
}
