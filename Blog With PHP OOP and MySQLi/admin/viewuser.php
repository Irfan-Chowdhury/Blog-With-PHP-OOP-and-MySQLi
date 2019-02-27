<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php   //get this 'viewuserid' from userlist.php
    if (!isset($_GET['viewuserid']) || $_GET['viewuserid']==NULL ) {
        echo "<srcipt>window.location='userlist.php'; </srcipt>";
    }else {
        $viewuserid=$_GET['viewuserid']; //get this 'viewuserid' from userlist.php
    }
?>

<div class="grid_10">		
    <div class="box round first grid">
        <h2>User Details</h2>

<?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "<srcipt>window.location='userlist.php'; </srcipt>";
    }
           
?>

    <div class="block">               

<?php
    $query ="SELECT * FROM tbl_user WHERE id='$viewuserid' ";
    $getuser= $db->select($query);
    if ($getuser) {
        while ($result=$getuser->fetch_assoc()) {
?>
    <form action="" method="post" >
        <table class="form">
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input type="text" readonly value="<?php echo $result['name']; ?>" class="medium" />
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Username</label>
                </td>
                <td>
                    <input type="text" readonly value="<?php echo $result['username']; ?>" class="medium" />
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
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Details</label>
                </td>
                <td>
                    <textarea class="tinymce"><?php echo $result['details']; ?> </textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="OK" />
                </td>
            </tr>
        </table>
        </form>                               
       
        <?php   } } ?>  <!-- end if &  while loop-65 -->
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



