<?php

namespace alperenbugaz\omr;

use portalium\base\Event;
use alperenbugaz\omr\components\TriggerActions;

class Module extends \portalium\base\Module
{
    public static $tablePrefix = 'omr_';
    
    public static $name = 'omr';

    public static $description = 'Omr Module';

    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'omr/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('omr','@alperenbugaz/omr/messages',[
            'omr' => 'omr.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('omr', $message, $params);
    }

    /* 
        public function registerEvents()
        {
            Event::on($this::className(), UserModule::EVENT_USER_DELETE_BEFORE, [new TriggerActions(), 'onUserDeleteBefore']);
        } 
    */
}