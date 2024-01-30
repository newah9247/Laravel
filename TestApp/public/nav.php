<header>
    Noahs Portfolio
<header>
        <div class="snavbar">
            <nav>
                <ul>
                    <li><a href="index.php">About</a></li> <!--Done-->
                    <li><a href="contact.php">Contact</a></li> <!--Done-->
                    <li><a href="courses.php">Courses</a></li> <!--Course Descriptions-->
                    <li><a href="projects.php">Projects</a></li> <!--Work Term, Challenge NS 2023-->
                    <li><a href="examplework.php">Examples</a></li> <!--Bouncing Rupert - CSS and HTML based bouncing cat, Portfolio Project (Laravel, PostgreSQL and PHP)--> 
                    <li><a href="C:\Users\foodl\PortfolioWebsite\resources\views\auth\login.blade.php">Login</a></li> <!--PostgreSQL DB and Password, Resume on page and phone number-->
                </ul>
            </nav>
        </div>
</header>
</header> 

<style> 
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

header {
    text-align: center;
    color: black;
    background-color: #e8751a;
    padding-top: 5px;
    font-size: 50px;
    font-family: 'Montserrat', sans-serif;
}
/*Nav Styles*/
.snavbar nav {
    text-align: center;
    padding-top: 10px;
    padding-bottom: 15px;
    background-color: #e8751a;
}

.snavbar nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.snavbar nav li {
    display: inline-block;
    margin-left: 50px;
    position: relative;
}

.snavbar nav a {
    color: black;
    text-decoration: none;
    font-size: 25px;
    font-family: 'Open Sans', sans-serif;
}

.snavbar nav a:hover {
    color: black;
    background-color: #fda403;
    padding: 10px;
    border-radius: 15px;
}

.snavbar nav a::before {
    content: '';
    display: block;
    height: 4px;
    width: 50%;
    background-color: black;

    position: absolute;
    top: 0;
    width: 0%;

    transition: all ease-in-out 600ms;
}

nav a:hover::before {
    width: 100%;
}

.navigation{
    width: 100%;
    text-align: center;
}
</style>
