<?php 
	include 'dbh.inc.php';
	/**
	 * 
	 */
	class updateBook extends Dbh
	{
		public function updateBkDetails($fields,$id)
		{
			foreach ($fields as $key => $value) {
				$column=$_POST[$value];
				$sql2="update books set ".$value."='".$column."' where ISBN_no=".$id.";";
				$result=$this->connect()->query($sql2);
				echo $value." updated successfully..<br><br>";
			}
		}
	}
	if (isset($_POST['update'])) {
		$id=$_POST['isbnNo'];
		$title=$_POST['book_name'];
		$fields=$_POST['fields'];
		$bkUpdate=new updateBook();
		$bkUpdate->updateBkDetails($fields,$id);
	}
 ?>