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

interface ValidationInterface
{
    /**
     * It checks the data.
     * 
     * @param string $submit = NULL
     * 
     * @return bool
     */
    public function check(String $submit = NULL) : Bool;

    /**
     * Defines rules for control of the grant.
     * 
     * @param string $name
     * @param array  $config   = []
     * @param string $viewName = ''
     * @param string $met      = 'post' - options[post|get]
     * 
     * @return void
     */
    public function rules(String $name, Array $config = [], $viewName = '', String $met = 'post');

    /**
     * It keeps the last value of the passed data from the filter.
     * 
     * @param string $name
     * 
     * @return string
     */
    public function nval(String $name);

    /**
     * Get error
     * 
     * @param string $name = 'array' - options[array|string]
     */
    public function error(String $name = 'array');

    /**
     * Get input post back.
     * 
     * @param string $name
     * @param string $met = 'post' - options[post|get]
     */
    public function postBack(String $name, String $met = 'post');

    /**
     * Checks whether the grant is between the specified values.
     * 
     * @param float $min = NULL
     * @param float $max = NULL
     * 
     * @return Validation
     */
    public function between(Float $min = NULL, Float $max = NULL) : Validation;

    /**
     * Checks whether the grant is between the specified values.
     * 
     * @param float $min = NULL
     * @param float $max = NULL
     * 
     * @return Validation
     */
    public function betweenBoth(Float $min = NULL, Float $max = NULL) : Validation;

    /**
     * Select method
     * 
     * @param string $method - options[get|post]
     * 
     * @return Validation
     */
    public function method(String $method) : Validation;

    /**
     * Specifies a value.
     * 
     * @param string $value
     * 
     * @return Validation
     */
    public function value(String $value) : Validation;

    /**
     * Data can not be empty.
     * 
     * @param void
     * 
     * @return Validation
     */
    public function required() : Validation;

    /**
     * The data should be numeric.
     * 
     * @param void
     * 
     * @return Validation
     */
    public function numeric() : Validation;

    /**
     * Matches the data.
     * 
     * @param string $match
     * 
     * @return Validation
     */
    public function match(String $match) : Validation;

    /**
     * Matches the password.
     * 
     * @param string $match
     * 
     * @return Validation
     */
    public function matchPassword(String $match) : Validation;

    /**
     * Specifies the old password information.
     * 
     * @param string $oldPassword
     * 
     * @return Validation
     */
    public function oldPassword(String $oldPassword) : Validation;

    /**
     * The data can not be outside the specified values.
     * 
     * @param int $min = NULL
     * @param int $max = NULL
     * 
     * @return Validation
     */
    public function compare(Int $min = NULL, Int $max = NULL) : Validation;

    /**
     * Specifies data control arguments.
     * 
     * @param mixed ...$args
     * 
     * Available Options
     * 
     * [identity|email|url|specialChar|alnum|alpha|phone|required|trim|captcha]
     * 
     * @return Validation
     */
    public function validate(...$args) : Validation;

    /**
     * Specifies data security arguments.
     * 
     * @param mixed ...$args
     * 
     * Available Options
     * 
     * [nc|html|xss|injection|php|script]
     * 
     * @return Validation
     */
    public function secure(...$args) : Validation;

    /**
     * Specifies the data pattern to check.
     * 
     * @param string $pattern
     * @param string $char = NULL
     * 
     * @return Validation
     */
    public function pattern(String $pattern, String $char = NULL) : Validation;

    /**
     * Checks whether the donation has phone information.
     * 
     * @param string $desing = NULL
     * 
     * @return Validation
     */
    public function phone(String $design = NULL) : Validation;

    /**
     * Checks whether the verb is alphabetic.
     * 
     * @param void
     * 
     * @return Validation
     */
    public function alpha() : Validation;

    /**
     * Controls whether the verb is alphanumeric.
     * 
     * @param void
     * 
     * @return Validation
     */
    public function alnum() : Validation;

    /**
     * Checks whether the captcha is present.
     * 
     * @param void
     * 
     * @return Validation
     */
    public function captcha() : Validation;
}
