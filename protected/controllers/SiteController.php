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
		$is_result = false;
		$errors = array();
		$data = array();
		if(Yii::app()->request->isPostRequest) {
			if(isset( $_FILES) && isset($_FILES["csv1"]) && isset($_FILES["csv2"]) && isset($_FILES["csv3"])) {
				$csv_model = new CSVModel();
				$content1 = $csv_model->getCSVFileContent($_FILES["csv1"]);
				$content2 = $csv_model->getCSVFileContent($_FILES["csv2"]);
				$content3 = $csv_model->getCSVFileContent($_FILES["csv3"]);

				if ($content1 == false) {
					array_push($errors, 'File 1 is invalid');
				}
				if ($content2 == false) {
					array_push($errors, 'File 2 is invalid');
				}
				if ($content3 == false) {
					array_push($errors, 'File 3 is invalid');
				}
				if (count($errors) == 0) {
					//get results
					$is_result = true;
					$data = $csv_model->getEmployeeAggregate($content1,$content2,$content3);
				}
			}
		}
		$this->layout='/layouts/default';
    	$this->render('index',array('isResult'=>$is_result,'errors'=>$errors,'data'=>$data));
	}

}