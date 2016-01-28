	 <head> <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body background="/ap/banner.png">
	<form> 
<div class="container" background="#434857"> 
<div class="row" >
<div class="input-group col-md-12">

<input type="text" id="in" class="search-query form-control" onkeyup='showHint(this.value)' placeholder="Search" />
<span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
</div>
</div>
</div>
</form>
<p>Suggestions: <span id="txtHint"></span></p>

<div><p id="textHint"></p></div>
<!-- <iframe src="/ap/gethint.php"></iframe> -->
</body>

<script type="text/javascript">

function showHint(str) {
     {	if(str=="") return;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "/CI/index.php/welcome/srch?query=" + str, true);
        xmlhttp.send();
    }
}

// document.getElementById('p1').innerHTML = srch.responseText;
// 			srch.open("GET", "gethint.php?q=" + str, true);
//         	srch.send();

</script>
<!--  -->

