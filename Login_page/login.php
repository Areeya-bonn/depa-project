<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="..\stylesheets\bootstrap.min.css">
    <link href="style_login.css" rel="stylesheet">
</head>

<body>
    <div class="header"></div><br>
    <div class="row">
        <div class="column middle" style="height:32em"><br><br>
            <div class="col-12">
                <h1 style="text-align:center">Sign in</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <form name=form1 method="post" action="checklogin.php">
                        <div class="row">
                            <div class="col-4" style="text-align:right;">
                                <label for="username">Username :</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7" style="height:3em">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" style="height:3em; width:20em">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4" style="text-align:right;">
                                <label for="password">Password :</label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-7" style="height:4em">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" style="height:3em; width:20em">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" style="height:3em; text-align: center;">
                                <input type="submit" name="Submit" value="Login" class="btn btn-primary" style="width:5em">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12" style="text-align:center;">Thai Summit Harness Public Company Ltd.</div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>