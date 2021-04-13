<?php namespace Iamk\Productinfo\Models;

use Model;

/**
 * Model
 */
class ProductInfo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['color_slider', 'additional_info', 'additional_info_en', 'product_title'];


    public $attachOne = [
        'mp4' => 'System\Models\File',
        'webm' => 'System\Models\File'
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamk_productinfo_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
