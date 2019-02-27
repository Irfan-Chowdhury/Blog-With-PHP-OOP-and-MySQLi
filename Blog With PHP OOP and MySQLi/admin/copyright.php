<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock">

<?php  //for update 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $copyright  =$fm->validation($_POST['copyright']);
        
        $copyright  =mysqli_real_escape_string($db->link, $_POST['copyright']);
        
        if ($copyright=="" ) {
            echo "<span class='error'>Feild Must not be empty..</span>";      
        }else {
            $query="UPDATE tbl_footer
                    SET
                    copyright    = '$copyright'                  
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
    $query="SELECT *FROM tbl_footer WHERE id='1' ";
    $footer_copyright= $db->select($query);
    if ($footer_copyright) {
        while ($result=$footer_copyright->fetch_assoc()) {            
?>                 
                 <form action="copyright.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['copyright']; ?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
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