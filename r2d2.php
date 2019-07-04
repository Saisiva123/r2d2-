<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  box-sizing: border-box;
}
.first
{
  width:505px;
  height:40px;
  position: relative;
  left:30%;
  top:80px;
}
#input {

  width:400px;
  height:40px;
  margin-left: 0px;
  float: left;
  font-size: 16px;
  border: 1px solid #ddd;
}

.button
{
  float: left;
  width:100px;
  height:40px;
}

#ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
  position: relative;
  width:500px;
  left:30%;
  top:90px;
  display: none;
}

#ul li a {
  border: 1px solid #ddd;
  margin-top: -1px; 
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#ul li a:hover:not(.header) {
  background-color: #eee;
}

</style>
</head>
<body>


<form action="backend.php" method="post" class="first"  enctype="multipart/form-data">
<input type="text" name="input" id="input" onkeyup="a()" placeholder="Enter the movie..." onmousedown="b()" >
<input type="submit" name="submit" value="submit" class="button">
</form>
<ul id="ul">
  <li><a href="#">Avengers</a></li>
  <li><a href="#">Ironman</a></li>
  <li><a href="#">Sherlock</a></li>
  <li><a href="#">Abraham lincoln</a></li>
  <li><a href="#">Game of thrones</a></li>
  <li><a href="#">saw series</a></li>
  <li><a href="#">Doctor strange</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Intersteller</a></li>
  <li><a href="#">Fifty shades</a></li>
  <li><a href="#">Drag to hell</a></li>
  <li><a href="#">Inception</a></li>
  <li><a href="#">Gully Boy</a></li>
</ul>

<script>

function b()
{
    var x=document.getElementById("ul");
    x.style.display="block";
}
function a() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ul");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
