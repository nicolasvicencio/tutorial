<?php

class HiController extends Controller
{
	public function actionIndex(){
		$model = CActiveRecord::model('Users')->findAll();
		$twitter = '@Don Nico';
		$this->render('index', array('twitter'=> $twitter,
																	'model'=> $model));

	}


}