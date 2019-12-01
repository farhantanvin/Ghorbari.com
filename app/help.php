<?php
?>
<html>
	<head>
		<title>Help</title>
	</head>
	
	<body bgcolor=" #0b121c " height="768" width="1366">
		<font face="arial">
		
			<?php 
				include 'header.php';
			?>
			
			<img src="image/cover.jpg" height="500" width=100%>
			
			<table align="center">
				<tr>
					<td width="600" align="center"><img src="image/footer.jpg"></td>
					<td width="500" align="center">
						<p align="left"><b><font color="FF7D00" size="5">Help</font></b><p>
						<p align="left"><font color="white" size="3">
						<input type="text" name="email" placeholder="your mail address"/> 
						<br/>
						<textarea name="comment" rows="5" cols="40" placeholder="Comment here"/></textarea>
						<br/>
						<input type="submit" value="Submit" name="submit"/></td>
						</font></p>
					</td>
				</tr>
				
			<?php 
				include 'footer.php';
			?>
			
		</font>	
	</body>	
</html>