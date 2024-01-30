<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'nav.php' ?>
        <section> 
            <h2>About Me</h2>
            <p class="aboutParagraph">My name is Noah, I am 19 and currently attend NSCC at the Centre of Geographic Sciences in Lawrencetown, NS. I chose this field as I have always been interested in computer hardware, but I wanted to learn how that hardware works and communicates with each other</p>

            <h2>Professional Background</h2>
            <p>As I have been completing my 2 year program, I haven't had a lot of time to develop a professional background. Currently, the only thing that I have on record is working with CORAH at the Middleton Campus to develop a website (that would not be used) for the program and work with Excel to create a master database</p>

            <h2>Education</h2>
            <p><b>High School Diploma</b> - West Kings District High School - 2022</p>
            <p><b>IT Programming Certificate</b> - Centre of Geographic Sciences - 2024</p>

            <h2>Programming Skills and Strengths</h2>
            <p><b>These are the languages and </b></p>
            <ul>
                <li>HTML5, CSS3, JavaScript, and PHP</li>
                <li>C, C++, C#</li>
                <li>Linux</li>
                <li>Computer Hardware</li>
                <li>Java</li>
            </ul>

            <h2>Development</h2>
            <p>As the IT field is constantly growing and developing, us programmers have to adapt and learn as well. There are always new things releasing, currently the big one is ChatGPT, OpenAI and now Elon Musk's Grok. Here is what I am currently working on for myself: </p>
            <ul>
                <li>Laravel</li>
                <li>Swift (Apple Apps Development)</li>
                <li>Java Spring</li>
                <li>Dust up on Python</li>
            </ul>
        </section>
    <?php include 'footer.php' ?>
    
    <style> 
        * {
            font-family: 'Montserrat', sans-serif;
        }
        section > p {
            padding-left: 30px;
            border-radius: 20px;
            text-align: left;
            font-family: 'Montserrat', sans-serif;
        }
        section > ul {
            padding-left: 50px;
            border-radius: 20px;
            text-align: left;
            font-family: 'Montserrat', sans-serif;
        }

        h2 {
            color: black;
            padding-left: 30px;
        }
    </style>
</body>
</html>