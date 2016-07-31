<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css"/>
<title>Karnataka Tourism</title></head>
<body>

<h2 style="font_color:blue;text_align:center" >Beluru,Chennakesava temple</h2>
<div id="search">
<input type="text" name="search" placeholder="search the blog.."/>
<input type="button" value="search" /> </div>
<hr style="height:5px;border:none;color:red"/>

<div id="pic">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/ChennaKeshava_Temple%2C_Belur.JPG/250px-ChennaKeshava_Temple%2C_Belur.JPG"
alt="channakesava temple, Beluru"/>
</div>
<div id="content">
<b>Beluru</b>, taluka in Hassan district in the state of <b>Karnataka, India</b>. 
The town is renowned for its <strong><i>Chennakesava Temple</i></strong>, 
one of the finest examples of 
<a href="https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=4&cad=rja&uact=8&ved=0ahUKEwjNrZ_qtpvOAhWMrY8KHfhPC1sQFgg5MAM&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FHoysala_Empire&usg=AFQjCNG6gQGLKk4viAZ_dpFnX5zsXLHrZw&sig2=5F4NkjLoEBUmxCSP0rtiGw">Hoysala</a> workmanship.Belur was the early capital of the Hoysala Empire. With Halebidu which is only 16 km away, this is one of the major tourist destinations in Karnataka. Belur is located in Hassan district. According to inscriptions discovered here, it was also referred to as Velapuri.
The main attraction in Belur is the Chennakeshava temple complex which contains the Chennakesava Temple (dedicated to Chennakeshava, 
meaning handsome Vishnu) as the centre piece.
The temple is one of the finest examples of Hoysala architecture. 
It was built by king <strong>Vishnuvardhana</strong> in commemoration of his victory over
 the Cholas at Talakad in 1117 CE. Legend has it that it took 103 years to complete and 
 Vishnuvardhana's grandson Veera Ballala II completed the task. 
 The facade of the temple is filled with intricate sculptures with no portion left blank.
  The intricate workmanship includes <i>elephants, lions, horses, 
  episodes from the Indian mythological epics</i>, and <i>sensuous dancers (Shilabalikas)</i>. 
  Inside the temple are a number of ornate pillars. Darpana Sundari 
  <i>(Lady with the mirror)</i> carved on walls of Belur Temple is one of major attractions in the complex.
  The main entrance to the complex is crowned by a <strong>Rajagopura
  </strong><i>(superstructure over entrance)</i> built during the days of the Vijayanagar empire. 
  Within the complex, the Chennakesava temple is at the centre, facing east, 
  and is flanked by the Kappe Channigraya temple on its right, 
  and a small Sowmyanayaki <i>(form of the goddess Lakshmi)</i> 
  temple set slightly back. On its left, also set slightly back is the Ranganayaki 
  <i>(Andal</i>) temple. Two main sthambha (pillar) exist here. 
  The pillar facing the main temple, the Garuda (eagle) sthambha was erected in the Vijayanagar period while the pillar on the right, 
  the Deepa sthambha (pillar with lamp) dates from the Hoysala period. 
  This is the first great Hoysala temple, though according to the art critic and historian Settar, 
  the artistic idiom and signature is still Western Chalukyan. 
  Hence, the over-decoration which is seen in later Hoysala temples 
  (including the Hoysaleswara temple at Halebidu and the Keshava temple at Somanathapura)
 is not visible here. According to Settar, during later years, the Hoysala art took an
 inclination towards craftsmanship, with a weakness for minutiae.The Chennakesava 
    temple has three entrances and their doorways have decorated sculptures called 
    dvarapalaka (doorkeepers) on either side. While the Kappe Channigraya temple is smaller
     than the Chennakesava temple, it is architecturally significant, though it lacks any
 sculptural features. The Kappe Chennigraya temple became a dvikuta (two shrined temple)
  with the later addition of a shrine to its original plan. The original shrine has a 
  star-shaped plan while the additional shrine is a simple square. The image inside is 
  also that of Kesava ( a form of the god Krishna) and was commissioned by Shantala Devi,
   the noted queen of King Vishnuvardhana.
</div>

<a href="https://www.google.co.in/search?q=belooru&espv=2&biw=1242&bih=585&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKEwi44uXusJvOAhWKvY8KHSAOD90QsAQIJg"><strong>Click here for more images of beluru, chennakeshava temple.</strong></a>

<div id="comment_area">
<form action="index.php">
//comment body
<textarea name="commentholder" rows="4" cols="50"  placeholder="enter comment..."></textarea>

//submit button to enter comment
<div class="button">
<input type="submit" name="submit" onclick=comment()/>

</div>
//reply button
<div class="button">

    <INPUT type="button" value="Click" onClick="window.open('/nighthack/user_auhentication.php')"> 


</div>
</form>
</div>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";

$con = new mysqli($servername, $username, $password);


if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

$sqlauthor = "CREATE TABLE author (
id INT(6) PRIMARY KEY,name VARCHAR(30),
)";
if (mysql_query($con, $sqlauthor)) {
	echo "Table author created successfully";
} else {
	echo "Error creating table: " . mysql_error($con);
}
$sqlauthorinput = "INSERT INTO author (id, name)
	VALUES ('1','srushty')";
	
	if (mysql_query($con, $sqlauthorinput)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($con);
	}



$sqluser = "CREATE TABLE user (
idu INT(6) PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
comment_id INT(10)AUTO_INCREMENT,
FOREIGN KEY (comment_id) REFERENCES comment(idc)
)";

if (mysql_query($con, $sqluser)) {
	echo "Table user created successfully";
} else {
	echo "Error creating table: " . mysql_error($con);
}

$sqlcomment = "CREATE TABLE comment (
idc INT(6) PRIMARY KEY AUTO_INCREMENT,
comment varchar(80),
reg_date TIMESTAMP
)";

if (mysql_query($con, $sqlcomment)) {
	echo "Table comment created successfully";
} else {
	echo "Error creating table: " . mysql_error($con);
}

mysqli_close($conn);

function comment()
{
	$comid=$_POST['idc'];
	$commentbody=$_POST['comment'];
	$sqlcommentinput = "INSERT INTO comment (idc, comment, reg_date)
	VALUES ('$comid','$commentbody','timestamp')";
	
	if (mysql_query($con, $sqlcommentinput)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($con);
	}
	
	mysqli_close($conn);
}

?>
</body>
</html>











