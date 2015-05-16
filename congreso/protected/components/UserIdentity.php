<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
public function authenticate()
	{
		$user=Participantes::model()->find("LOWER(email)=?",array(strtolower($this->username)));
          
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($this->password!==$user->contraseña)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user->id_participante;
			$this->setState("id",$user->id_participante);
			$this->setState("apellido",$user->apellidos);
			$this->setState("nombre",$user->nombres);
			$this->errorCode=self::ERROR_NONE;
		    }
		return !$this->errorCode;
	}
	public function getId()
	{
		return $this->_id;
	}

}

