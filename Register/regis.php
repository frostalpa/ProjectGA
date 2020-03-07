


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" id="css-origin" href="style.css">
        <link rel="stylesheet" href="javast.js">
    </head>
    <body>
        <!--you can substitue the span of reauth email for a input with the email and
            include the remember me checkbox-->
            <div class="container">
                <div class="card card-container">
                    <form class="form-register">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <input type="name" id="inputName" class="form-control" placeholder="Name" required >
                        <input type="Adress" id="inputAddress" class="form-control" placeholder="address" required >
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block btn-register" type="submit">Register</button>
                    </form><!-- /form -->
                </div><!-- /card-container -->
            </div><!-- /container -->
    </body>
    </html>