<?php
	include 'dbh.inc.php';
?>
<div>
<?php 	
	if(isset($_POST['submit-search'])){
		$search = $_POST['search'];
		$sql="SELECT * FROM books WHERE book_name LIKE '%$search%' OR author LIKE '%$search%'"; 
		class Search extends Dbh
	{
		protected function getAllBooks($sql){
			          
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
				return $data;
			}
		}
		public function showSearchedBooks($sql){
			$datas=$this->getAllBooks($sql);
			foreach ($datas as $data) {
			//echo "<li><a class='dropdown-item' href='displayBooks.php?category=".$data['category']."'>".$data['category']."</a></li>";
			// echo "<h3>".$data['author']."</<h3>
					  // <h3>".$data['book_name']."</h3>";
					
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
    	echo '<button class="btn btn-primary" style="display: inline; margin: 10px;">Start reading</button><button class="btn btn-primary" style="display: inline;margin: 10px;">Add to library</button><button class="btn btn-primary" style="display: inline;margin: 10px;">Download</button></div>';
    	echo '</div>';
		  
			}
		}
	}

	$cat=new Search();
	$cat->showSearchedBooks($sql);
	}
	?>
</div>
