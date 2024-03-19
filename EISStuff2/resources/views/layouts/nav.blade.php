<nav>
    <img id="logo" src="{{ asset('/images/logo.png') }}" >
    <ul>
        <li><a href="">Entry Form</a></li>
        <li><a href="">Parade Form</a></li>
        <li><a href="">Vendor Form</a></li>
        <li><a href="">Sponsor Form</a></li>
    </ul>
</nav>

<style>
    #logo {
        width: 100px;
        height: 100px;
        vertical-align: middle; /* Align the image vertically */
        margin-right: 20px; /* Add some space to the right of the image */
    }

    nav {
        background-color: #B70F0A;
        color: white;
        display: flex; /* Use flexbox for layout */
        align-items: center; /* Align items vertically in the center */
        justify-content: space-between; /* Add space between logo and menu */
        padding: 2rem;    
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    nav li {
        display: inline-block;
        padding: 20px;
        position: relative;
    }

    nav a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 30px;
    }

    nav a:hover {
        color: rgb(187, 162, 116);
    }

    nav a::before {
        content: '';
        display: block;
        height: 5px;
        width: 100%;
        background-color: #EBEBEB;
        position: absolute;
        bottom: 0;
        width: 0%;
        transition: all ease-in-out 300ms;
    }

    nav a:hover::before {
        width: 85%;
    }
</style>
