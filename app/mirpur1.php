<?php
?>
<html>
	<head>
		<title>Mirpur</title>
	</head>
	
	<body bgcolor="#00303d" height="768" width="1366">
		<font face="arial">
			<?php
				include 'header.php';
			?>
			<br/>
			<fieldset>
				<legend></legend>
				<table  align="center" width="1000">
					<tr>
						<td rowspan="4" align="center"><p><img src="image/taka.png" ><b><font color="white" size="4">: 21000 Taka</font></b></p></td>
					</tr>
					<tr>
						<td align="center"><p><b><font color="white" size="3">Type: Rent</font></b></p></td>
						<td rowspan="4" align="center"><a href="home.php"><button><b><font color="black" size="5">Save</font></b></button></a></td>
					</tr>
					<tr>
						<td align="center"><p><b><font color="white" size="3">Category: Residential</font></b></p></td>
					</tr>
					<tr>
						<td align="center"><p><b><font color="white" size="3">Address: Flat# A/1, House# 9, Road# 5, Section# 6, Mirpur</font></b></p></td>
						
					</tr>
				</table>
			</fieldset>
			<br/>
			<table align="center" width="1000">
				<tr>
					<td width="600">
						<p align="center"><img src="image/flat/mirpur1.png" height="250" width="500"></p>
						<br/>
						<p align="center"><b><font color="FF7D00" size="6">Details</font></b></p>
						<p>&nbsp <img src="image/taka.png"><b><font color="white" size="4">: 21000 Taka</font></b></p>
						<p>&nbsp <img src="image/type.png" height="20" width="20"><b><font color="white" size="4">&nbsp Type: Rent</font></b></p>
						<p>&nbsp <img src="image/category.png" height="20" width="20"><b><font color="white" size="4">&nbsp Category: Residential</font></b></p>
						<p>&nbsp <img src="image/size.png" height="20" width="20"><b><font color="white" size="4">&nbsp Size: 1200 Square Feet</font></b></p>
						<p>&nbsp <img src="image/bed.png" height="20" width="20"><b><font color="white" size="4">&nbsp Bed: 3</font></b></p>
						<p>&nbsp <img src="image/bath.png" height="20" width="20"><b><font color="white" size="4">&nbsp Bath: 2</font></b></p>
						<p>&nbsp <img src="image/belcony.png" height="20" width="20"><b><font color="white" size="4">&nbsp Balcony: 2</font></b></p>
						<p>&nbsp <img src="image/address.png" height="20" width="15"><b><font color="white" size="4">&nbsp Address: Flat# A/1, House# 9, Road# 5, Section# 6, Mirpur</font></b></p>
					</td>
					
					<td>
						<fieldset>
							<legend></legend>
								<p align="center"><b><font color="white" size="5">Contact With Owner<font></b></p>
								<p><img src="image/user.png" height="20" width="20" > : <b><font color="white" size="4">01711223344<font></b></p>
								<p><b><font color="white" size="4">Hi,</font></b></p>
								<p></p>
								<p>
									<b><font color="white" size="4">My name is</font></b> : <input type="text" name="name" placeholder="Enter Your Name" size="30"/>
								</p>
								<p><b><font color="white" size="4">and I am interested to rent your home. 
									Please, give me a schedule for visiting your home and get more informaton of your home.</font>
								</p>
								<p><b><font color="white" size="4">You can contact with my mail</font></b> : 
									<input type="text" name="email" placeholder="Enter Your Email" size="30"/>
								</p>
								<p><b><font color="white" size="4">or phone</font></b> : 
									<input type="text" name="phone" placeholder="Enter Your Phone" size="30"/>
								</p>
								
								<p align="center"><button><b><font color="black" size="4">Request fot Visiting</font></b></button></p>
						</fieldset>
					</td>
					
				</tr>
			</table>
			<br/><br/>

			<?php
				include 'footer.php';
			?>
		</font>	
	</body>	
</html>