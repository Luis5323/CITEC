<?php

class RecuperarPassword extends CFormModel{
	public $username;
	public $email;
	public $captcha;

	public function rules(){
		return array(
			array(
				'username,captcha',
				'required',
				'message'=>'el campo es requerido',
				),

			array('email','email'),
			array('captcha','captcha'),
			);
	}

	public function attributeLabels()
	{
		return array('username' => 'Introduce correo electronico',);		
	}
}




?>