<?php 
	include '../lib/Session.php' ;
	Session::checkSession();	
?>

<?php include '../config/config.php' ; ?>
<?php include '../lib/Database.php' ; ?>
<?php include '../helpers/Format.php' ; ?>

<?php 
	$db= new Database();
?>

<?php   //get this 'delpageid' from 'admin/page.php' page
  
    if (!isset($_GET['delpageid']) || $_GET['delpageid']==NULL ) {
        echo "<srcipt>window.location='index.php'; </srcipt>";
    }else {
        $delpageid=$_GET['delpageid'];  

        $delquery="DELETE FROM tbl_page WHERE id='$delpageid' ";
        $delData=$db->delete($delquery);
        if ($delData) {
            echo "<script>alert('Page Deleted Successfully.');</script>";
            echo "<srcipt>window.location='index.php'; </srcipt>";
        }else {
            echo "<script>alert('Page not Deleted.');</script>";
            echo "<srcipt>window.location='index.php'; </srcipt>";
        }
    }
?>