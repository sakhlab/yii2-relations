<?php
namespace pistol88\relations;

class Module extends \yii\base\Module
{
    public $adminRoles = ['admin', 'superadmin'];
    public $fields = [];
    
    public function init()
    {
        parent::init();
    }
}
