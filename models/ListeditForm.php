<?php

namespace app\models;

use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ListeditForm extends Model
{
    public $pricename;
    public $pricefile;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['pricename'], 'safe'],
            [['pricefile'], 'file', 'skipOnEmpty' => false],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'pricename' => 'Прайс-лист',
            'pricefile' => 'Файл',
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
//            $this->pricefile->saveAs('prices/' . $this->pricefile->baseName . '.' . $this->pricefile->extension);
            $this->pricefile->saveAs('prices/' . $this->pricename . '.' . $this->pricefile->extension);
            return true;
        } else {
            return false;
        }
    }
}
