<!DOCTYPE html>
<html>

    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../resources/css/reset.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../resources/css/skeleton.css">
    </head>

    <body>
        <div class="row">
            <div class="four columns">
                <a href="FirstPage"><img id="logo" src="../../resources/logo.png" alt="The logo of the website 2 chefs hats and the word Cooking"></a>
                <div class ="six columns"
                     <div class="menu">

                        <form action="FirstPage">
                            <input type="submit" value="Home" />
                        </form>

                        <?php if (!$this->session->get('currentUser')) { ?>

                            <button onclick="document.getElementById('id01').style.display = 'block'" <p>Log in</p></button>


                        <?php } ?>

                        <?php if ($this->session->get('currentUser')) { ?>

                            <form action="logout.php">
                                <input type="submit" value="Log out" />
                            </form>
                        <?php } ?>


                        <form action="FirstPage">
                            <input type="submit" value="Featured recipes" />
                        </form>
                        <form action="calendar">
                            <input type="submit" value="Calendar" />
                        </form>
                    </div>
                </div>
                <div class="six columns">
                    <form class="form-signin" action="Welcome" method="POST">
                        <h2 class="form-signin-heading">Please Register</h2>
                        <h4> (No special characters) </h4>


                        <div class="input-group">
                            <span class="registration-input"></span>
                            <label for="inputUsername">Username</label>
                            <input type="text" name="username" id="inputText" placeholder="Username" pattern="[a-zA-Z1-9]{1,}" title="Please use only alphanumeric characters" required>
                        </div>

                        <div class="registration-input">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" pattern="[a-zA-Z1-9]{1,}" title="Please use only alphanumeric characters" required>
                        </div>

                        <div class="registration-input">
                            <label for="inputEmail">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                    </form>
                </div>
            </div>
            <?php include("login.php"); ?>
    </body>
