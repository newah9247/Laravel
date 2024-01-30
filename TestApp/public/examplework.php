<!--
    Name: Noah Taylor
    Date: November 22/23
    Filename: examplework.php
    Purpose: To show off (currently) BouncingRupert, who is a taxidermied cat that will bounce across the screen
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Work</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="script" href="js.js">
</head>
<body>
    <?php include 'nav.php' ?>
    
    <!--I know that marquee is deprecated, however to keep originality as this was my first quest in HTML I won't transform it to CSS-->
    <marquee behavior="alternate" scrollamount="30">
			<marquee behavior="alternate" scrollamount="30"
			direction="down">
				<img src="rupertdancenobg.gif">
			</marquee>
		</marquee>

    <style>
        body
        {
	        width: 100%;
	        height: 100vh;
	        background: black;
        }
        marquee
        {
	        height: 100vh;
        }
    </style>
    <?php include 'footer.php' ?>
</body>
</html>