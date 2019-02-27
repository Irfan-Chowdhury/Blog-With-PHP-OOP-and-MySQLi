<?php include 'inc/header.php' ; ?>
<?php   //get this 'pageid' from 'header.php' page
    if (!isset($_GET['pageid']) || $_GET['pageid']==NULL ) {
		header("Location:404.php");
    }else {
        $pageid=$_GET['pageid'];  //here catch the id from header.php
    }
?>
<?php 
    $pagequery="SELECT *FROM tbl_page  WHERE id='$pageid' ";
    $pagedetails= $db->select($pagequery);
    if ($pagedetails) {
        while ($result=$pagedetails->fetch_assoc()) {
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">				
				<h2><?php echo $result['name']; ?></h2>
				<?php echo $result['body']; ?>		
	</div>

</div>
<?php } }else {
	header("Location:404.php");
} ?>
		<?php include 'inc/sidebar.php';?>
		<?php include 'inc/footer.php';?>