<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>

            <form id='login' action='form.php' method='post'>                    
                    <fieldset >                    
                    <legend>Login</legend>                   
                    <input type='hidden' name='submitted' id='submitted' value='1'/>                    
                    <label for='username' >UserName*:</label>                    
                    <input type='text' name='username' id='username'  maxlength="50" />              
                                 
                    <label for='password' >Password*:</label>                    
                    <input type='password' name='password' id='password' maxlength="50" />                  
                     
                    
                    <input type='submit' name='Submit' value='Submit' />                
                                          
                   </fieldset>
              </form>
                    
    </div>
</body>
</html>
<?php 
if(isset($_POST["username"]) && isset($_POST["password"])){
    echo "Username :".$_POST["username"];
}
else{
echo" ce parametre est vide ";
}
?>