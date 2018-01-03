<?php namespace ZN\Helpers;

use ZN\Helpers\Exception\LogicException;

class Rounder extends \FactoryController
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
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $number
    // @param int    $count
    //
    //--------------------------------------------------------------------------------------------------------
    public static function average(Float $number, Int $count = 0) : Float
    {
        return round($number, $count);
    }

    //--------------------------------------------------------------------------------------------------------
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $number
    // @param int    $count
    //
    //--------------------------------------------------------------------------------------------------------
    public static function down(Float $number, Int $count = 0) : Float
    {
        if( $count === 0 )
        {
            return floor($number);
        }

        $numbers = explode(".", $number);

        $edit = 0;

        if( ! empty($numbers[1]) )
        {
            $edit = substr($numbers[1], 0, $count);

            return (float) $numbers[0].".".$edit;
        }
        else
        {
            throw new LogicException('[Rounder::down()] -> Decimal values can not be specified for the integer! Check 2.($count) parameter!');
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // Up
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $number
    // @param int    $count
    //
    //--------------------------------------------------------------------------------------------------------
    public static function up(Float $number, Int $count = 0) : Float
    {
        if( $count === 0 )
        {
            return ceil($number);
        }

        $numbers = explode(".", $number);

        $edit = 0;

        if( ! empty($numbers[1]) )
        {
            $edit = substr($numbers[1], 0, $count);

            return (float) $numbers[0].".".($edit + 1);
        }
        else
        {
            throw new LogicException('[Rounder::up()] -> Decimal values can not be specified for the integer! Check 2.($count) parameter!');
        }
    }
}
