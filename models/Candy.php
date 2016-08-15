<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 08.08.2016
 * Time: 14:49
 */

namespace app\models;

use Yii;
use yii\base\Model;

class Candy extends Model
{
    public $name;
    public $price;
    public $description;
    public $candyImage;

    public function rules() {
        return [
        [['name', 'price', 'description', 'image'], 'required'],
        ['name', 'string', 'length' => [2,64]],
        ['price', 'float'],
        ['description', 'string', 'length' => [10,300]],
        ['candyImage', 'image', 'extensions' => ['jpg', 'png', 'jpeg', 'gif']]
        ];
    }

//    public function __construct($name, $price, $description, $candyImage)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->description = $description;
//        $this->candyImage = $candyImage;
//    }

}