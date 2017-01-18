<h1>Termin Kalender</h1>
<form action="aufgabe3.php" method="POST"> 
	<input name="beschreibung" type="text" />
    <input name="datum" type="date" />
	<input name="zeit" type="time" />
    <input action="aufgabe3.php" type="submit" name="submit" value="Save Data">
	</br>
	
	<?php
	echo file_get_contents('D:\Programme\XAMPP\htdocs\speichern.txt'); 
	if(isset($_POST['beschreibung']) && isset($_POST['datum']) && isset($_POST['zeit'])) {
		$data = $_POST['beschreibung'] . '-' . $_POST['datum'] .  '-' . $_POST['zeit'] . "\n<br />";
		$ret = file_put_contents('D:\Programme\XAMPP\htdocs\speichern.txt', $data, FILE_APPEND | LOCK_EX);
			if($ret === false) {
			die('Speichern fehlgeschlagen');
			}
		} 
		
	 ?>
	
</form>

	 