<?php
function makeNavbar ($page){
    $navbar = "<navbar>\n
        <section class='navbar'>
            <div class='container'
                <div class='logo'>
                    <a href='index.html' title='Logo'>
                        <img src='../photos/Mr. jim's logo.svg' alt='Restaurant Logo' height='100px' width='100px'
                        class='img-responsive'>
                    </a>
                </div>

                <div class='topnav' id='myTopnav'>
                    <a href='index.html' class='active'>Home</a>
                    <a href='products.html'>Products</a>
                    <a href='categories.html'>Categories</a>
                    <a href='about-us.html'>About Us</a>
                    <a href='javascript:void(0);' class='icon' onclick='myFunction()'>
                    <i class='fa fa-bars'></i>
                    </a>
                </div>

                <div class='clearfix'></div>
            </div>
        </section>
    </navbar>\n";
    return $navbar;
}

$footer = "
?>