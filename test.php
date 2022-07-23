
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<form name="form" action="" method="POST">
<input id="myinputbox" name="myinputbox" type="text" value="" autofocus onkeydown="search(this)"/>
<input id="myinputbox1" name="myinputbox1" type="text" value="" onkeydown="search(this)"/>
</form>


<script>
	window.onload = function() {
  var input = document.getElementById("myinputbox").focus();
}

function search(ele) {
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

