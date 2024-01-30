<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

       body {
            margin: 20px;
        }

        section {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 8px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
 
</head>
<body>
    <?php include 'nav.php' ?>
    <form action="submit_form.php" method="post">
    <section>
        <h1>Contact Information</h1>
            <p>If you would like to contact me for collaboration or otherwise, please use one of the links provided below! I look forward to hearing from you :-)</p>
        <ul>
            <li>Email: <a href="mailto:nwtaylor04@gmail.com">nwtaylor04@gmail.com</a></li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/noah-taylor9247" target="_blank">linkedin.com/in/noah-taylor9247</a></li>
            <li>GitHub: <a href="https://github.com/newah9247" target="_blank">github.com/yourusername</a></li>
            <li>Twitter: <a href="https://twitter.com/jimbywastaken" target="_blank">@JimbyWasTaken</a></li>
            <!-- Add more social media or other contact information as needed -->
        </ul>
    </section>
    </form>
    
    <?php include 'footer.php' ?>
</body>
</html>




    