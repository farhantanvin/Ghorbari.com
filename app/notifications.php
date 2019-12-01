<?php
?>
<html>
	<head>
		<title>Notifications</title>
	</head>

	<body bgcolor=" #00303d " height="768" width="1366">
		<font face="arial">
			<?php
				include 'user_profile_header.php';
			?>
			
			</br>
			
			<table align="center"> 
				<tr>
										<td width="250" align="center">
						<fieldset>
							<legend></legend>
							<p><img src="image/user.png" height="100" width="100"/><p>
							<p align="center"><b><font color="white" size="4">User<font></b></p>
							<hr>
							<p><img src="image/username.png" height="22" width="20">&nbsp <a href="user_profile.php"><b><font color="white" size="4">Profile</font></b></a></p>
							<hr>
							<p><img src="image/user_post.png" height="22" width="17">&nbsp <a href="rent_buy_post.php"><b><font color="white" size="4">Buy/Rent Post</font></b><br/></button></b></a></p>
							<hr>
							<p><img src="image/saved_home.png" height="20" width="20">&nbsp <a href="saved_homes.php"><b><font color="white" size="">Saved Homes</font></b></a></p>
							<hr>
							<p><img src="image/user_post.png" height="22" width="17">&nbsp <a href="delete_post.php"><b><font color="white" size="4">Delete Post</font></b></a></p>
							<hr>
							<p><img src="image/notifications.png" height="22" width="20">&nbsp <a href="notifications.php"><b><font color="white" size="4">Notifications</font></b></a></p>
							<hr>
						</fieldset>
					</td>
					
					<td width="800" align="left">
						<fieldset>
							<legend></legend>
							<p align="center"><font color="FF7D00" size="6"><b>Notifications</b></font></p>
							<br/><br/><br/><br/><br/><br/>
							<table height="120" width="500">
								
								<tr height="50">
									<td bgcolor="white">
										<p align="left">
											<font color="black" size="4">
												Your buy post has been approved by admin.
											</font>
										</p>
									</td>
								</tr>
								<tr height="1">
									<td> <br/> </td>
								</tr>
								<tr height="50">
									<td bgcolor="white">
										<p align="left">
											<font color="black" size="4">
												You have received a request from user.
											</font>
										</p>
									</td>
								</tr>
								<tr height="1">
									<td> <br/> </td>
								</tr>
								<tr height="50">
									<td bgcolor="white">
										<p align="left">
											<font color="black" size="4">
												Your rent post has been approved by admin.
											</font>
										</p>
									</td>
								</tr>
								
								<br/>
							</table>
							
							<br/><br/><br/><br/><br/><br/>
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