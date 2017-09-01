<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login-page_demo.css">
    <link rel="stylesheet" href="css/login-page_style.css">
    <link rel="stylesheet" href="css/login-page_responsive.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
    
</head>



<body>

<?php include("layouts/header_1.php"); ?>
<div class="login-page_container">


        <!--       Sign in Side      -->

        <div class="login-section page-side section-ope">
            <div class="section-page_intro">
                <img src="Image/signin-icon-black.png" alt="signin-icon">
                <p class="section-page-intro_title">Ingresa</p>
                
            </div>

            <div class="login-form-area">
                <p class="form-title">Ingresa</p>
                <div class="section-form">
                    <form class="login-form">
                        <label class="login-page_label">
                            <input class="login-page_input" type="email" name="email" autocomplete="off">
                            <span class="login-page_placeholder">Correo electronico</span>
                        </label>
                        <label class="login-page_label">
                            <input class="login-page_input" type="password" name="password">
                            <span class="login-page_placeholder">Contraseña</span>
                        </label>
                        <div class="login-section_submit">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google fa-fw"></i></a></li>
                            </ul>
                            <div class="login-page-submit-btn">
                                <input type="submit" name="submit-login" value="submit">
                            </div>
                        </div>
                        <div class="login-page_forget">
                            <a href="">Olvide mi contraseña?</a>
                        </div>
                    </form>

                    <form class="forget-form">
                        <p class="forget-title">Forget Your Password</p>
                        <label class="login-page_label">
                            <input class="login-page_input" type="email" name="email" autocomplete="off">
                            <span class="login-page_placeholder">Correo electronico</span>
                        </label>
                        <div class="login-section_submit">
                            <div class="login-page-submit-btn"><input type="submit" name="submit-login" value="submit"></div>
                        </div>
                  
              
                    </form>
                    
               
              
                      
                    
                </div>
            </div>
        </div>

        <!--       Sign up Side      -->

        <div class="signup-section page-side section-clos">
            <div class="section-page_intro">
                <img src="Image/signup-icon.png" alt="signup-icon">
                <p class="section-page-intro_title">Registrate</p>
            </div>

            <div class="signup-form-area">
                <p class="form-title">Registro</p>
                <div class="section-form">
                    <form class="signup-form">
                       <label class="login-page_label">
                            <input class="login-page_input" type="text" name="username" autocomplete="off">
                            <span class="login-page_placeholder">Usuario</span>
                        </label>
                        <label class="login-page_label">
                            <input class="login-page_input" type="email" name="email" autocomplete="off">
                            <span class="login-page_placeholder">Correo electronico</span>
                        </label>
                        <label class="login-page_label">
                            <input class="login-page_input" type="password" name="password">
                            <span class="login-page_placeholder">Contraseña</span>
                        </label>
                        <label class="login-page_label">
                            <input class="login-page_input" type="password" name="confirm password">
                            <span class="login-page_placeholder">Confirma contraseña</span>
                        </label>
                        

                        <div class="signup-section_submit">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google fa-fw"></i></a></li>
                            </ul>
                            <div class="login-page-submit-btn">
                                <input type="submit" name="submit-signup" value="submit">
                            </div>
                        </div>
                      <div class="g-recaptcha" data-sitekey="6LdpwCgUAAAAAFBSrqMqAIl1hg2SlcuYUaveSAxe"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/login-page_script.js"></script>
    <script type="text">
   g-recaptcha-response {
  "success": true|false,
  "challenge_ts": timestamp,  // timestamp of the challenge load (ISO format yyyy-MM-dd'T'HH:mm:ssZZ)
  "hostname": string,         // the hostname of the site where the reCAPTCHA was solved
  "error-codes": [...]        // optional
}
</script> 
</body>



</html>