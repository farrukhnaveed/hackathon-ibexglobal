<?php

require 'businessmodels\CSVModel.php';

class CSVModelTest extends PHPUnit_Framework_TestCase  {

	public $csv1 = "EmployeeID,Name,HoursWorked\n111,Kent Beck,60\n222,Martin Fowler,50\n333,Jeff Sutherland,45\n444,Ken Schwaber,65";
	public $csv2 = "EmployeeID,Address,Name,HoursWorked\n111,Texas State,Kent Beck,55\n222,Colorado State,Martin Fowler,33\n333,New York State,Jeff Sutherland,22\n444,Virginia State,Ken Schwaber,44\n555,Arizona State,Azfar Akram,67";
	public $csv3 = "EmployeeID,Address,Department,Name,HoursWorked\n111,Texas State,Tech,Kent Beck,55\n222,Colorado State,Finance,Martin Fowler,33\n333,New York State,Operations,Jeff Sutherland,22\n444,Virginia State,HR,Ken Schwaber,44\n555,Arizona State,Tech,Azfar Akram,67\n666,Colorado State,Tech,Shafqat Mahmood,34\n444,Virginia State,HR,Ken Schwaber,66\n555,Arizona State,Tech,Azfar Akram,32\n666,Colorado State,Tech,Shafqat Mahmood,45";

	public $incorrect_csv = "Name,HoursWorked\n111,Kent Beck,60\n222,Martin Fowler,50\n333,Jeff Sutherland,45\n444,Ken Schwaber,65"; // without employee id


    public function setUp() {
        $this->model = new CSVModel(rand());
    }

    public function tearDown() {
        unset($this->model);
    }

    public function testIncorrectFileFormat() {
		$fd = fopen('php://temp/csv.csv', 'w');
		if($fd === FALSE) {
		    die('Failed to open temporary file');
		}

		$headers = array('EmployeeID', 'Name', 'HoursWorked');
		$records = array(
		    array('1', 'gise', '4'),
		    array('2', 'hek2mgl', '36')
		);

		fputcsv($fd, $headers);
		foreach($records as $record) {
		    fputcsv($fd, $record);
		}

		$result = $this->model->validateFileFormat($fd);

		$this->assertFalse($result);

		rewind($fd);
		$csv = stream_get_contents($fd);
		fclose($fd); // releases the memory (or tempfile)

    }

    public function testCorrectFileFormat() {
		$fd = fopen('php://temp/csv.csv', 'w');
		if($fd === FALSE) {
		    die('Failed to open temporary file');
		}

		$headers = array('EmployeeID', 'Name', 'HoursWorked');
		$records = array(
		    array('1', 'gise', '4'),
		    array('2', 'hek2mgl', '36')
		);

		fputcsv($fd, $headers);
		foreach($records as $record) {
		    fputcsv($fd, $record);
		}

		$result = $this->model->validateFileFormat($fd);

		$this->assertFalse($result);

		rewind($fd);
		$csv = stream_get_contents($fd);
		fclose($fd); // releases the memory (or tempfile)
    }

    public function testCorrectContent() {
    	$result = $this->model->validateContent($this->csv1);
    	$this->assertTrue($result);
    }
    public function testIncorrectContent() {
    	$result = $this->model->validateContent($this->incorrect_csv);
    	$this->assertFalse($result);

    }
    public function testCorrectAggregate() {
    	$result = $this->model->getEmployeeAggregate($this->csv1,$this->csv2,$this->csv3);

    	$this->assertTrue(count($result)>0);
    }
    public function testIncorrectAggregate() {
    	try{

	    	$result = $this->model->getEmployeeAggregate($this->csv1,$this->csv2,$this->incorrect_csv);
	    } catch (Exception $e) {
	    	$this->assertContains('Undefined offset',$e->getMessage());
	    }

    }

}

?>