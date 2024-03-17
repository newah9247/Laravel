<nav>
    <img href="logo.png">
    <ul>
        <li><a href="">Entry Form</a></li>
        <li><a href="">Parade Form</a></li>
        <li><a href="">Vendor Form</a></li>
        <li><a href="">Sponsor Form</a></li>
    </ul>
</nav>


<style>
    nav {
        background-color: #B70F0A;
        color: white;
        text-align: right;
        padding: .7rem;    
      
    }

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