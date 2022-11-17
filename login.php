<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CFS</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="stylesheet/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="stylesheet/about.css">
    <link rel="stylesheet" href="stylesheet/login.css">
    <link rel="stylesheet" href="stylesheet/nav.css">
    <link rel="stylesheet" href="stylesheet/acc.css">
    <link rel="stylesheet" href="stylesheet/form.css">
    <link rel="stylesheet" href="stylesheet/carousel.css">
</head>
</head>
<body>
    <div class="top-header">
        <p>
            <i class="fas fa-phone"> &nbsp;</i>
            +234 706 674 8876</p>
    
</div>

<nav>
    <ul class="menu">
        <a href="index.html"><img src="images/1.png" style="width:5rem" alt="logo" class="src"></a>
        <li class="item"><a href="commercial.html">Commercial</a></li>
        <li class="item has-submenu">
            <a href="residential.html">Residential</a>
        </li>
        <li class="item has-submenu">
            <a href="#">House Cleaning</a>
        </li>
        <li class="item"><a href="plans.html">Plans and Pricing</a></li>
        <li class="item"><a href="#">About</a>
        </li>
        <li class="item button"><a href="login.html">Log In</a></li>
        <li class="item button secondary"><a href="signup.html">Sign Up</a></li>
        <li class="toggle"><a href="#"><i class="fas fa-bars" style="color:black"></i></a></li>
    </ul>
</nav>
<!---------End of this section----->
<div class="start">
    <form name="Login" onsubmit="return loginForm()" oninput="return loginForm()" onreset="return Fname()">
       <h3>Log in </h3><br>
       <div class="main">
           <label for="firstname">Email:</label><br>
           <input type="text" name="email" id="first" placeholder="enter your email address"><br>
           <span id="error"></span><br>
           <label for="password">Password:</label><br>
           <input type="password" name="pass" required id="pass"  placeholder="enter password here"><br><br/>
           <span id="perror"></span><br>
           <button type="submit">Login</button><br><br/>
           <a href="#"><b>Forgot your Password?</b></a>
       </div>
   </form>
   <script src="login.js"></script>
</body>
</html>