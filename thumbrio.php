<?php

require_once dirname ( __FILE__ ) . "/config.php";


$THUMBRIO_BASE_URLS = array('http://api.thumbr.io/', 'https://api.thumbr.io/');

/**
 * $url is the URL of the image that you want to process. This string should
 * be pure ASCII or UTF-8.
 */
function thumbrio($url, $size, $thumb_name='thumb.png', $query_arguments=NULL,
                  $base_url=NULL) {
    global $THUMBRIO_BASE_URLS;

    if (!$base_url) {
        $base_url = isset($THUMBRIO_BASE_URLS[0]) ? $THUMBRIO_BASE_URLS[0] : 'http://api.thumbr.io/';
    }
    if (substr($url, 0, 7) === 'http://') {
        $url = substr($url, 7);
    }
    $encoded_url = _thumbrio_urlencode($url);
    $encoded_size = _thumbrio_urlencode($size);
    $encoded_thumb_name = _thumbrio_urlencode($thumb_name);
    $path = "$encoded_url/$encoded_size/$encoded_thumb_name";

    if ($query_arguments) {
        $path .= "?$query_arguments";
    }

    // We should add the API to the URL when we use the non customized
    // thumbr.io domains
    if (in_array($base_url, $THUMBRIO_BASE_URLS)) {
        $path = THUMBRIO_API_KEY . "/$path";
    }
    echo "<br><br>path:" . $path ;

    
    // some bots (msnbot-media) "fix" the url changing // by /, so even if
    // it's legal it's troublesome to use // in a URL.
    $path = str_replace('//', '%2F%2F', $path);
    echo "<br><br> new path :".$path;
    $token = hash_hmac('md5', $base_url . $path, THUMBRIO_SECRET_KEY);

    echo "<br><br> token :" . $token ;
    
    return "$base_url$token/$path";
}

/**
 * Encodes a string following RFC 3986, adding "/" to the safe characters.
 * Assumes the $str is encoded in UTF-8.
 */
function _thumbrio_urlencode($str) {
    $length = strlen($str);
    $encoded = '';
    for ($i = 0; $i < $length; $i++) {
        $c = $str[$i];
        if (($c >= 'a' && $c <= 'z') ||
            ($c >= 'A' && $c <= 'Z') ||
            ($c >= '0' && $c <= '9') ||
            $c == '/' || $c == '-' || $c == '_' || $c == '.')
            $encoded .= $c;
        else
            $encoded .= '%' . strtoupper(bin2hex($c));
    }
    return $encoded;
}
?>