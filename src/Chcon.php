<?php

namespace Alaahany\Chcon;

class Chcon
{
    private  static $converter = null;

    private static function getConverter()
    {
        if (self::$converter == null) {
            self::$converter = new Converter;
        }
        return self::$converter;
    }

    /**
     * Converts between different charsets
     *
     * @param string $from Charset of the string
     * @param string $to Charset to convert
     * @param string $text String
     * @return string on success; FALSE on failure
     */
    public static function convert($from, $to, $text)
    {
        return self::getConverter()->convert($from, $to, $text);
    }


    public static function getAvailableCharsets()
    {
        return self::getConverter()->availableCharsets();
    }
}