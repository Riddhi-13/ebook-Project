<?php
  include 'browse.php';
  class Reviews extends Dbh
	{
		public function getBookDetails($id){
			$sql="select * from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $result->fetch_assoc();
			}
		}
		public function viewReviews($id){
			$sql="select * from reviews where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$rv[]=$row;
				}
				return $rv;
			}
			else
				return false;
		}
		public function getReaderName($id){
			$sql="select * from reader where id=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $result->fetch_assoc();
			}
		}
		public function isReviewPresent($id){
			$readerId=$_SESSION['id'];
			$sql="select * from reviews where id=".$readerId." and ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return true;
			}
			else
				return false;
		}/*
		public function isAdmin(){
			$sql="select email from reader where id=".$_SESSION["id"].";";
			$res=$this->connect()->query($sql);
			$nmrows=$res->num_rows;
			if($nmrows>0){
				$un=$res->fetch_assoc();
			}
			$sql2='select * from reader where id in(select id from reader where email in("priyamajalikar@gmail.com","tanvidessai@gmail.com","doisydias@gmail.com","riddhidegvekar@gmail.com"));';
			$result=$this->connect()->query($sql2);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$admins[]=$row;
				}
				foreach ($admins as $admin => $value) {
					if($value['email']==$un['email'])
						return true;
				}
			}
			return false;
		} */
	}
	$id= $_REQUEST['id'];
	$bk=new Reviews();
	$data=$bk->getBookDetails($id);
	$readerReviews=$bk->viewReviews($id);
?>
<div style="padding: 20px; min-height: 570px;margin-bottom:10px;margin-left: 100px;margin-right: 100px;margin-top: 30px;box-shadow: 2px 4px 12px #888888;background-color:Linen;">
	
	<?php
		echo '<img src="books_images/'.$data['image'].'" alt="book" width="150px" height="200px" style="border: 1px solid;margin-left:4px;display: inline;" />'; 
		echo '<div style="display: inline;padding: 5px;position:absolute;margin-left: 10px;margin-top: 2px;background-color: snow;border-radius:15px;width: 70%;height: 200px;">';
		echo '<h3 style="color: MediumSeaGreen;margin-top: 2px;">'.$data['book_name'].'</h3>';
		echo '<div style="font-weight:bold;">Author:'.$data['author'].'</div><br><div style="font-size:smaller;">Description:'.$data['description'].'</div><br></div>';
		echo '<div style="margin-left: 8px;width: 81%;margin-top: 0px;position: absolute;min-height:400px;">';
		echo '<h4 style="margin: 10px;">READERS REVIEWS</h4><hr>';
		if(($bk->isReviewPresent($id))==false)
			echo '<center><a href="writeReview.php?id='.$data['ISBN_no'].'"><button class="btn btn-primary" style="display: inline;margin-top: 10px;width:50%;">Write a review</button></a></center>';
		if($readerReviews!=false){
			foreach ($readerReviews as $revs) {
				$name=$bk->getReaderName($revs['id']);
				echo '<div style="background-color: MediumAquaMarine;margin-top:10px;padding:10px;border-radius: 15px;">';
				echo '<div style="font-weight:bold;">'.$name['name'].'</div><br>';
				echo '<div>'.$revs['review'].'</div>';
				echo '</div>';
			}
		}
		echo '</div>';
	?>
</div>