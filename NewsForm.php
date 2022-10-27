<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Nieuwe Producten</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
        <header>
            <div class="menu1-container">
               	<a href="index.html">Home</a>
				<a href="Menufront.html">Menu</a>
				<a href="overOns.html">Over Ons</a>
				<p>VOULEZ VOUS CAFÉ</p>
				<a href="recepten.html">Recepten</a>
				<a href="Nieuws.html">Nieuws</a>
				<a href="Regels.html">Regels</a>
            </div>
        </header>
		
		<div class="middel-nieuws">
			<div class="Nieuws-Nieuws">
				<p> Nieuws </p>
			</div>
			<div class="text-middel-nieuws">
				<h1>Welkom bij de family!!</h1>
				<?php
					if($_SERVER["REQUEST_METHOD"] == "POST"){
						$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
						
						echo "<p>Leuk dat jij je hebt ingescreven voor de nieuwsbrief,</p>
						<p>De nieuwsbrief wordt verstuurd naar $email.</p>
						<p>Wij wensen jou een fijne dag verder,</p>
						<p>en vergeet niet om onze nieuwe porducten te proberen!!</p>
						<p>Groetjes,</p>
						<p></p>";
					}
				?>
			</div>
			<div class="illustraties-nieuws">
				<img src="afbeeldingen/homeMacaron.png" alt="macaron">
				<img src="afbeeldingen/homeMacaron.png" alt="macaron">
				<img src="afbeeldingen/homeMacaron.png" alt="macaron">
			</div>
        </div>
		
        <footer>
            <div class="menu2-container">
                <h1>OUI</h1>
                <p>"Say yes more often"</p>
                <div>
                    <a href="Nieuws.html" ><img src="afbeeldingen/mail.png" alt="nieuwsbrief"  class="icon"/></a>
                    <a href="https://www.google.com" ><img src="afbeeldingen/insta.png" alt="instagram"  class="icon"/></a>
                    <a href="https://www.google.com" ><img src="afbeeldingen/info.png" alt="informatie"  class="icon"/></a>
                    <a href="https://www.google.com" ><img src="afbeeldingen/facebook.png" alt="facebook"  class="icon"/></a>
                    <a href="https://www.google.com" ><img src="afbeeldingen/youtube.png" alt="youtube"  class="icon"/></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>