<?php
	include 'browse.php';



class CatBooks extends Dbh
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
			
			
			$sql="select * from books ORDER BY book_name";
			
			$datas=$this->getAllBooks($sql);
			

			echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">Book Name</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			echo '<div style="margin: 20px;">';
			
			foreach ($datas as $data) {
				?>

			<div style="padding: 20px; height: 370px;margin-left: 100px;margin-right: 100px;margin-top: 30px;box-shadow: 2px 4px 12px #888888;">
	<?php
		echo '<img src="books_images/'.$data['image'].'" alt="book" width="220px" height="290px" style="margin-left:50px;display: inline;float: left;" />';
		echo '';
  		echo '<div style="display: inline;float:left;margin-left: 20px;width: 72%;"><h4 style="font-weight:bold;">'.$data['book_name'].'</h4>';
  		echo '<p style="font-size: 15px;"><b>Author:</b> '.$data['author'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Edition:</b> '.$data['edition'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Year of publication:</b> '.$data['year_of_publication'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Publisher Name:</b> '.$data['publisher_name'].'</p>';
    	echo'<p style="font-size: 15px;">'.$data['description'].'</p>';
    	echo '<a href="viewPdf.php?id='.$data['ISBN_no'].'"><button class="btn btn-primary" style="display: inline; margin: 10px;">Start reading</button></a>
		<a href="add_to_library.php?id='.$data['ISBN_no'].'"><button  class="btn btn-primary" style="display: inline;margin: 10px;" name="add_to_library">Add to library</button></a>
		<a href="downloadlogic.php?file_id='.$data['ISBN_no'].'"><button class="btn btn-primary" style="display: inline;margin: 10px;">Download</button></a>
		<a href="viewReviews.php?id='.$data['ISBN_no'].'"><button class="btn btn-primary" style="display: inline;margin: 10px;">Reviews</button></a></div>';
    	echo '</div>';

			}
		}
	}
	$catBks=new CatBooks();
	$catBks->showBooks();
	echo "</div>";
?>


