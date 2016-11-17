<?php

	if (isset($_POST['match'])) {
	
		if (isset($_POST['search'])){
		
			$search = $_POST['search'];
			$word = $_POST['word'];
			$pattern = "/\s?".$search."\s/i";
	
			preg_match_all($pattern,$word,$found);
			$result = count($found, COUNT_RECURSIVE); //multidimesional array count
	
	}
}
	if (isset($_POST['tukar'])) {
		
		if (isset($_POST['search']) && isset($_POST['replace'])){
		
			$search = $_POST['search'];
			$replace = $_POST['replace'];
			$word = $_POST['word'];
			$pattern = "/\s?".$search."\s/i";
			
			$wordreplace = preg_replace($pattern," ".$replace." ",$word);
		}
} 


?>

<html>
	<p>Match n Replace Word!</p>
	<hr>
	<br>
	<form action="replace.php" method="POST">
		<textarea name="word" cols="50" rows="7"><?php if (isset($wordreplace)){ echo $wordreplace;}?></textarea><br><br>
		<p>Search : </p> <input type="text" name="search" /><br><?php if (isset($result)){  echo $result." Match(s) Found!";} ?><br><br>
		<input name="match" type="submit" value="Match" />  <br><br>
		<p>Replace : </p> <input type="text" name="replace" /><br><br>
		<input  name="tukar" type="submit" value="Replace" />
	</form> 
</html> 
