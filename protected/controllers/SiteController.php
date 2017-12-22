<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
		$this->layout='/layouts/default';
        $this->render('index',array());
		//echo 'Hello World';
	}

	public function actionAbout()
	{
		$this->layout='/layouts/default';
        $this->render('about',array());
	}

	public function actionContact()
	{
		$this->layout='/layouts/default';
        $this->render('contact',array());
	}
}