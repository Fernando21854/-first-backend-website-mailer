<!DOCTYPE html>
<html>
    <title>Lab4</title>

    <head>
        LAB4 Register Your account<br><br>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="signup.php" method="post" >
            <div class="form_input" action="login.php">
                <input type="test" name="username" placeholder="Enter your user name"/>
            </div>
            <div class="form_input">
                <input type="password" name="password" placeholder="Enter your password"/>
            </div>
            <button>Sign Up</button>

            <p>Have you signed up before? Press LOG IN to continue. <a href="login.php">LOG IN</a>  </p>

            

        </form>
        
        <script type="text/javascript">
            $(document).ready(function() {
            $('#loginform').submit(function(e) {
             e.preventDefault();
         $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'login.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
           
            });


            $.ajax({
            type: "POST",
            url: 'index.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'index.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
     });

     $.ajax({
            type: "POST",
            url: 'server.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'server.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
        });

        $.ajax({
            type: "POST",
            url: 'signuppage2.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'signuppage2.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
        });
        $.ajax({
            type: "POST",
            url: 'signup.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'signup.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
        });


        $.ajax({
            type: "POST",
            url: 'mailer.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                
                if (jsonData.success == "1")
                {
                    location.href = 'mailer.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
        });
    });

});
       
        
</script>
        
    </body>
</html>
<?php

  //  $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 
?>


