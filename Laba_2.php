<?php
echo "Введите ваш возраст: ";
$age = (int) readline();

if (($age>0) && ($age<100)){
	qwerty($age);
}
else{
	echo "Введите возраст от 0 до 100";
}

function qwerty($age)
{
	$movies=["The Shawshank Redemption (1992), 16+. Rating - 9.3", "The Godfather (1972), 16+. Rating - 9.2",
			 "The Dark Knight (2008), 14+. Rating - 9", "12 Angry Men (1957), 16+. Rating - 9", "Schindler's List (1993), 16+. Rating - 8.9"];

	if (($age>=14) && ($age<16)){
			echo  $movies[2];
	}
	else{
		foreach ($movies as $film)
		{echo $film . "\n";}
	}
}
?>