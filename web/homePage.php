<html>
    <head>
        <title>
            Ryan's Homepage
        </title>
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <script src="homepage.js"></script>
    </head>
    <body>
        <h1>
            Homepage
        </h1>
        <hr>
        <img src="me.JPG" alt="picture of me" id="me" onclick="changePicture()">
        <p>
            My name is Ryan Blomquist. I am from Houston TX, but I spent several years in California. <br>
            I wrestled in High School and become pretty good almost going to state. <br>
            I love programming, I started in High School learning a little bit of java <br>
            and decided to pursue a career in it. now I am proficient in c++, c#, java, <br>
            html, and know php, javascript, and css. I have started a few projects with <br>
            my roomate and we hope to finish one of them.
        </p>
        <p>
            assignments can be viewed <a href="assignments.html">here</a>. <br>
            <?php
                echo "the date is " . date("Y/m/d") . "<br>";
                echo "The time is " . date("h:i:sa");
            ?>
        </p>
        
    </body>