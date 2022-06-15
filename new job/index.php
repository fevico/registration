<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@800&family=Lobster&family=Macondo&family=Roboto+Flex:opsz,wght@8..144,100&family=Signika+Negative:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
<div class = "box">

<form action ="validate.php" method ="POST">
    <div class="form-control">
        <h3>Create account</h3>
<label for="firstname">firstname</label>
<input type=text id=firstname name="firstname" placeholder="enter your firstname" required>

    <label for="Lastname">Lastname</label>
    <input type="text" id=Lastname name="Lastname" placeholder="Enter your lastname" requred>
    <br>
<label for="username">username</label>
<input type="text" id="username" name="username" placeholder ="username">
<br>
<label for="password">password</label>
 <input type="password" id="password" name="password" placeholder="password">
<br>
<label for="confirmpassword">confirmpassword</label>
<input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirm-password">
<br>
<label for="country">country</label>
<input type="text" id="country" name="country" placeholder="country">
<br>
<label for="Telno">Telno</label>
    <input type="text" id="Telno" name="Telno" placeholder="+18345987">
<br>
<br><br>
<input type="submit" value="create account">
<span class="sign-in">
    <a href="index.html">sign in</a></span>

</form>
</div>
        
</body>
</html>