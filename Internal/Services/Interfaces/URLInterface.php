<?php namespace ZN\Services;

interface URLInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Base
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @param  numeric $index:  0
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function base(String $uri = NULL, Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Site
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @param  numeric $index:  0
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function site(String $uri = NULL, Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------
    // siteUrls() - v.4.2.6
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $uri
    // @param int    $index
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------
    public static function sites(String $uri = NULL, Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Current
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $fix empty
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function current(String $fix = NULL) : String;

    //--------------------------------------------------------------------------------------------------------
    // Host
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function host(String $uri = NULL) : String;

    //--------------------------------------------------------------------------------------------------------
    // Prev
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function prev() : String;

    //--------------------------------------------------------------------------------------------------------
    // Base 64 Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $data: empty
    // @param  bool    $strict: false
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function base64Decode(String $data, Bool $strict = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // Base 64 Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $data: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function base64Encode(String $data) : String;

    //--------------------------------------------------------------------------------------------------------
    // Headers
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $url: empty
    // @param  string $format: 0
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function headers(String $url, Int $format = 0) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Headers
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $fileName: empty
    // @param  bool   $useIncludePath: false
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function metaTags(String $fileName, Bool $useIncludePath = false) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Build Query
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed  $data         : empty
    // @param  string $numericPrefix: NULL
    // @param  string $separator    : NULL
    // @param  Int    $enctype = self::RFC1738
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function buildQuery($data, String $numericPrefix = NULL, String $separator = NULL, Int $enctype = PHP_QUERY_RFC1738) : String;

    //--------------------------------------------------------------------------------------------------------
    // Parse
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $url      : empty
    // @param  scalar  $component: 1
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function parse(String $url, $component = 1);

    //--------------------------------------------------------------------------------------------------------
    // Raw Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static  function rawDecode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Raw Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function rawEncode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function decode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public static function encode(String $str) : String;
}
