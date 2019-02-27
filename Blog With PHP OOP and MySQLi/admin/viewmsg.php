<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<?php   //get this 'viewmsgid' from inbox.php
    if (!isset($_GET['viewmsgid']) || $_GET['viewmsgid']==NULL ) {
        echo "<srcipt>window.location='inbox.php'; </srcipt>";
    }else {
        $id=$_GET['viewmsgid']; //get this 'viewmsgid' from inbox.php
    }
?>

<div class="grid_10">		
    <div class="box round first grid">
        <h2>View Message</h2>

    <?php  
        if($_SERVER['REQUEST_METHOD']=='POST'){
            echo "<srcipt>window.location='inbox.php'; </srcipt>"; 
            //header("Location:inbox.php");          
        }
    ?>

        <div class="block">               
            <form action="" method="post">
            <?php
                $query="select *from tbl_contact where id='$id' ";
                $msg= $db->select($query);
                if ($msg) {
                    while ($result=$msg->fetch_assoc()) {
			?>
            <table class="form">
                
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['firstname'].' '.$result['lastname']; ?>" class="medium" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $result['email']; ?>" class="medium" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Date</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $fm->formatDate($result['date']); ?>" class="medium" />
                    </td>
                </tr>
                
            
                
                <tr>
                    <td>
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="message">
                                <?php echo $result['message']; ?>
                        </textarea>
                    </td>
                </tr>
                

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="OK" />
                    </td>
                </tr>
            </table>
            <?php } }?>
            </form>
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



