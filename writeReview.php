<?php
  include 'browse.php';
  class WriteReviews extends Dbh
	{
		public function write($id){
			$sql="select * from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $row=$result->fetch_assoc();
			}
		}
		public function getBookName($id){
			$sql="select * from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $row=$result->fetch_assoc();
			}
		}
	}
	$id= $_REQUEST['id'];
	$bk=new WriteReviews();
	$data=$bk->getBookName($id);
?>
<div style="width: 100%;background-color: lightgrey;height:598px;padding: 10px;">
	<div style="background-color: white;width: 98%;height: 100px;margin:0px auto;position: relative;">
		<?php
			echo '<h2 style="display:inline;bottom:10px;color:darkcyan;position:absolute;margin:5px;">Write your review:</h2>';
			echo '<div style="float:right;margin:10px;display:inline;">';
			echo '<img src="books_images/'.$data['image'].'" alt="book" width="80px" height="80px" style="float:right;" />';
			echo '<h3 style="float:right;margin-top:30px;margin-right:5px;">'.$data['book_name'].'</h3>';
			echo '</div>';
?>
	</div>
		<div style="background-color: white;width: 98%;height: 350px;margin:10px auto;position: relative;">
			<form method="post" action="reviewResults.php" style="margin: 10px;padding: 20px;">
				<label for="review">Your review:</label>
				<textarea id="review" class="form-control" name="review"></textarea>
				<input type="hidden" name="id" value="<?php echo $data['ISBN_no']; ?>">
				<center><input type="submit" name="submit" class="btn btn-primary" style="margin-top: 60px;width:50%;" value="Submit" /></center>
			</form>
<?php
			echo '</div>';
		?> 
	
</div>