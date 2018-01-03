<?php namespace ZN\ViewObjects;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\ViewObjects\Abstracts\GridAbstract;

class MLGrid extends GridAbstract
{
    //--------------------------------------------------------------------------------------------------------
    // Url()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $url
    //
    //--------------------------------------------------------------------------------------------------------
    public function url(String $url) : MLGrid
    {
        \ML::url($url);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // limit()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $limit
    //
    //--------------------------------------------------------------------------------------------------------
    public function limit(Int $limit) : MLGrid
    {
        \ML::limit($limit);

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Create
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $app
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function create($app = NULL) : String
    {
        return \ML::table($app);
    }
}