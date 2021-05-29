<html>
<head>
<title>Sign up to Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="registerCSS.css">	
</head>
<body>
	<p id="domain_name">Sign up to Assists 4 Motorists .Com .Au</p>
	<br /><br /><br />
	<form action="setupAccount.php" method="post">
	<!-- Personal info -->
	<h2>Personal Information</h2>
<?php
	// Error message
	session_start();
	if (isset($_SESSION['usrn_error'])) {
		echo '<span style="color:red;">ERROR: Username taken</span><br />';
	}
	if (isset($_SESSION['pwrd_error'])) {
		echo '<span style="color:red;">ERROR: Password not match</span><br />';
	}
?>
		<p> First name									</p>
		<p> <input type="text"	name="fname" autocomplete="off" size="30"
			pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$" required
			value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : '' ?>"
			placeholder="ie. Gordon">					</p>
		<p> Last name									</p>
		<p> <input type="text"	name="lname" autocomplete="off" size="30"
			pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$" required
			value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : '' ?>"
			placeholder="ie. Ramsey">					</p>
		<p> Username									</p>
		<p> <input type="text"	name="username" autocomplete="off" size="50"
			pattern="^[A-Za-z0-9]{6,30}$" required
			value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"
			placeholder="At least 6 characters in alphabet and/or number"></p>
		<p> Password</p>
		<p> <input type="password" name="password" autocomplete="off" size="30" required 
			placeholder="********">						</p>
		<p> Re-type password 							</p>
		<p> <input type="password" name="passwordc" autocomplete="off" size="30" required 
			placeholder="********">						</p>
		<p> Email										</p>
		<p> <input type="text"	name="email" autocomplete="off" size="50"
			pattern="^.+@+[a-z]{2,10}\.+.{2,10}$" required
			value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"
			placeholder="ie. example@domain.com">		</p>
		<p> Mobile phone								</p>
		<p> <input type="text"	name="phone" autocomplete="off" size="30"
			pattern="^\d{10}$" required
			value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>"
			placeholder="ie. 0412345678">				</p>
		<br />
		
		<h2>Card Information</h2>		
		<p> Card number									</p>
		<p> <input type="text"	name="card_number" autocomplete="off" size="30"
			pattern="^[0-9 ]{16,19}$" required
			placeholder="ie. 1111 1111 1111 1111">		</p>
		<p> Expiry date									</p>
		<p> <input type="text"	name="exp_month" autocomplete="off" size="3"
			pattern="^0[0-9]|1[1,2]$" required
			placeholder="ie. 02">&nbsp;/
			<input type="text" name="exp_year" autocomplete="off" size="6"
			pattern="^20+[0-9]{2}$" required
			placeholder="ie. 2020">						</p>
		<p> Security code (CVV)							</p>
		<p> <input type="password" name="cvv" autocomplete="off" size="2"
			pattern="\d{3}" required
			placeholder="***">							</p>
		<br />
		
		<!-- Sign up as customer -->
		<h2> Signup as...								</h2>
		<p> <input type="radio" name="usertype" value="0" 
			id="cust" required onclick=
			"document.getElementById('area').style.display='none';
			document.getElementById('subscription').style.display='block';">Customer</p>
		<div id="subscription" style="display:none;">
			<h3 style="color:black;"> Please provide your subscription options here...</h3>
			<p> Car brand:
				<input type="text" name="car_brand" autocomplete="off" size="32"
				pattern=".{3,20}"
				placeholder="ie. Toyota Camry">			</p>
			<p> Car year:
				<input type="text" name="car_year" autocomplete="off" size="10"
				pattern="^\d{4}$"
				placeholder="ie. 2016">					</p>
			<p> Car registration number:
				<input type="text" name="car_rego" autocomplete="off" size="15"
				pattern="^[A-Za-z0-9]{6,10}$"
				placeholder="ie. ABC123">				</p>
			<p> Choose your subscription option:		</p>
				<input type="radio" name="subscription" value="0"> Pay-on-demand
				<p style="color:black;font-size:14px;margin:5px 35px;">
					When the need emerges, you will request assistance through the system and will pay per service use.
				</p>
				<input type="radio" name="subscription" value="1"> Membership (AU$369.99/year)
				<p style="color:black;font-size:14px;margin:5px 35px;">
					You will pay a fixed membership fee annually and you are entitled to unlimited roadside assistance callouts.
				</p>
		</div>
		<br />
		
		<!-- Sign up as professional -->
		<p> <input type="radio" name="usertype" value="1" 
			id="prof" required onclick=
			"document.getElementById('area').style.display='block';
			document.getElementById('subscription').style.display='none'">Professional</p>
		<div id="area" style="display:none;">
			<h3 style="color:black;"> Please provide your professional information here...</h3>
			<p> Professional certificate authority:
				<input type="text" name="authority" autocomplete="off" size="45"
				placeholder="ie. Institute of Mechanical Repairment">	</p>
			<p> Certificate number:
				<input type="text" name="cert_number" autocomplete="off" size="15"
				placeholder="ie. ABC123">								</p>
			<p> Please provide your service area here:					</p>
			<select name="area">
				<option value="1">	Sydney NSW				</option>
				<option value="2">	Newcastle NSW			</option>
				<option value="3">	Maitland NSW			</option>
				<option value="4">	Wollongong NSW			</option>
				<option value="5">	Tweed Heads NSW			</option>
				<option value="6">	Coffs Harbour NSW		</option>
				<option value="7">	Albury NSW				</option>
				<option value="8">	Wagga Wagga NSW			</option>
				<option value="9">	Port Macquarie NSW		</option>
				<option value="10">	Nowra-Bomaderry NSW		</option>
				<option value="11">	Canberra ACT			</option>
				<option value="12"> Brisbane QLD			</option>
				<option value="13"> Gold Coast QLD			</option>
				<option value="14"> Sunshine Coast QLD		</option>
				<option value="15"> Townsville QLD			</option>
				<option value="16"> Cairns QLD				</option>
				<option value="17"> Mount Gambier SA		</option>
				<option value="18"> Victor Habor-Goolwa SA	</option>
				<option value="19"> Murray Bridge SA		</option>
				<option value="20"> Port Lincoln SA			</option>
				<option value="21"> Port Pirie				</option>
				<option value="22"> Port Augusta			</option>
				<option value="23"> Melbourne VIC			</option>
				<option value="24"> Geelong VIC				</option>
				<option value="25"> Ballarat VIC			</option>
				<option value="26"> Bendigo VIC				</option>
				<option value="27"> Shepparton VIC			</option>
				<option value="28"> Melton VIC				</option>
				<option value="29"> Mildura VIC				</option>
				<option value="30"> Warrnambool VIC			</option>
				<option value="31"> Perth WA				</option>
				<option value="32"> Geraldton WA			</option>
				<option value="33"> Kalgoorlie-Boulder WA	</option>
				<option value="34"> Albany WA				</option>
				<option value="35"> Karratha WA				</option>
				<option value="36"> Greater Hobart TAS		</option>
				<option value="37"> Launceston TAS			</option>
				<option value="38"> Devonport TAS			</option>
				<option value="39"> Burnie TAS				</option>
				<option value="40"> Ulverstone TAS			</option>
			</select>
		</div>
		<br />
		<input class="button" type="submit" value="Sign up">
	</form>
</body>
</html>