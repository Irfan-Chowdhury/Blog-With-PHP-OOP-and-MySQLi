<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
        
        <div class="grid_10">		
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block"> 

<?php  //for update 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $facebook  =$fm->validation($_POST['facebook']);
        $twitter =$fm->validation($_POST['twitter']);
        $linkedin =$fm->validation($_POST['linkedin']);
        $googleplus =$fm->validation($_POST['googleplus']);

        $facebook  =mysqli_real_escape_string($db->link, $_POST['facebook']);
        $twitter =mysqli_real_escape_string($db->link, $_POST['twitter']);
        $linkedin  =mysqli_real_escape_string($db->link, $_POST['linkedin']);
        $googleplus  =mysqli_real_escape_string($db->link, $_POST['googleplus']);

        if ($facebook=="" || $twitter=="" || $linkedin=="" || $googleplus=="") {
            echo "<span class='error'>Feild Must not be empty..</span>";      
        }else {
            $query="UPDATE tbl_social
                    SET
                    facebook    = '$facebook',
                    twitter     = '$twitter',
                    linkedin    ='$linkedin',
                    googleplus  ='$googleplus'
                    WHERE id= '1' ";

                    $updated_row=$db->update($query);
                    if($updated_row){
                        echo "<span class='success'>Data Updated Successfuly.</span>";
                    }else{
                        echo "<span class='error'>Data Not Updated !</span>";
                    }
        }
    }
?>  

<?php //read data from database
    $query="SELECT *FROM tbl_social WHERE id='1' ";
    $socialmedia= $db->select($query);
    if ($socialmedia) {
        while ($result=$socialmedia->fetch_assoc()) {
?>                              
                 <form action="social.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="<?php echo $result['facebook']; ?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="<?php echo $result['twitter']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="<?php echo $result['linkedin']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="<?php echo $result['googleplus']; ?>" class="medium" />
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
<?php } } ?>                    
                </div>
            </div>
        </div>
<?php include 'inc/footer.php'; ?>
