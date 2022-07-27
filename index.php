
<html> 
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Subsequence PHP</title>
</head>
<body>
<h1>Input on the text box what ever you want for Subsequence result </h1>
<form name="form" action="" method="POST">
<!--<input id="myinputbox" name="myinputbox" type="text" value="" autofocus onkeydown="search(this)"/>
<input id="myinputbox1" name="myinputbox1" type="text" value="" onkeydown="search(this)"/>-->
<input id="myinputbox" name="myinputbox" type="text" value="" autofocus onkeydown="search()"/>
<input id="myinputbox1" name="myinputbox1" type="text" value="" onkeydown="search()"/>

</form>
</body>
</html>

<script>
	window.onload = function() {
  var input = document.getElementById("myinputbox").focus();
}

//function search(ele) {
function search() {

    if(event.key === 'Enter') {
    // alert(ele.value);        
		   jQuery.ajax({
			type: "POST",
			url: 'equivalent.php',
			 cache:false,
			 data: 'myinputbox=' + $("#myinputbox").val() + '&myinputbox1=' + $("#myinputbox1").val(),
			success: function (data) {
					if (data == true){
							alert("BENAR");
						
					}else{
							alert('SALAH');
						
					}
							
					}
		});


    }
}




</script>

