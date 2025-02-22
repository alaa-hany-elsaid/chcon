<?php

namespace Alaahany\Chcon;

class Chcon
{
    private  static $converter = null;

    public static function getConverter()
    {
        if (self::$converter == null) {
            self::$converter = new Converter;
            self::$converter->setReplaceHandler(function ($from, $to, $text) {
                return $text;
            });
        }
        return self::$converter;
    }


    public static function setConverter(Converter  $converter)
    {
        self::$converter = $converter;
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