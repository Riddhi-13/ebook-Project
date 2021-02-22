<?php
/**
 * 
 */
class Dbh
{
	private $dbServername;
	private $dbUsername;
	private $dbPassword;
	private $dbName;

	protected function connect(){
		$this->dbServername="localhost";
		$this->dbUsername="root";
		$this->dbPassword="";
		$this->dbName="e_book_reader";

		$conn=new mysqli($this->dbServername,$this->dbUsername,$this->dbPassword,$this->dbName);
		if(!$conn){
			die("Connection failed:".mysqli_connect_error());
		}
		return $conn;
	}
}
 
 