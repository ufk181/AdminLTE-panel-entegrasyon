<?php namespace ZN\IndividualStructures\Security;

use ZN\Helpers\Converter;

class HTML
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
    // Html Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $type: quotes, nonquotes, compat
    // @param string $encoding
    //
    //--------------------------------------------------------------------------------------------------------
    public static function encode(String $string, String $type = 'quotes', String $encoding = 'utf-8') : String
    {
        return htmlspecialchars(trim($string), Converter::toConstant($type, 'ENT_'), $encoding);
    }

    //--------------------------------------------------------------------------------------------------------
    // Html Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param string $type: quotes, nonquotes, compat
    //
    //--------------------------------------------------------------------------------------------------------
    public static function decode(String $string, String $type = 'quotes') : String
    {
        return htmlspecialchars_decode(trim($string), Converter::toConstant($type, 'ENT_'));
    }

    //--------------------------------------------------------------------------------------------------------
    // HTML Tag Clean
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    //
    //--------------------------------------------------------------------------------------------------------
    public static function tagClean(String $string) : String
    {
        return strip_tags($string);
    }
}
