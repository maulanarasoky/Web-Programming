<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	function isPrime ($input) {
		if ($input < 2)
			return false;
		elseif ($input == 2)
			return true;
		else {
			if ($input % 2 == 0)
				return false;
			for ($i = 3; $i <= $input-1; $i+=2)
				if ($input % $i == 0)
					return false;
			return true;
		}
	}
	echo 'Below are prime numbers<br/><br/>';
	for ($i = 1; $i <= 10; $i++){
		if (isPrime($i)) {
			echo $i . '<br/><br/>';
		}
	}
?>
