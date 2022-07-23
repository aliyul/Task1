
<?php
   
 					$str1 = $_POST['myinputbox'];
					$str2 = $_POST['myinputbox1'];
					$m = strlen($str1);
					$n = strlen($str2);

					$_POST['status'] = isSubSequence($str1, $str2, $m, $n) ?  true: false;
					$status = $_POST['status'];
					//echo $t;
					//$aResult['result'] = $_POST['status'];
				  // $aResult['result'] = IsEquivalent();
					//echo $output;
					// $aResult['result'] = $_POST['functionname'];
				
               

           
    echo ($status);

	
function isSubSequence($str1, $str2, $m, $n)
{
	// Base Cases
	if ($m == 0) return true;
	if ($n == 0) return false;

	// If last characters of two
	// strings are matching
	if ($str1[$m - 1] == $str2[$n - 1])
		return isSubSequence($str1, $str2,
						$m - 1, $n - 1);

	// If last characters
	// are not matching
	return isSubSequence($str1, $str2,
						$m, $n - 1);
}

function IsEquivalent(){

/*$str1 = $_GET['myinputbox'];
$str2 = $_GET['myinputbox1'];
$m = strlen($str1);
$n = strlen($str2);

$t = isSubSequence($str1, $str2, $m, $n) ?  true: false;
//echo $t;
if($t == true) {

	echo json_encode( "<script type='text/javascript'>alert('BENAR');</script>");

}else{
  echo json_encode( "<script type='text/javascript'>alert('SALAH');</script>");
}*/

}

?>







