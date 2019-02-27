<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<!-- Inbox Box -->
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
	<!-- for Seen -->
		<?php
			if (isset($_GET['seenid'])) {
				$seenid =$_GET['seenid'];

				$query ="UPDATE tbl_contact
				SET
				status='1'
				WHERE id='$seenid' ";
		
				$update_row = $db->update($query);
				if($update_row){
					echo "<span class='success'>Message Sent in the Seen Box</span>";
				}else {
					echo "<span class='error'>Something Wrong ! </span>";
				}
			}
		?>
	<!-- Seen End	 -->

	<!-- for unseen -->
	    <?php
			if (isset($_GET['unseenid'])) {
				$unseenid =$_GET['unseenid'];

				$query ="UPDATE tbl_contact
				SET
				status='0'
				WHERE id='$unseenid' ";
		
				$update_row = $db->update($query);
				if($update_row){
					echo "<span class='success'>Message Sent to Inbox</span>";
				}else {
					echo "<span class='error'>Something Wrong ! </span>";
				}
			}
		?>					
	<!-- unseen End-->
               
			    <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No</th>							
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query="select *from tbl_contact where status='0' order by id desc";
						$msg= $db->select($query);
						if ($msg) {
							$i=0;
							while ($result=$msg->fetch_assoc()) {
								$i++;							
					?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $fm->textShorten($result['message'] , 30); ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td>
								<a href="viewmsg.php?viewmsgid=<?php echo $result['id']; ?>">View</a> || 
								<a href="replymsg.php?replymsgid=<?php echo $result['id']; ?>">Reply</a> ||
								<a onclick="return confirm('Are you sure to move this Message !'); " href="?seenid=<?php echo $result['id']; ?>">Seen</a>
							</td>
						</tr>
						<?php } } ?>	
					</tbody>
				</table>
               </div>
            </div>


<!-- Seen Message Box -->

		<div class="box round first grid">

                <h2>Seen Message</h2>

	<!-- For Delete -->
			<?php 
				if (isset($_GET['delid'])) {
					$delid=$_GET['delid'];  

					$delquery="DELETE FROM tbl_contact WHERE id='$delid' ";
					$delData=$db->delete($delquery);
					if ($delData) {
						echo "<span class='success'>Message Deleted Successfully</span>";
					}else {
						echo "<span class='error'>Message Not Deleted !</span>";
					}
				}
			?>
	<!-- Delete End-->
                <div class="block">        
				<table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No</th>							
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query="select *from tbl_contact where status='1' order by id desc";
						$msg= $db->select($query);
						if ($msg) {
							$i=0;
							while ($result=$msg->fetch_assoc()) {
								$i++;							
					?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $fm->textShorten($result['message'] , 30); ?></td>
							<td><?php echo $fm->formatDate($result['date']); ?></td>
							<td>
								<a onclick="return confirm('Are you sure to move this in Inbox'); " href="?unseenid=<?php echo $result['id']; ?>">Unseen</a> || 
								<a onclick="return confirm('Are you sure to Delete !'); " href="?delid=<?php echo $result['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php } } ?>	
					</tbody>
				</table>
               </div>
            </div>
        </div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>

<?php include 'inc/footer.php'; ?>