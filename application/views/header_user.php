<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Aapka Painter- Best way to get your house painted</title>
  <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <style>
  av {
    height: 40px;
    width: 100%;
    background: #455868;
    font-size: 11pt;
    font-family: 'PT Sans', Arial, sans-serif;
    font-weight: bold;
    position: relative;
    border-bottom: 2px solid #283744;
}
nav ul {
    padding: 0;
     /*line-height:40px*/
    margin: 0 auto;
    /*width: 600px;*/
    height: 40px;
}
nav li {
    display: inline;
    float: left;
    font-size: 1.5em;
    vertical-align: middle;
}
.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}
.clearfix:after {
    clear: both;
}
.clearfix {
    *zoom: 1;
}
.navbar-nav > li > a
    {

    text-align: center;

    display: inline-block;
    vertical-align: middle;
}
nav a {
    color: #fff;
    display: inline-block;
    width: 120px;
    text-align: center;
    vertical-align: middle;
    text-decoration: none;
    line-height: 40px;
    text-shadow: 1px 1px 0px #283744;
}
nav li a {
    border-right: 1px solid #576979;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
}
nav li:last-child a {
    border-right: 0;
}
nav a:hover, nav a:active {
    background-color: #1CA8DD;
}
nav a#pull {
    display: none;
}   
@media (min-width: 1200px) {
    .container{
        max-width: 970px;
    }
}
  </style>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top clearfix" role="navigation">
        <div class="container">
    <ul class="clearfix">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Progress</a></li>
        <li><a href="#">Contacts</a></li> 
        <li><a href="#">Projects</a></li>
       <a type="button" class="btn btn-success navbar-btn navbar-right " style="height:30px;width:100px;" href="#aboutModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-check"></span> Search</a> 
    </ul>
</div>
</nav>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    
                    </div>
                <div class="modal-body">
                    <!-- <center> -->


    <form> 
<div class="container" background="#434857"> 
<div class="row" >
<div class="input-group col-md-6">

<input type="text" id="in" class="form-control " onkeyup='showHint(this.value)' placeholder="Search" />
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
     {  if(str=="") return;
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
//          srch.open("GET", "gethint.php?q=" + str, true);
//          srch.send();

</script>



                    <!-- </center> -->
                    <hr>
                    </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Searched Enough</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>