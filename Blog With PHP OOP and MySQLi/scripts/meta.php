<?php
		if(isset($_GET['pageid'])){
			$pagetitleid = $_GET['pageid'];
			$query="SELECT *FROM tbl_page WHERE id='$pagetitleid'  ";
			$pages= $db->select($query);
			if ($pages) {
				while ($result=$pages->fetch_assoc()) { ?>
					<title><?php echo $result['name']; ?> -<?php echo TITLE ; ?></title>
		
	<?php } } } elseif(isset($_GET['id'])){
			$postid = $_GET['id'];
			$query="SELECT *FROM tbl_post WHERE id='$postid'  ";
			$posts= $db->select($query);
			if ($posts) {
				while ($result=$posts->fetch_assoc()) { ?>
					<title><?php echo $result['title']; ?> -<?php echo TITLE ; ?></title>
		
	<?php } } } else { ?>
			<title><?php echo $fm->title(); ?> -<?php echo TITLE ; ?></title>
	<?php } ?>
	
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">

<!-- for Meta tag -->
<?php
	if(isset($_GET['id'])){
		$Keywords = $_GET['id'];
		$query="SELECT *FROM tbl_post WHERE id='$Keywords'";
		$Keywords=$db->select($query);
		if($Keywords){
			while ($result=$Keywords->fetch_assoc()) { ?>
				<meta name="keywords" content="blog,cms blog">
<?php } } } else { ?>
		<meta name="keywords" content="<?php echo KEYWORDS; ?>">
<?php } ?>
<!-- Meta Tag End -->

	<meta name="author" content="Delowar">