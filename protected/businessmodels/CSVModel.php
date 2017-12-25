<?php

class CSVModel {

	public function validateFileFormat($csv_file) {
		$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');

		if (in_array($csv_file['type'],$mimes)) {
			$result = true;
		} else {
			$result = false;
		}

		return $result;
	}

	public function getCSVFileContent($csv_file){
		$content = file_get_contents($csv_file["tmp_name"]);
		$result = $this->validateContent($content);

		if ($result == true) {
			$result = $content;
		}

		return $content;
	}

	public function validateContent($content) {
		$rows = explode("\n",$content);
		$title = explode(",",$rows[0]);

		foreach ($title as $key => $value) {
			$title[$key] = trim(strtolower($title[$key]));
		}

		if (in_array('employeeid', $title) && in_array('hoursworked', $title)) {
			$result = true;
		} else {
			$result = false;
		}

		return $result;
	}


	public function getEmployeeAggregate($content1,$content2,$content3) {
		$data = array();

		for($i=1;$i<=3;$i++) {
			$id_index = $name_index = $hours_index = -1;

			if ($i==1) {
				$content = $content1;
			} else if ($i==2) {
				$content = $content2;
			} else {
				$content = $content3;
			}

			$rows = explode("\n",$content);
			$title = explode(",",$rows[0]);

			foreach ($title as $key => $value) {
				$title[$key] = trim(strtolower($title[$key]));

				if ($title[$key] == 'employeeid') {
					$id_index = $key;
				} else if ($title[$key] == 'hoursworked') {
					$hours_index = $key;
				} elseif ($title[$key] == 'name') {
					$name_index = $key;
				}
			}

			$content_first = true;
			foreach ($rows as $row) {
				if ($content_first) {
					$content_first = false;
				} else {
					$row_data = explode(",",$row);

					if ($row_data[$id_index] != '' && $row_data[$name_index] != '' && $row_data[$hours_index] != '') {
						if (isset($data[trim($row_data[$id_index])])) {

							$data[trim($row_data[$id_index])]['HoursWorked'] += intval(trim($row_data[$hours_index]));
						} else {
							//print_r($data);
							$data[trim($row_data[$id_index])] = array('Name'=>$row_data[$name_index],'HoursWorked'=>intval(trim($row_data[$hours_index])));

							//print_r($data);
						}
					}
						
				}
			}
		}
		
		return $data;
	}
}