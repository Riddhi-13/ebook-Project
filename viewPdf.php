<?php
	include 'dbh.inc.php';
	class ViewFile extends Dbh{
		public function viewBook($id){
			$sql="select pdf_name from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				$row=$result->fetch_assoc();
				return $row;
			}
		}
	}
	$id= $_REQUEST['id'];
	$bk=new ViewFile();
	$data=$bk->viewBook($id);
	$filename = "books_pdfs/".$data['pdf_name']."";
?>
<!DOCTYPE html>
<html>
<head>
	<title>e book reader</title>
</head>
<body style="margin: 0px;">
	<div>
		<embed src="<?php echo $filename; ?>" type="application/pdf" width="100%" height="650px" />
	</div>
</body>
</html>


