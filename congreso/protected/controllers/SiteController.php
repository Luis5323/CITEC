<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	/*public function actionUsuarioRegistrado(){
		$this->layout='//layouts/public/column1';

		$this->menu=array(
			//array('label'=>'Inicio', 'url'=>"ddddddd"),
		);

		$this->render('usuarioRegistrado',array(
			
		));
	}*/
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='//layouts/public/column1';
		$evento = Eventos::model()->findByPk('1');

		$criteria= new CDbCriteria(); 
		$taller= new CDbCriteria(); 
		$visita= new CDbCriteria(); 
		$social= new CDbCriteria(); 
	      $participantes  = Participantes::model()->tablename();
          $participantestipo = ParticipantesTipos::model()->tablename();
          $tiposparticipante = TiposDeParticipantes::model()->tablename();
          $eventosTaller = Actividades::model()->tablename();


        $criteria->select = 't.nombres,t.apellidos,t.email';
        $criteria->join =
           'inner join '.$participantestipo.' pt on t.id_participante=pt.id_participante
            inner join '.$tiposparticipante.' tp on tp.id_tipo=pt.id_tipo';
        $criteria->compare('tp.tipo','congresista',true);

        $taller->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $taller->compare('t.id_tipo','1',true);

        $visita->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $visita->compare('t.id_tipo','2',true);

        $social->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $social->compare('t.id_tipo','3',true);

        $talleres = Actividades::model()->findAll($taller);
        $industrial = Actividades::model()->findAll($visita);
        $eventoSocial = Actividades::model()->findAll($social);
 
    
    


		$participante = Participantes::model()->findAll($criteria);

		$model=new Participantes;

		if(isset($_POST['Participantes']))
		{
			$model->attributes=$_POST['Participantes'];
			if($model->save())
				$this->redirect(array('#usuarioRegistrado','id'=>$model->id_participante));
		}

		$this->menu=array(
			array('label'=>'Información', 'url'=>"#informacion"),
			array('label'=>'Especificaciones', 'url'=>"#especificaciones"),
			array('label'=>'Ponentes', 'url'=>"#ponentes"),
			//array('label'=>'Registro', 'url'=>"#", 'attr'=>array("data-toggle"=>"modal", "data-target"=>"#modal_registro")),
			//array('label'=>'<i class="fa fa-user"></i>', 'url'=>"#", 'attr'=>array("data-toggle"=>"modal", "data-target"=>"#modal_sesion")),			
		);


		$this->render('index',array(
			'evento'=>$evento,
			'model'=>$model,
			'participante'=>$participante,
			'talleres'=>$talleres,
			'industrial'=>$industrial,
			'eventoSocial'=>$eventoSocial,
			
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


	public function actionRecuperarpassword()
	{
		$model=new RecuperarPassword;
		$msg =' ';
		if(isset($_POST["RecuperarPassword"]))
		{
			$model->attributes = $_POST['RecuperarPassword'];
			if(!$model->validate())
			{
				$msg ="<strong class='text-error'>Error al enviar el formulario</strong>";
			}
			else
			{
				$conexion = Yii::app()->db;
				$consulta = "select email from participantes where email='".$model->username."'";
				

				$resultado = $conexion->createCommand ($consulta);
				$filas=$resultado->query();
				$existe = false;
				foreach ($filas as $fila) {
					$existe = true;
				}

				if($existe===true)
				{
					$consulta = "select contraseña from participantes where email='".$model->username."'";
					$resultado = $conexion->createCommand($consulta)->query();
					$resultado->bindColumn(1, $password);

					while($resultado->read()!==false)
					{
						$password=$password;
					}

					$email = new EnviarEmail;
					$subject = "Recuperar Contraseña ";
					$subject .= Yii::app()->name;
					$message = "Bienvenido: ".$model->username."su contaseña es: ";
					$message .=$password;

					$email->Enviar_Email(
						array(Yii::app()->params['adminEmail'],Yii::app()->name),
						array($model->username,$model->username),
						$subject,
						$message
						);

				}
				else
				{
					$msg = "<strong class='text-error'>Error usuario no existe</strong>";
				}
			}
		}
		$this->render('recuperarpassword', array('model'=>$model, 'msg'=>$msg));
	}


}