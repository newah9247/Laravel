<nav>
    <ul>
        <li><a href="{{ route('home') }}">home</a></li>
        <li><a href="{{ route('github') }}">github</a></li>
        <li><a href="{{ route('projects') }}">projects</a></li>
        <li><a href="{{ route('resume') }}">resume</a></li>
        <li><a href="{{ route('contact') }}">contact</a></li>
    </ul>
</nav>

<style>
    body {
        margin: 0;
    }

    nav {
        color: black;
        display: flex; /* Use flexbox for layout */
        justify-content: center;
        padding: 2rem;    
    }

    nav ul {
        list-style: none;4
        
    }

    nav li {
        display: inline-block;
        padding: 20px;
        position: relative;
        padding-left: 50px;
    }

    nav a {
        color: rgb(245, 112, 64);
        text-decoration: none;
        font-size: 30px;
    }

    nav a:hover {
        color: black;
    }

    nav a::before {
        content: '';
        display: block;
        height: 5px;
        width: 100%;
        background-color: rgb(245, 112, 64);
        position: absolute;
        bottom: 0;
        width: 0%;
        transition: all ease-in-out 300ms;
    }

    nav a:hover::before {
        width: 75%;
    }
</style>
