<?php namespace Iamk\Productinfo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ProductInfo extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Iamk.Productinfo', 'main-menu-item');
    }
}
