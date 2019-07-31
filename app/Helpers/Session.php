<?php namespace App\Helpers;

class Session
{
    private static $sessionStarted = false;

    /**
     * if session has not started, start sessions
     */
    public static function init()
    {
        if (self::$sessionStarted == false) {
            session_start();
            self::$sessionStarted = true;
        }
    }

    // kaip naudojas self? is kur jis ateina?

    public static function set($key, $value = false)
    {
        /**
         * Check whether session is set in array or not
         * If array then set all session key-values in foreach loop
         */
        if (is_array($key) && $value === false) {
            foreach ($key as $name => $value) {
                $_SESSION[$name] = $value;
        // skirta miltisesijoms nustatyti, useris su keliais browseriais vienu metu, keli useriai, o pvz. kaip monitorinti?
            }
        } else {
            $_SESSION[$key] = $value;
        }
    }

    //is kur yra istraukiamas tas $key turbut _SESSION?? Ir kur naudojama set funkcija?

    public static function pull($key)
    {
        $value = $_SESSION[$key];
        unset($_SESSION[$key]);

        return $value;
    }

    //kaip yra siunciamas sesijos raktas? atvaizduoti view, sukurti admino dashborda sesiju monitoringui ir sesiju raktams $keys stebeti

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return false;
    }


    public static function display()
    {
        return $_SESSION;
    }

    public static function destroy($key = '')
    {
        if (self::$sessionStarted == true) {
            if (empty($key)) {
                session_unset();
                session_destroy();
            } else {
                unset($_SESSION[$key]);
            }
        }
    }

}
