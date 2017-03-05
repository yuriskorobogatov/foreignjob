<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $firstname;
    public $secondname;
    public $email;
    public $phone;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['firstname','secondname', 'email', 'phone', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
        //    'verifyCode' => 'Подтвердите код',
            'firstname' => 'Име',
            'secondname' => 'Фамилия',
            'email' => 'Имейл',
            'phone' => 'Телефон',
            'body' => 'Съобщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(array($this->email => $this->firstname))
                ->setSubject($this->phone)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
