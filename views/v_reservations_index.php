<table width='40%' BORDER=0 CELLPADDING=3 CELLSPACING=1 
    RULES=ROWS FRAME=HSIDES>
	<tr>
		<th>Branch</th>
		<th>Event Name</th>
		<th>Age Group</th>
		<th>Quantity</th>
		<th>Attendance</th>
		<th></th>
	<tr/>
<?php foreach($events as $event): ?>
<form method='POST' action='/reservations/p_remove/<?=$guest['guest_id']?>'>
	<tr>
		<td><?=$event['location']?></td>
		<td align='center'><?=$event['eventName']?></td>
		<td align='center'><?=$event['ageGroup']?></td>
		<td align='center'><?=$event['eventCount']?></td>
		<td align='center'><?=$event['attendanceSum']?></td>
		<td><input type='submit' value='remove'></td>
	</tr>
</form>
<?php endforeach; ?>


<?php if($user->role == 'vp'): ?>	
	<form method='POST' action='/reservations/p_assign'>
		<tr style="background-color: #a36600">
			<td></td><td></td><td></td><td></td><td><input type='submit' value='Submit to Central'></td><td></td>
		</tr>
	</form>
<?php endif; ?>

</table>



<!--  Display Room info 
      Would need to query room data and send it to the View using:
		$this->template->content->rooms = $rooms;
<table>
<?php foreach($rooms as $room): ?>
	<tr>
		<td><?=$room['roomid']?></td><td><?=$room['capacity']?></td><td><?=$room['occupancy']?></td><td>
	</tr>
<?php endforeach; ?>
</table>
-->