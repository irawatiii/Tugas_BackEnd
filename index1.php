<!DOCTYPE html>
<html>
<body>

<?php
// Menentukan Bilangan Positif/Negatif Dengan Switch dan Case
$a = -20;

switch ($a) {
	case ($a < 0);
    	echo "bilangan $a adalah negatif";
        break;
	case ($a > 0);
    	echo "bilangan $a adalah positif";
        break;
        default;
        echo "bilangan netral";
}
?>
 
</body>
</html>