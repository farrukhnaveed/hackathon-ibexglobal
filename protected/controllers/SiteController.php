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
				$validation_result1 = $csv_model->validateFileFormat($_FILES["csv1"]);
				$validation_result2 = $csv_model->validateFileFormat($_FILES["csv2"]);
				$validation_result3 = $csv_model->validateFileFormat($_FILES["csv3"]);

				if ($validation_result1) {
				//if ($validation_result1 && $validation_result2 && $validation_result3) {
					$content1 = $csv_model->getCSVFileContent($_FILES["csv1"]);
					$content2 = $csv_model->getCSVFileContent($_FILES["csv2"]);
					$content3 = $csv_model->getCSVFileContent($_FILES["csv3"]);

					if ($content1 == false) {
						array_push($errors, 'File 1 content invalid');
					}
					if ($content2 == false) {
						array_push($errors, 'File 2 content invalid');
					}
					if ($content3 == false) {
						array_push($errors, 'File 3 content invalid');
					}

					if (count($errors) == 0) {
						//get results
						$data = $csv_model->getEmployeeAggregate($content1,$content2,$content3);
						$is_result = true;
					}
				} else {
					if ($validation_result1 == false) {
					array_push($errors, 'File 1 is not a valid CSV file');
					}
					if ($validation_result2 == false) {
						array_push($errors, 'File 2 is not a valid CSV file');
					}
					if ($validation_result3 == false) {
						array_push($errors, 'File 3 is not a valid CSV file');
					}	
				}
									
			} else {
				array_push($errors, 'One or more files are missing');
			}
		}

		$this->layout='/layouts/default';
    	$this->render('index',array('isResult'=>$is_result,'errors'=>$errors,'data'=>$data));
	}

}