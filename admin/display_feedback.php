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
		<center><h2>All FeedBacks</h2></center>
			<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
			
						<tr>
						<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
						<TD style="color:darkgreen" WIDTH='20%'><b><u>Name</u></b></TD>
						<TD style="color:darkgreen" WIDTH='10%'><b><u>Email</u></b></TD>	
						<TD style="color:darkgreen" WIDTH='20%'><b><u>Subject</u></b></TD>
						<TD style="color:darkgreen" WIDTH='25%'><b><u>FeedBacks</u></b></TD>						
						</tr>
						<?php
						

  class AllComments extends Dbh
	{
		protected function getAllComments($sql){
			
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
		public function showComments(){
			$count=1;
			$sql="select * from user_queries";
			$datas=$this->getAllComments($sql);

			//echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">'.$cat.'</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			//echo '<div style="margin: 20px;">';
			foreach ($datas as $data) {
	
			echo '<tr>
										<td> '.$count.'
										<td>'.$data['name'].'
										<td>'.$data['email'].'
										<td>'.$data['subject'].'
										<td>'.$data['msg'].'
																	
									</tr>';
									$count++;
	

			
			echo '</div>';
			
		//echo '</div>';
		
	
       }
	}
	
		
	
  }
	$catBks=new AllComments();
	$catBks->showComments();
						
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
		

</body>
</html>
