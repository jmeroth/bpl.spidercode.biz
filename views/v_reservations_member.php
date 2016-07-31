<form method='POST' action='/reservations/p_member/<?=$user->location?>'>

	<label for='location'>Branch</label>
	<input type='text' name='location' value="<?=$user->location?>"><br><br>

	<label for='eventName'>Event Name</label>
	<input type='text' name='eventName' value=""><br><br>

	<label for='ageGroup'>Age Group</label>
	<input type='text' name='ageGroup' value=""><br><br>

	<label for='attendance'>Attendance</label>
	<input type='text' name='attendance' value=""><br><br>
	
	<!-- Checkboxes< not currently used
	<label for='sat_breakfast'>Saturday breakfast?</label>
	<input type='checkbox' name='sat_breakfast'><br>
	
	<label for='sat_dinner'>Saturday dinner?</label>
	<input type='checkbox' name='sat_dinner'><br> -->
	
		<!-- invisibly posts id of logged in user 
	<input type ='hidden' name='guestof' value="<?=$user->user_id?>">
	<input type ='hidden' name='gender' value="<?=$user->gender?>">
	<input type ='hidden' name='roomid' value="<?=$user->location?>">
	<input type ='hidden' name='ismember' value=1> -->
	
	<br><br>
    <input type='submit' value='Submit Event Information'>
	
</form>
