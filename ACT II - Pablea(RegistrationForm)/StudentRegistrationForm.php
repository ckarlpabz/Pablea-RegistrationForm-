<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Registration Form</title>
</head>
<body>
	<center><table border="8">
		<form action="registration.php" method="POST">
			<h1>Student Registration Form</h1>
			<tr>
				<td id="name">Firstname</td>
				<td id="name">Middlename</td>
				<td id="name">Lastname</td>
			</tr>
			<tr>
				<td><input type="textbox" size="25" autofocus name="firstname" value="firstname" id="namespace"></td>
				<td><input type="textbox" size="25" autofocus name="middlename" value="middlename" id="namespace"></td>
				<td><input type="textbox" size="25" autofocus name="lastname" value="lastname" id="namespace"></td>
			</tr>
			<tr>
				<td id="name">Gender</td>
				<td id="pabz"><center><input type="radio" name="gender" value="Male">Male</center></td>
				<td id="pabz"><center><input type="radio" name="gender" value="Female">Female</center></td>
			</tr>
			<tr>
				<td colspan="3"  id="name">Birthday</td>
			</tr>
			<tr>
				<td id="pabz"><center>
					Month
					<select name="month">
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select></center>
				</td>
				<td id="pabz"><center>
					Day
					<select name="day">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select></center>
				</td>
				<td id=""pabz""><center>
					Year
					<select name="year">
						<option>1990</option>
						<option>1991</option>
						<option>1992</option>
						<option>1993</option>
						<option>1994</option>
						<option>1995</option>
						<option>1996</option>
						<option>1997</option>
						<option>1998</option>
						<option>1999</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
					</select></center>
				</td>
			</tr>
			<tr>
				<td id="name">Program</td>
				<td colspan="2">
					<center><select name="program">
						<option>(ACT) Associate in Computer Technology</option>
						<option>(BSIS) BS Information System</option>
						<option>(ABB) AB Broadcasting</option>
						<option>(BSA) BS Accountancy</option>
						<option>(BSAT) BS Accounting Technology</option>
						<option>(NA) Nursing Assistance</option>
						<option>(IC) International Cookery</option>
						<option>(CP) Computer Programming</option>
						<option>(BSSW) BS Social Works</option>
						<option>(OM) Office Management</option>
						<option>(MCT) Mass Communication Technology</option>
					</select></center>
				</td>
			</tr>
			<tr>
				<td colspan="3" id="name">Student Type</td>
			</tr>
			<tr>
				<td colspan="3" id="pabz">
					<input type="radio" name="studentType" value="Full-scholar"> Full-scholar<br>
					<input type="radio" name="studentType" value="Partial-scholar"> Partial-scholar<br>
					<input type="radio" name="studentType" value="Payee"> Payee
				</td>
			</tr>
			<tr>
				<td colspan="3" id="name">Address</td>
			</tr>
			<tr>
				<td colspan="3" name="address">
					<textarea name="address" cols="83"></textarea>
				</td>
			</tr>
			<tr>
				<th colspan="3">
					<input type="submit"  name="submit" value="Submit Registration" id="ck"><input type="reset" name="reset"  value="Reset" id="ck"></center></p>
				</th>
			</tr>
		</form>
	</table></center>
</body>
</html> 
