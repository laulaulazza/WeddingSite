<html>
<body>
<?php
	$exclamation = $_POST["exclamation"];
	$name = $_POST["name"];
	$is_are = $_POST["is_are"];
	$adjective = $_POST["adjective"];
	$i_am_we_are = $_POST["i_am_we_are"];
	$attend_miss = $_POST["attend_miss"];
	$adjective2 = $_POST["adjective2"];
	$adjective3 = $_POST["adjective3"];
	$words_wisdom = $_POST["words_wisdom"];
	$helpful_tip = $_POST["helpful_tip"];

	$line1 = $exclamation . "<br />";
	$line2 = $name . " " . $is_are . " " . $adjective . " to hear about your upcoming nuptials!<br />";
	$line3 = $i_am_we_are . " " . $adjective2 . " to " . $attend_miss . " the celebration.<br />";
	$line4 = "A few words of advice as you enter this " . $adjective3 . " union:<br />";
	$line5 = $words_wisdom . "<br />";
	$line6 = "and always make sure:<br />";
	$line7 = $helpful_tip;

	$body_text = $line1 . $line2 . $line3 . $line4 . $line5 . $line6 . $line7;
	echo $body_text;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	set_time_limit(5);
	mail("laura@hickling.is", "Wedding RSVP from " . $name, $body_text, $headers);
?>
</body>
</html>
