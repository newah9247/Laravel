<nav>
    <img href="logo.png">
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Work Examples</a></li>
        <li><a href="">Resume</a></li>
        <li><a href="">Narrative</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</nav>


<style>
    nav {
        background-color: #B70F0A;
        color: white;
        text-align: right;
        padding: .5rem;    
    }

    navbar styles
    nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav li {
            display: inline-block;
            margin-left: 70px;
            padding-top: 20px;
            padding-bottom: 20px;
            position: relative;
        }

        nav a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 20px;
        }

        nav a:hover {
            color: rgb(187, 162, 116);
        }

        nav a::before {
            content: '';
            display: block;
            height: 5px;
            width: 100%;
            background-color: black;

            position: absolute;
            top: 0;
            width: 0%;

            transition: all ease-in-out 300ms;
        }

        nav a:hover::before {
            width: 100%;
        }
</style>