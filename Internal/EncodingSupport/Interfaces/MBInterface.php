<?php namespace ZN\EncodingSupport;

interface MBInterface
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
    // Split
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $pattern
    // @param int    $limit
    //
    //--------------------------------------------------------------------------------------------------------
    public function split(String $string, String $pattern, Int $limit = -1) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Split
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param string $needle
    // @param string $type
    // @param bool   $case
    //
    //--------------------------------------------------------------------------------------------------------
    public function search(String $str, String $needle, String $type = 'str', Bool $case = true) : String;

    //--------------------------------------------------------------------------------------------------------
    // Section
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    // @param int    $starting
    // @param int    $count
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function section(String $str, Int $starting = 0, Int $count = NULL, String $encoding = 'UTF-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Parse Get
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    //
    //--------------------------------------------------------------------------------------------------------
    public function parseGet(String $string) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Check Encoding
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function checkEncoding(String $string = NULL, String $encoding = 'UTF-8') : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Casing
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $flag
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function casing(String $string, String $flag = 'upper', String $encoding = 'UTF-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Convert Encoding
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $toEnoding
    // @param string $fromEncoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function convertEncoding(String $string, String $toEncoding = 'UTF-8', String $fromEncoding = 'ASCII, UTF-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Mime Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    //
    //--------------------------------------------------------------------------------------------------------
    public function mimeDecode(String $string) : String;

    //--------------------------------------------------------------------------------------------------------
    // Mime Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $encoding
    // @param string $transferEncoding
    // @param string $crlf
    // @param int    $indent
    //
    //--------------------------------------------------------------------------------------------------------
    public function mimeEncode(String $string, String $encoding = 'UTF-8', String $transferEncoding = 'B', String $crlf = "\r\n", Int $indent = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Html To Numeric
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param array  $convertMap
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function htmlToNumeric(String $string, Array $convertMap = NULL, String $encoding = 'UTF-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Numeric To Html
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param array  $convertMap
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function numericToHtml(String $string, Array $convertMap = NULL, String $encoding = 'UTF-8') : String;

    //--------------------------------------------------------------------------------------------------------
    // Detect Encoding
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param mixed  $encodingList
    // @param bool   $strict
    //
    //--------------------------------------------------------------------------------------------------------
    public function detectEncoding(String $string, $encodingList = ['ASCII', 'UTF-8'], Bool $strict = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // Detect Order
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed  $encodingList
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function detectOrder($encodingList);

    //--------------------------------------------------------------------------------------------------------
    // Encoding Aliases
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed  $encodingList
    //
    //--------------------------------------------------------------------------------------------------------
    public function encodingAliases(String $string) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Info
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    //
    //--------------------------------------------------------------------------------------------------------
    public function info(String $string = 'all');

    //--------------------------------------------------------------------------------------------------------
    // Http Input
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type
    //
    //--------------------------------------------------------------------------------------------------------
    public function httpInput(String $type = 'I');

    //--------------------------------------------------------------------------------------------------------
    // Http Output
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function httpOutput(String $encoding = 'UTF-8');

    //--------------------------------------------------------------------------------------------------------
    // Lang
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $lang
    //
    //--------------------------------------------------------------------------------------------------------
    public function lang(String $lang = 'neutral');

    //--------------------------------------------------------------------------------------------------------
    // Encodings
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function encodings() : Array;

    //--------------------------------------------------------------------------------------------------------
    // Output Handler
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $contents
    // @param int    $status
    //
    //--------------------------------------------------------------------------------------------------------
    public function outputHandler(String $contents, Int $status = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Preferred Mime Name
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public function preferredMimeName(String $encoding = 'UTF-8') : String;
}
