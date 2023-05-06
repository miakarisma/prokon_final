<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login_style.css">
    <title>Login</title>
</head>
<body>
    <div class="sign-in">
        <div class="background">
          <a href="../index.html">
            <img
            alt=""
            class="rectangle-27"
            src="https://static.overlay-tech.com/assets/d6c8c6f4-ad26-4a8b-a09d-659c87a7602a.png"
            />
          </a>
          <p class="design-your-dream-space-with-our-expert">
            Design your dream space with our expert consultants.
            From concept to completion, we&#039;ll work with you
            to bring your vision to life and create a space that
            reflects your unique style and personality
          </p>
        </div>
        <div class="flex-wrapper-four">
          <div class="login">
            <div class="title">
              <p class="l-ogin">Login</p>
              <p class="please-enter-your-login-details-to-sign">
                Please enter your login details to sign in
              </p>
              <p class="text-center">
              <?php if(!empty(session()->getFlashdata('error'))): ?>
                  <div class="alert alert-waring aler-dismissible fade show" role="alert">
                      <?php echo session()->getFlashdata('error');?>
                  </div>
              <?php endif; ?>
              </p>
            </div>

            <!-- Start form -->
            <form method="POST" action="<?= base_url(); ?>/login/process">
            <!-- Start TextField Email -->
            <div class="texfield-email">
                <input class="rectangle-28" type="email" id="email" name="email" placeholder="Email">
              <div class="flex-wrapper-one">
                <p class="e-mail">e-mail</p>
              </div>
            </div>
            <!-- End TextField Email -->

            <!-- Start TextField Password -->
            <div class="texfield-pass">
              <input class="rectangle-28" type="password" id="password" name="password" placeholder="password">
              <div class="flex-wrapper-two">
                <p class="password">Password</p>
              </div>
            </div>
            <!-- End TextField Password -->
            
            <!-- Start Check Keep Login -->
            <div class="check">
              <div class="keep-me">
                <div class="material-symbolscheck-box">
                  <label>
                    <input type="checkbox" name="agree" value="yes">
                  </label>
                </div>
                <p
                  class="please-enter-your-login-details-to-sign">
                  Keep me logged in
                </p>
              </div>
              <!-- Start forgot password -->
              <a href="index.html">
                <p class="forgot-password">Forgot password?</p>
              </a>
              <!-- End forgot password -->
            </div>
          </div>
          <!-- End Check Keep Login -->

          <!-- Button Login -->
          <a href="index.html">
            <button class="login-bar" type="submit">
              <p style="color: white;">Login</p>
            </button>
          </a>
        </form>
        <!-- End form -->

        <!-- Start dont-have-an-account 
        or forgot password -->
          <div class="check-two">
            <p class="dont-have-an-account">
              Don't have an account?
            </p>
            <a href="sign-up.html">
            <p class="forgot-password">Sign up</p>
            </a>
          </div>
          <!-- Start dont-have-an-account
          or forgot password -->

          <!-- Start Company -->
          <div class="out">
            <div class="line-1"></div>
            <div class="flex-wrapper-three">
              <p class="pass">madju studio design</p>
            </div>
          </div>
          <!-- End Company -->

        </div>
      </div>
</body>
</html>