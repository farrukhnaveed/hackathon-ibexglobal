<?php

class CSVModel {

	public function getCSVFileContent($csv_file){
		if ($this->validateCSV($csv_file)) {
			$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
			if(in_array($csv_file['type'],$mimes)){
				$content = file_get_contents($csv_file["tmp_name"]);
				return $content;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function validateCSV($csv_file) {
		//TODO; validate csv
		return true;
	}

	public function getEmployeeAggregate($content1,$content2,$content3) {
		$result = array();
		return $result;
	}
}