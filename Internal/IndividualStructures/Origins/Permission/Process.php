<?php namespace ZN\IndividualStructures\Permission;

class Process extends PermissionExtends
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
    // start()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $roleId : 0
    // @param string  $process: empty
    //
    //--------------------------------------------------------------------------------------------------------
    public static function start($roleId = 0, $process = NULL)
    {
        self::$content = self::use($roleId, $process, 'object');

        ob_start();
    }

    //--------------------------------------------------------------------------------------------------------
    // end()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function end()
    {
        if( ! empty(self::$content) )
        {
            $content = ob_get_contents();
        }
        else
        {
            $content = '';
        }

        ob_end_clean();

        self::$content = NULL;

        echo $content;
    }

    //--------------------------------------------------------------------------------------------------------
    // process()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed   $roleId : 0
    // @param string  $process: empty
    // @param string  $object : empty
    //
    //--------------------------------------------------------------------------------------------------------
    public static function use($roleId = 0, $process = NULL, $object = NULL)
    {
        if( PermissionExtends::$roleId !== NULL )
        {
            $object  = $process;
            $process = $roleId;
            $roleId  = PermissionExtends::$roleId;
        }

        return self::common($roleId, $process, $object, 'process');
    }
}
