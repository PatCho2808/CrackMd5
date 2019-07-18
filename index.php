<title> md5 cracker </title> 

<h1> MD5 CRACKER by Patrycja Chojnacka </h1>

<?php

	if(isset($_GET["md5"]))
	{
		$md5 = $_GET["md5"];
		//uncomment this to check proper behaviour
		// pin 1234
		//$md5 = '81dc9bdb52d04dc20036dbd8313ed055'; 

		$values = array(0,0,0,0);
		$try = "";  

		for($i=1; $i<11; $i++)
		{
			for($j=1; $j<11; $j++)
			{
				for($z=1; $z<11; $z++)
				{
					for($m=0; $m<10; $m++)
					{
						$values[3] = $m;
						$valAsString = implode("",$values);
						$try = hash('md5', $valAsString); 
						if($try == $md5)
						{
							break 4; 
						}

					}
					$values[2]=$z;
				}
				$values[1]=$j;
			}
			$values[0]=$i;
		}

		if($try == $md5)
		{
			echo "Cracked pin: $valAsString";
		}
		else
		{
			echo "Pin not found"; 
		}
	}

?>

<form>
<input type = "text" name = "md5" size = "40"/>
<button type = "submit" value= "Submit">Submit </button>
</form>


