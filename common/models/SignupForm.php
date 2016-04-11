<?php
namespace common\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
	public $repeat_password;
	

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'Username tidak boleh kosong'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Username telah digunakan'],
            ['username', 'string', 'min' => 2, 'max' => 255, 'message' => 'Panjang username tidak boleh kurang dari 2 karakter dan lebih dari 255 karakter'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => 'Email tidak boleh kosong'],
            ['email', 'email', 'message' => 'Alamat email tidak valid'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Alamat email ini telah terpakai'],

            ['password', 'required', 'message' => 'Password tidak boleh kosong'],
            ['password', 'string', 'min' => 6, 'message' => 'Panjang password tidak boleh kurang dari 6 karakter'],
            ['repeat_password', 'compare', 'compareAttribute'=>'password', 'message'=>'Password tidak sama'],
            ['repeat_password', 'required', 'message' => 'Password tidak boleh kosong'],
			
        ];
    }

	public function attributeLabels()
    {
        return [
            'username' => 'Username',		
        ];
    }
	
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
