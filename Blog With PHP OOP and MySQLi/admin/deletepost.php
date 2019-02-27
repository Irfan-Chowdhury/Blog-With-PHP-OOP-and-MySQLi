<?php 
	include '../lib/Session.php' ;
	Session::checkSession();	
?>

<?php include '../config/config.php' ; ?>
<?php include '../lib/Database.php' ; ?>
 <?php // include '../helpers/Format.php' ; ?><!-- no need -->

<?php 
	$db= new Database();
?>

<?php   
  
    if (!isset($_GET['delpostid']) || $_GET['delpostid']==NULL ) {
        echo "<srcipt>window.location='postlist.php'; </srcipt>";
    }else {
        $delpostid=$_GET['delpostid'];  

        $query="SELECT * from tbl_post WHERE id='$delpostid' ";
        $getData =$db->select($query);
        if ($getData) {
            while ($delimg= $getData->fetch_assoc()) {
                $dellink =$delimg['image'];
                unlink($dellink);
            }
        }

        $delquery="DELETE FROM tbl_post WHERE id='$delpostid' ";
        $delData=$db->delete($delquery);
        if ($delData) {
            echo "<script>alert('Data Deleted Successfully.');</script>";
            echo "<srcipt>window.location='postlist.php'; </srcipt>";
        }else {
            echo "<script>alert('Data not Deleted.');</script>";
            echo "<srcipt>window.location='postlist.php'; </srcipt>";
        }
    }
?>