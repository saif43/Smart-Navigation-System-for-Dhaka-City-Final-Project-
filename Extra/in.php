<html>

    <head>
    
        <title>UTS - Login</title>
        
        
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--Google Fonts Links-->
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        
        <!--Customized CSS Links-->
        <style type="text/css">
            @import url("css/login.css");
        </style>
        
    </head>
    <body>
        <div class="background-wrap">
          <div class="background"></div>
        </div>

        <form id="accesspanel" action="main_page.html" method="post">
            <h1 id="litheader">LOGIN</h1>
            <div class="inset">
                <p>
                    <input type="text" name="username" id="email" placeholder="Email">
                </p>
                <p>
                    <input type="password" name="password" id="password" placeholder="Password">
                </p>
                <input class="loginLoginValue" type="hidden" name="service" value="login" />
            </div>
            <p align="center" class="p-container">
                <input type="submit" name="Login" id="go" value="Submit" onclick="location.href = 'main_page.html';">
            </p>
        </form>
    </body>
    
    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>
         $(document).ready(function() {

            var state = false;

            //$("input:text:visible:first").focus();

            $('#accesspanel').on('submit', function(e) {

                e.preventDefault();

                state = !state;

                if (state) {
                    document.getElementById("litheader").className = "poweron";
                    document.getElementById("go").className = "";
                    document.getElementById("go").value = "Initializing...";
                }else{
                    document.getElementById("litheader").className = "";
                    document.getElementById("go").className = "denied";
                    document.getElementById("go").value = "Access Denied";
                }

            });

        });
    </script>
    
</html>