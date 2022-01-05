<? 
	$y = mysql_connect("localhost","root","");
	mysql_select_db("sartarosh.uz",$y);

	function filter($s) {
		$s = str_replace("'", "\'", $s);
		return $s;
	}
?>