<?php

namespace app\modules\test;

/**
 * test module definition class
 */
class TestModule extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\test\controllers';
    public $layout = 'test';
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
