<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$staff_id = $_POST['staff_id'];
				$staff_name = $_POST['staff_name'];
				$position = $_POST['position'];
				$grade = $_POST['grade'];
				$first_app_date = $_POST['first_app_date'];
				$app_date_current = $_POST['app_date_current'];
				$service_end_date = $_POST['service_end_date'];
				$dob = $_POST['dob'];
				$age = $_POST['age'];
				$cohort = $_POST['cohort'];
				$academic_quali = $_POST['academic_quali'];
				$proff_quali = $_POST['proff_quali'];
				$department = $_POST['department'];
				$st_nonst = $_POST['st_nonst'];

				$status_1 = $_POST['status_1'];
				$status_2 = $_POST['status_2'];
				$status_3 = $_POST['status_3'];

				$citizenship = $_POST['citizenship'];
				$country = $_POST['country'];
				$remarks = $_POST['remarks'];

				// masukkan data kt table staff


				$query = "INSERT INTO staffs(staff_id, staff_name, position, grade, first_app_date, app_date_current, service_end_date, dob, age, cohort, academic_quali, proff_quali, department, st_nonst, status_1, status_2, status_3, citizenship, country, remarks) ";

				// masukkan data kt table staff

				$query .= "VALUES('$staff_id', '$staff_name', '$position', '$grade', '$first_app_date', '$app_date_current', '$service_end_date', '$dob', $age, '$cohort', '$academic_quali', '$proff_quali', '$department', '$st_nonst', '$status_1', '$status_2', '$status_3', '$citizenship', '$country', '$remarks')";

				$add_query = mysqli_query($connection, $query);

				if (!$add_query) {
					die("query failed" . mysqli_query($connection));
					exit();
				} else {

					$message = "<p class='bg-danger'>staff added<a href='sec_a.php?source=view_staff'> View user</a></p>";
				}
					
			}
		?>



<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Section A : General Information</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Staff</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="staff_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_name">Staff Name</label>
				<input type="text" name="staff_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="position">Job Position</label>
				<input type="text" name="position" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="grade">Grade (Civil Servant)</label>
				<input type="text" name="grade" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="1st_app_date">First Appointment date</label>
				<input type="date" name="first_app_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="app_date_current">Appointment date for current position</label>
				<input type="date" name="app_date_current" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="service_end_date">Service end date</label>
				<input type="date" name="service_end_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="dob">Date Of Birth</label>
				<input type="date" name="dob" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="number" name="age" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="cohort">Cohort</label>
				<input type="text" name="cohort" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="academic_quali">Academic Qualification</label>
				<select class="form-control" name="academic_quali" required>
					<option value="">--Please select--</option>
					<option value="Degree">Degree</option>
					<option value="Master">Master</option>
					<option value="PHD">PHD</option>
				</select>
			</div>
			<div class="form-group">
				<label for="proff_quali">Profesional Qualification</label>
				<input type="text" name="proff_quali" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="reg_num">Registration number for Profesional Membership</label>
				<input type="text" name="reg_num" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="department">Department</label>
				<select class="form-control" name="department" required>
					<option value="">--Please select--</option>

					<option value="admin_hr">Administration & Human Resources Office</option>
					<option value="record_convo">Record & Convocation Unit</option>
					<option value="fcvac">Faculty of Communication, Visual Art & Computing</option>
					<option value="fels">Faculty of Engineering & Life Science</option>
					<option value="fess">Faculty of Education & Science Social</option>
					<option value="fba">Faculty of Business & Accountancy</option>
					<option value="grad_stu">Centre of Graduate Studies</option>
					<option value="bursar">Bursar Office</option>
					<option value="coe">Centre of Excellent</option>
					<option value="library">Unisel Library</option>
				</select>
			</div>
			<div class="form-group">
				<label for="st_nonst">S&T or non S&T</label>
				<select class="form-control" name="st_nonst" required>
					<option value="">--Please select--</option>
					<option value="st">S&T</option>
					<option value="nonst">non S&T</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status_1">Status 1</label>
				<select class="form-control" name="status_1" required>
					<option value="">--Please select--</option>
					<option value="active">Active</option>
					<option value="stud_lev">Study Leaves</option>
					<option value="sabbatical">Sabbatical</option>
					<option value="trainning">Trainning</option>
					<option value="attachment">Attachment</option>
					<option value="seconded">Seconded</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status_2">Status 2</label>
				<select class="form-control" name="status_2" required>
					<option value="">--Please select--</option>
					<option value="contract">Contract</option>
					<option value="permanent">Permanent</option>
				</select>
			</div>
			<div class="form-group">
				<label for="status_3">Status 3</label>
				<select class="form-control" name="status_3" required>
					<option value="">--Please select--</option>
					<option value="full_time">Full Time</option>
					<option value="part_time">Part Time</option>
				</select>
			</div>
			<div class="form-group">
				<label for="citizenship">Citizenship</label>
				<select class="form-control" name="citizenship" required>
					<option value="">--Please select--</option>
					<option value="local">Local</option>
					<option value="foreign">Foreign</option>
				</select>
			</div>
			<!-- country selection -->
			<div class="form-group"> 
				<label for="country">Country</label>
				<select class="form-control" name="country" required>
					<option value="">--Please select--</option>
					<option value="AF">Afghanistan</option>
					<option value="AX">Åland Islands</option>
					<option value="AL">Albania</option>
					<option value="DZ">Algeria</option>
					<option value="AS">American Samoa</option>
					<option value="AD">Andorra</option>
					<option value="AO">Angola</option>
					<option value="AI">Anguilla</option>
					<option value="AQ">Antarctica</option>
					<option value="AG">Antigua and Barbuda</option>
					<option value="AR">Argentina</option>
					<option value="AM">Armenia</option>
					<option value="AW">Aruba</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="AZ">Azerbaijan</option>
					<option value="BS">Bahamas</option>
					<option value="BH">Bahrain</option>
					<option value="BD">Bangladesh</option>
					<option value="BB">Barbados</option>
					<option value="BY">Belarus</option>
					<option value="BE">Belgium</option>
					<option value="BZ">Belize</option>
					<option value="BJ">Benin</option>
					<option value="BM">Bermuda</option>
					<option value="BT">Bhutan</option>
					<option value="BO">Bolivia, Plurinational State of</option>
					<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
					<option value="BA">Bosnia and Herzegovina</option>
					<option value="BW">Botswana</option>
					<option value="BV">Bouvet Island</option>
					<option value="BR">Brazil</option>
					<option value="IO">British Indian Ocean Territory</option>
					<option value="BN">Brunei Darussalam</option>
					<option value="BG">Bulgaria</option>
					<option value="BF">Burkina Faso</option>
					<option value="BI">Burundi</option>
					<option value="KH">Cambodia</option>
					<option value="CM">Cameroon</option>
					<option value="CA">Canada</option>
					<option value="CV">Cape Verde</option>
					<option value="KY">Cayman Islands</option>
					<option value="CF">Central African Republic</option>
					<option value="TD">Chad</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CX">Christmas Island</option>
					<option value="CC">Cocos (Keeling) Islands</option>
					<option value="CO">Colombia</option>
					<option value="KM">Comoros</option>
					<option value="CG">Congo</option>
					<option value="CD">Congo, the Democratic Republic of the</option>
					<option value="CK">Cook Islands</option>
					<option value="CR">Costa Rica</option>
					<option value="CI">Côte d'Ivoire</option>
					<option value="HR">Croatia</option>
					<option value="CU">Cuba</option>
					<option value="CW">Curaçao</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DJ">Djibouti</option>
					<option value="DM">Dominica</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC">Ecuador</option>
					<option value="EG">Egypt</option>
					<option value="SV">El Salvador</option>
					<option value="GQ">Equatorial Guinea</option>
					<option value="ER">Eritrea</option>
					<option value="EE">Estonia</option>
					<option value="ET">Ethiopia</option>
					<option value="FK">Falkland Islands (Malvinas)</option>
					<option value="FO">Faroe Islands</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="GF">French Guiana</option>
					<option value="PF">French Polynesia</option>
					<option value="TF">French Southern Territories</option>
					<option value="GA">Gabon</option>
					<option value="GM">Gambia</option>
					<option value="GE">Georgia</option>
					<option value="DE">Germany</option>
					<option value="GH">Ghana</option>
					<option value="GI">Gibraltar</option>
					<option value="GR">Greece</option>
					<option value="GL">Greenland</option>
					<option value="GD">Grenada</option>
					<option value="GP">Guadeloupe</option>
					<option value="GU">Guam</option>
					<option value="GT">Guatemala</option>
					<option value="GG">Guernsey</option>
					<option value="GN">Guinea</option>
					<option value="GW">Guinea-Bissau</option>
					<option value="GY">Guyana</option>
					<option value="HT">Haiti</option>
					<option value="HM">Heard Island and McDonald Islands</option>
					<option value="VA">Holy See (Vatican City State)</option>
					<option value="HN">Honduras</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="ID">Indonesia</option>
					<option value="IR">Iran, Islamic Republic of</option>
					<option value="IQ">Iraq</option>
					<option value="IE">Ireland</option>
					<option value="IM">Isle of Man</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="JE">Jersey</option>
					<option value="JO">Jordan</option>
					<option value="KZ">Kazakhstan</option>
					<option value="KE">Kenya</option>
					<option value="KI">Kiribati</option>
					<option value="KP">Korea, Democratic People's Republic of</option>
					<option value="KR">Korea, Republic of</option>
					<option value="KW">Kuwait</option>
					<option value="KG">Kyrgyzstan</option>
					<option value="LA">Lao People's Democratic Republic</option>
					<option value="LV">Latvia</option>
					<option value="LB">Lebanon</option>
					<option value="LS">Lesotho</option>
					<option value="LR">Liberia</option>
					<option value="LY">Libya</option>
					<option value="LI">Liechtenstein</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MO">Macao</option>
					<option value="MK">Macedonia, the former Yugoslav Republic of</option>
					<option value="MG">Madagascar</option>
					<option value="MW">Malawi</option>
					<option value="MY">Malaysia</option>
					<option value="MV">Maldives</option>
					<option value="ML">Mali</option>
					<option value="MT">Malta</option>
					<option value="MH">Marshall Islands</option>
					<option value="MQ">Martinique</option>
					<option value="MR">Mauritania</option>
					<option value="MU">Mauritius</option>
					<option value="YT">Mayotte</option>
					<option value="MX">Mexico</option>
					<option value="FM">Micronesia, Federated States of</option>
					<option value="MD">Moldova, Republic of</option>
					<option value="MC">Monaco</option>
					<option value="MN">Mongolia</option>
					<option value="ME">Montenegro</option>
					<option value="MS">Montserrat</option>
					<option value="MA">Morocco</option>
					<option value="MZ">Mozambique</option>
					<option value="MM">Myanmar</option>
					<option value="NA">Namibia</option>
					<option value="NR">Nauru</option>
					<option value="NP">Nepal</option>
					<option value="NL">Netherlands</option>
					<option value="NC">New Caledonia</option>
					<option value="NZ">New Zealand</option>
					<option value="NI">Nicaragua</option>
					<option value="NE">Niger</option>
					<option value="NG">Nigeria</option>
					<option value="NU">Niue</option>
					<option value="NF">Norfolk Island</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="NO">Norway</option>
					<option value="OM">Oman</option>
					<option value="PK">Pakistan</option>
					<option value="PW">Palau</option>
					<option value="PS">Palestinian Territory, Occupied</option>
					<option value="PA">Panama</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PY">Paraguay</option>
					<option value="PE">Peru</option>
					<option value="PH">Philippines</option>
					<option value="PN">Pitcairn</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="PR">Puerto Rico</option>
					<option value="QA">Qatar</option>
					<option value="RE">Réunion</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="BL">Saint Barthélemy</option>
					<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
					<option value="KN">Saint Kitts and Nevis</option>
					<option value="LC">Saint Lucia</option>
					<option value="MF">Saint Martin (French part)</option>
					<option value="PM">Saint Pierre and Miquelon</option>
					<option value="VC">Saint Vincent and the Grenadines</option>
					<option value="WS">Samoa</option>
					<option value="SM">San Marino</option>
					<option value="ST">Sao Tome and Principe</option>
					<option value="SA">Saudi Arabia</option>
					<option value="SN">Senegal</option>
					<option value="RS">Serbia</option>
					<option value="SC">Seychelles</option>
					<option value="SL">Sierra Leone</option>
					<option value="SG">Singapore</option>
					<option value="SX">Sint Maarten (Dutch part)</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Islands</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="GS">South Georgia and the South Sandwich Islands</option>
					<option value="SS">South Sudan</option>
					<option value="ES">Spain</option>
					<option value="LK">Sri Lanka</option>
					<option value="SD">Sudan</option>
					<option value="SR">Suriname</option>
					<option value="SJ">Svalbard and Jan Mayen</option>
					<option value="SZ">Swaziland</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="TW">Taiwan, Province of China</option>
					<option value="TJ">Tajikistan</option>
					<option value="TZ">Tanzania, United Republic of</option>
					<option value="TH">Thailand</option>
					<option value="TL">Timor-Leste</option>
					<option value="TG">Togo</option>
					<option value="TK">Tokelau</option>
					<option value="TO">Tonga</option>
					<option value="TT">Trinidad and Tobago</option>
					<option value="TN">Tunisia</option>
					<option value="TR">Turkey</option>
					<option value="TM">Turkmenistan</option>
					<option value="TC">Turks and Caicos Islands</option>
					<option value="TV">Tuvalu</option>
					<option value="UG">Uganda</option>
					<option value="UA">Ukraine</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="UY">Uruguay</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VU">Vanuatu</option>
					<option value="VE">Venezuela, Bolivarian Republic of</option>
					<option value="VN">Viet Nam</option>
					<option value="VG">Virgin Islands, British</option>
					<option value="VI">Virgin Islands, U.S.</option>
					<option value="WF">Wallis and Futuna</option>
					<option value="EH">Western Sahara</option>
					<option value="YE">Yemen</option>
					<option value="ZM">Zambia</option>
					<option value="ZW">Zimbabwe</option>
				</select>
				</select>
			</div>
			<div class="form-group">
				<label for="remarks">Remarks</label>
				<input type="text" name="remarks" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="text-center">
					<img src="https://t4.ftcdn.net/jpg/01/16/06/45/240_F_116064582_KlXENacGmdt4xl8H6fQRYfSZLntLNKSX.jpg" class="rounded">
					<h1>Staff</h1>
				</div>
				
				<!-- <h1>Staff</h1> -->
			</div>
		</div>
	</div>