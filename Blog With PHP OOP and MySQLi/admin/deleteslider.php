<?php 
	include '../lib/Session.php' ;
	Session::checkSession();	
?>

<?php include '../config/config.php' ; ?>
<?php include '../lib/Database.php' ; ?>

<?php 
	$db= new Database();
?>

<?php   
  
    if (!isset($_GET['delsliderid']) || $_GET['delsliderid']==NULL ) {
        echo "<srcipt>window.location='sliderlist.php'; </srcipt>";
    }else {
        $sliderid=$_GET['delsliderid'];  

        $query="SELECT * from tbl_slider WHERE id='$sliderid' ";
        $getData =$db->select($query);
        if ($getData) {
            while ($delimg= $getData->fetch_assoc()) {
                $dellink =$delimg['image'];
                unlink($dellink);
            }
        }

        $delquery="DELETE FROM tbl_slider WHERE id='$sliderid' ";
        $delData=$db->delete($delquery);
        if ($delData) {
            echo "<script>alert('Slider Deleted Successfully.');</script>";
            echo "<srcipt>window.location='sliderlist.php'; </srcipt>";
        }else {
            echo "<script>alert('Slider not Deleted.');</script>";
            echo "<srcipt>window.location='sliderlist.php'; </srcipt>";
        }
    }
?>