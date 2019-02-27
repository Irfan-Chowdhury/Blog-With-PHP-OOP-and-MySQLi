
<?php include 'inc/header.php' ; ?>
<?php include 'inc/slider.php' ; ?>

<?php 
	// $db= new Database();  //transfer into header.php
	// $fm= new Format();
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

<!-- Pagination -->
		<?php
			$per_page=3;  //3 post in per page 
			if(isset($_GET["page"])){
				$page=$_GET["page"];
			}else {
				$page=1;
			}
			$start_form=($page-1)* $per_page; //in database row index=1 means 0, index=2 means=1 so that's why if current page=1, database_row strat= (1-1)*3= 0 that's means starting from 1st no row. 
 
			
			$query ="select * from tbl_post order by id desc limit $start_form, $per_page ";  //if current pages=2, start from=(2-1)*3 = 3 thats means post in database start from 4th no row.
			$post= $db->select($query);
			if ($post) {
				while ($result = $post->fetch_assoc()) {

			?>

<!-- Pagination End-->



<!-- for show post -->
				<div class="samepost clear">
					<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?> </a></h2>
					<h4><?php echo $fm->formatDate($result['date']) ; ?>, By <a href="#"><?php echo $result['author']; ?></a></h4>
					<a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="post image" style="width:200px; height:150px"/></a>
					<p>
						<?php echo $fm->textShorten($result['body']); ?>
					</p>
					<div class="readmore clear">
						<a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
					</div>
				</div>

		<?php } ?>  
<!-- show post end	-->


<!-- Pagination -->
		
		<?php
		$query ="select *from tbl_post";
		$result =$db->select($query);
		$total_rows=mysqli_num_rows($result);
		$total_pages= ceil($total_rows/$per_page); //ceil means if total_rows=7 & per_page=3  then toal_page= (7/3)=2.3 = 3 pages 
		
		echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>"; 
		for ($i=1; $i<=$total_pages; $i++) { 
			echo "<a href='index.php?page=".$i."'>".$i."</a>";
		}
		echo "<a href='index.php?page=$total_pages'>".'Last Page'."</a></span>";
		?>
					
				
 <!-- Pagination End -->


		<?php	}   //end if Condition
				else {
				header("Location:404.php");
				}
		?>				
		
		</div>
		
		<?php include 'inc/sidebar.php';?>
		<?php include 'inc/footer.php';?>

	