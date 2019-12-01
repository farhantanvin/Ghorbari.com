<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Forgot Password</title>
	</head>
	<body bgcolor="#00303d" height="768" width="1366">
		<font face="arial">
		   <form action="verificationcode.php""<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" >
				<table bgcolor="black" align="center" height="500" width="650">
					<tr align="center" height="270" width="301">
						<td align="center"><img src="image/ghorbari1.png" height="158" width="301"></td>
					</tr>
					
					<tr>
					
						<td align="center" height="30"> <font color="White" size="5"> <b>Email : </b>&nbsp
						
							<input type="text" name="email" placeholder="enter your mail address" size="40"/>
							<br/>
							<font color="white" size="3"><label> </label></font>
						</td>
					</tr>				
					<tr>
						<td align="center" height="60"><button type="submit" name="vcode"><b><font color="black" size="4">Send Verification Code</font></b></button></td>
					</tr>
					
				</table>
			</form>
		</font>
	</body>
</html>