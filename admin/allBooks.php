<?php 
include '../dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>all book</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style type="text/css">
	  		.container {
	  			margin: 50px auto;
	  			width: 90%;
	  			background-color: Lavender;
	  		}
	  		.container2 {
	  			margin: 50px;
	  		}
	  		div.left {
	  			display: inline-block;
	  		}
	  		div.right {
	  			display: inline-block;
	  			top: 0px;
	  			position: absolute;
	  			right: 50px;
	  		}
	  		.check {
	  			position: relative;
	  			width: 90%;
	  			margin: 2px auto;
	  		}
	  </style>
</head>
<body>
	<div class="container">
		<center><h2>All Books</h2></center>
			<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
			
						<tr>
						<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
						<TD style="color:darkgreen" WIDTH='20%'><b><u>category</u></b></TD>
							<TD style="color:darkgreen" WIDTH='10%'><b><u>Image</u></b></TD>	
						<TD style="color:darkgreen" WIDTH='20%'><b><u>Name</u></b></TD>
						<TD style="color:darkgreen" WIDTH='25%'><b><u>Author</u></b></TD>
						<TD style="color:darkgreen" WIDTH='10%'><b><u>Isbn No</u></b></TD>			
					
						<TD style="color:darkgreen" WIDTH='25%'><b><u>Delete</u></b></TD>							
						</tr>
						<?php
						

  class AllBooks extends Dbh
	{
		protected function getAllBooks($sql){
			
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					
					echo '<div id="item">';
					$data[]=$row;
            echo '</div>';
				}
				return $data;
			}
		}
		public function showBooks(){
			$count=1;
			$sql="select * from books";
			$datas=$this->getAllBooks($sql);

			//echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">'.$cat.'</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			//echo '<div style="margin: 20px;">';
			foreach ($datas as $data) {
	
			echo '<tr>
										<td> '.$count.'
										<td>'.$data['category'].'
										<td><img src="../books_images/'.$data['image'].'" width="150px" height="150px"/>
										<td>'.$data['book_name'].'
										<td>'.$data['author'].'
										<td>'.$data['ISBN_no'].'
										
										<td><a href="delete_book.php?sid='.$data['book_name'].'"><center><img src="../images/drop.png"  width="40px" height=40px" ></center></a>
																			
									</tr>';
									$count++;
	

			
			echo '</div>';
			
		//echo '</div>';
		
	
       }
	}
	
		
	
  }
	$catBks=new AllBooks();
	$catBks->showBooks();
						
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
		

</body>
</html>
<script>
$(document).ready(function()
{
	$('.delete').click(function(){
		var data = $(this).attr("img")
		if(confirm ("Are you sure you want to delete this book?"))
		{
			window.location = "allBooks.php?delete=1&data="+data+"";
			
		}
		else
		{
			return false;
		}
			});
});
</script>