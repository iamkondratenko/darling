<?php namespace Iamk\Category\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['subcategory'];

    public $hasMany = [
        'products' => ['iamk\productinfo\Models\ProductInfo'],
    ];




    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamk_category_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
