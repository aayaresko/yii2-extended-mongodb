<?php

namespace yiiunit\extensions\mongodb\data\ar;

/**
 * Test Mongo ActiveRecord
 */
class ActiveRecord extends \aayaresko\mongodb\ActiveRecord
{
    public static $db;

    public static function getDb()
    {
        return self::$db;
    }
}
