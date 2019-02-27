<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php   //get this 'editsliderid' from 'sliderlist' page
  
    if (!isset($_GET['editsliderid']) || $_GET['editsliderid']==NULL ) {
        echo "<srcipt>window.location='sliderlist.php'; </srcipt>";
    }else {
        $sliderid=$_GET['editsliderid'];  //here catch the id from sliderlist
    }
?>

<div class="grid_10">		
    <div class="box round first grid">
        <h2>Update Slider</h2>

<?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title  =mysqli_real_escape_string($db->link, $_POST['title']);
               
        $permited=array('jpg','jpeg','png','gif');
        $file_name=$_FILES['image']['name'];
        $file_size=$_FILES['image']['size'];
        $file_temp=$_FILES['image']['tmp_name'];

        $div = explode('.',$file_name);
        $file_ext= strtolower(end($div));
        $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "upload/slider/".$unique_image;

        if ($title=="") {
            echo "<span class='error'>Feild Must not be empty..</span>";      
        }else {      //if need to slider change
            if (!empty($file_name)) {
                if ($file_size > 1048567) {
                    echo "<span class='error'>Image Size Should be less than 1MB </span>";
                
                }elseif (in_array($file_ext,$permited)===false) {
                    echo "<span class='error'>You can upload only : ".implode(', ', $permited)." formate. </span>";
                
                }else{
                    move_uploaded_file($file_temp,$upload_image);
                                            
                    $query="UPDATE tbl_slider  
                            SET
                            title   = '$title',
                            image   = '$upload_image'
                            WHERE id= '$sliderid' ";  //if need to slider change

                    $updated_row=$db->update($query);
                    if($updated_row){
                        echo "<span class='success'>Slider Updated Successfuly.</span>";
                    }else{
                        echo "<span class='error'>Slider Not Updated !</span>";
                    }
                }
            }else {
                $query="UPDATE tbl_slider
                            SET
                            title   = '$title'
                            WHERE id= '$sliderid' ";

                    $updated_row=$db->update($query);
                    if($updated_row){
                        echo "<span class='success'>Slider Updated Successfuly.</span>";
                    }else{
                        echo "<span class='error'>Slider Updated !</span>";
                    }
                }
        }
    }
?>

    <div class="block">               

<?php
    $query ="SELECT * FROM tbl_slider WHERE id='$sliderid' ";
    $getslider= $db->select($query);
    while ($sliderresult=$getslider->fetch_assoc()) {
?>
    <form action="" method="post" enctype="multipart/form-data">
        <table class="form">
            <tr>
                <td>
                    <label>Title</label>
                </td>
                <td>
                    <input type="text" name="title" value="<?php echo $sliderresult['title']; ?>" class="medium" />
                </td>
            </tr>
             
            <tr>
                <td>
                    <label>Upload Image</label>
                </td>
                <td>
                    <img src="<?php echo $sliderresult['image']; ?>" alt="" height="200px" width="250px"><br>        
                    <input type="file" name="image"  />
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Update" />
                </td>
            </tr>
        </table>
        </form>                               
       
        <?php  } ?>  <!-- end while loop-65 -->
    </div>
</div>
</div>


<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
<!-- Load TinyMCE -->

 <?php include 'inc/footer.php'; ?>



