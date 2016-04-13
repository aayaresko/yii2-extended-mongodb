<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace aayaresko\mongodb\debug;

use yii\debug\panels\DbPanel;
use yii\log\Logger;

/**
 * MongoDbPanel panel that collects and displays MongoDB queries performed.
 *
 * @author Klimov Paul <klimov@zfort.com>
 * @since 2.0.1
 */
class MongoDbPanel extends DbPanel
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'MongoDB';
    }

    /**
     * @inheritdoc
     */
    public function getSummaryName()
    {
        return 'MongoDB';
    }

    /**
     * Returns all profile logs of the current request for this panel.
     * @return array
     */
    public function getProfileLogs()
    {
        $target = $this->module->logTarget;

        return $target->filterMessages($target->messages, Logger::LEVEL_PROFILE, [
            'aayaresko\mongodb\Collection::*',
            'aayaresko\mongodb\Query::*',
            'aayaresko\mongodb\Database::*',
        ]);
    }
} 