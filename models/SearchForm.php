<?php
namespace app\models;

use yii\base\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of SearchForm
 *
 * @author Иван
 */
class SearchForm extends Model {
    //put your code here
    
    public $str;
    
    public function rules() {
        return [
            ['str', 'string'],
        ];
    }
}
