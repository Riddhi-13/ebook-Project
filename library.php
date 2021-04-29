<?php
	include 'browse.php';	
	?>
<head>
<style>
#container{
	
	width:100%;
	
}
.card{
		width:15rem;
		min-height:100px;
		margin:20px 20px;
}
</style>
</head>
<body>
<div id="container" class="py-5">
	<div class="row mt-5 ml-5">
	<?php

	class LibraryBooks extends Dbh
	{
		protected function getAllBooks($sql){
			
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
				return $data;
			}else{
				return null;
			}
		}
		public function deleteBookFromLibrary(){
			if($_GET["action"] == "delete")
			{
				$bkId=$_GET["id"];
				$uid=$_SESSION['id'];
				$sqld = "DELETE FROM `library` WHERE isbn_no=".$bkId." and userid=".$uid."; ";
				$result2=$this->connect()->query($sqld);		
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="library.php"</script>';					
			}
		}
		public function showBooks(){
			$uid=$_SESSION["id"];
			$sql="select * from books where ISBN_no in (select isbn_no from library where userid=".$uid.");";
			
			$datas=$this->getAllBooks($sql);
			if($datas==null){
				echo '<p style="margin:50px auto;font-size: 35px;">No book in library</p>';
			}
			else{
				foreach ($datas as $data) {
	?>
				<div class="col-md-4 mt-3">
				<div class="card">
				  <img class="card-img-top" src="books_images/<?=$data['image']?>" width="220px" height="290px">
				  <div class="card-body">
					<h5 class="card-title"><?php echo $data['book_name'];?></h5>
					<a href="downloadlogic.php?file_id=<?php echo $data['ISBN_no']; ?>" class="btn btn-warning">Download</a>
					<a href="library.php?action=delete&id=<?php echo $data['ISBN_no']; ?>" class="btn btn-danger">Remove</a>
					
				  </div>
				 <a href="viewPdf.php?id=<?php echo $data['ISBN_no']; ?>" class="btn btn-primary" >Read Now</a> 
				</div>
				</div>
				
					<?php
			}
		}
	}
}
	$libBks=new LibraryBooks();
	if(isset($_GET["action"]))
		$libBks->deleteBookFromLibrary();
	else
		$libBks->showBooks();
	?>
	</div>
	</div>

</body>