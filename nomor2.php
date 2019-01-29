<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="koneksi.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><center><b>TEST</b></center></td>
</tr>
<tr>
<td width="71">Username</td>
<td width="6">:</td>
<td width="301"><input name="username" type="text" id="username" minlength="8" required oninvalid="this.setCustomValidity('diisi minimal delapan karakter ya')">
</td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="text" id="password" minlength="8" required oninvalid="this.setCustomValidity('diisi minimal delapan karakter ya')"></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>