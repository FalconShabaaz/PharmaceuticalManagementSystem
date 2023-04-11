<?php
    session_start();
    $sessionId = $_SESSION['id'] ?? '';
    $sessionRole = $_SESSION['role'] ?? '';
    if ( $sessionId && $sessionRole ) {
        header( "location:index.php" );
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Dashboard</title>
</head>

<body>

    <!--------------------------------- Main section -------------------------------->
    <section class="main"><marquee behavior="alternate" direction="left" width="100%" style="color:red;font-family:verdana;margin-top:5px;padding:2px;text-align:center;"><span style="font-weight:40px;text-decoration:underline;">GUIDELINES:</span>Get vaccinated as soon as it’s your turn and follow local guidance on vaccination.
Keep physical distance of at least 1 metre from others, even if they don’t appear to be sick. Avoid crowds and close contact.Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.
Clean your hands frequently with alcohol-based hand rub or soap and water.Cover your mouth and nose with a bent elbow or tissue when you cough or sneeze. Dispose of used tissues immediately and clean hands regularly. 
If you develop symptoms or test positive for COVID-19, self-isolate until you recover.</marquee>
    <img src="assets/img/wallpaper.jpg" alt="background"
width="100%" height="100%">
        <div class="container">
          <div class="main__form">
                <div class="main__form--title text-center">Log In</div>
                <form action="login_core.php" method="GET">
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-envelope left"></i>
                                <input type="text" name="email" placeholder="Email" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="password" placeholder="Password" required>
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-male left"></i>
                                <select name="role" id="Role">
                                    <option value="admins">Admin</option>
                                    <option value="managers">Manager</option>
                                    <option value="pharmacists">Pharmacist</option>
                                    <option value="salesmans">Salesman</option>
                                </select>
                            </label>
                        </div>
                            <input type="hidden" name="action" value="login">
                            <?php if ( isset( $_REQUEST['error'] ) ) {
                                    echo "<h5 class='text-center' style='color:red;'>Email, Password & Role Doesn't match Or Something is Wrong</h5>";
                            }?>
                        <div class="col col-12">
                        <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------------------------- #Main section -------------------------------->



    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
