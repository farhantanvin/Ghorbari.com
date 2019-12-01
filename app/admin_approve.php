<?php
?>
<html>
	<head>
		<title>Approve Post</title>
	</head>

	<body bgcolor=" #00303d " height="768" width="1366">
		<font face="arial">
			<?php
				include 'admin_profile_header.php';
			?>
			</br>
			<table align="center">
			<br/>
				<tr>
					<td width="250" align="center">
						<fieldset>
							<legend></legend>
							<p><img src="image/user.png" height="100" width="100"/><p>
							<p align="center"><b><font color="white" size="4">Admin<font></b></p>
							<hr>
							<p><img src="image/username.png" height="22" width="20">&nbsp <a href="admin_profile.php"><b><font color="white" size="4">Profile</font></b></a></p>
							<hr>
							<p><img src="image/user_post.png" height="22" width="17">&nbsp <a href="admin_approved_post.php"><b><font color="white" size="4">Approved Post</font></b><br/></button></b></a></p>
							<hr>
							<p><img src="image/remove_user.png" height="20" width="20">&nbsp <a href="admin_ban_user.php"><b><font color="white" size="">Ban User</font></b></a></p>
							<hr>
							<p><img src="image/username.png" height="22" width="20">&nbsp <a href="admin_add.php"><b><font color="white" size="4">Add Admin</font></b></a></p>
							<hr>
							<p><img src="image/user_post.png" height="22" width="17">&nbsp <a href="admin_delete_post.php"><b><font color="white" size="4">Delete Post</font></b></a></p>
							<hr>
							<p><img src="image/notifications.png" height="22" width="20">&nbsp <a href="admin_notifications.php"><b><font color="white" size="4">Notifications</font></b></a></p>
							<hr>
						</fieldset>
					</td>
					
					<td width="800" align="center">
						<fieldset>
							<legend></legend>
							<p><font color="FF7D00" size="6"><b>Approve Post</b></font></p>
							<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
							<p><font color="white" size="6"><b>Post is approved</b></font></p>
							<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
						</fieldset>	
					</td>
				</tr>
			</table>
			<br/>
			<?php 
				include 'footer.php';
			?>
		</font>
	</body>
</html>