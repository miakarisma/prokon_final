<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sign_upStyle.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="sign-up-two">
        <div class="background">
          <a href="../index.html">
            <img
            alt=""
            class="rectangle-27"
            src="https://static.overlay-tech.com/assets/6b76cdd1-b381-4487-b947-4b2786c850de.png"
            />
          </a>
          <p class="design-your-dream-space-with-our-expert">
            Design your dream space with our expert consultants.
            From concept to completion, we'll work with you
            to bring your vision to life and create a space that
            reflects your unique style and personality
          </p>
        </div>
        <div class="sign">
          <div class="login">
            <div class="title">
              <p class="signup">Signup</p>
              <p class="join-us-and-enjoy-exclusive-benefits">
                Join us and enjoy exclusive benefits!
              </p>
            </div>

          <!-- Start form -->
            <form method="POST" action="index.html">
              <!-- Start textfield fullname -->
              <div class="texfield-fullname">
                <input class="rectangle-28" type="text" id="fullname" name="fullname" placeholder="Please enter your name">
                <div class="flex-wrapper-two">
                  <p class="full-name">Full Name</p>
                </div>
              </div>
              <!-- End textfield fullname -->

              <!-- Start textfield email -->
              <div class="texfield-email">
                <input class="rectangle-28" type="email" id="email" name="email" placeholder="Please enter your E-mail">
                <div class="flex-wrapper-one">
                  <p class="full-name">e-mail</p>
                </div>
              </div>
              <!-- End textfield email -->

              <!-- Start TextField Password -->
              <div class="texfield-pass">
                <input class="rectangle-28" type="password" id="password" name="password" placeholder="Please enter your password">
                <div class="flex-wrapper-three">
                  <p class="full-name">Password</p>
                </div>
              </div>
              <!-- End TextField Password -->

              <!-- Start Check -->
              <div class="keep-me">
                <div class="material-symbolscheck-box">
                  <label>
                    <input type="checkbox" name="agree" value="yes">
                  </label>
                </div>
                <p class="i-agree-to-the-terms-of-service-and-priv">
                  <strong 
                  class="i-agree-to-the-terms-of-service-and-priv-emphasis-0">
                    I agree to the                  
                  </strong>
                  <a href="index.html">
                    Terms of Service
                  </a>
                  <strong 
                  class="i-agree-to-the-terms-of-service-and-priv-emphasis-0">
                    and 
                  </strong>
                  <a href="index.html">
                    Privacy Policy
                  </a>
                </p>
              </div>
              <!-- End Check -->
            </div>

            <!-- Start Button Signup -->
            <a href="index.html">
              <button class="signup-bar" type="submit">
                <p style="color: white;">Sign Up</p>
              </button>
            </a>
            <!-- End Button Signup -->
          </form>
          <!-- End form -->

          <!-- Start Check Member -->
          <div class="check">
            <p class="already-member">Already member?</p>
            <a href="login.html">
              <p class="log-in">Log in</p>
            </a>              
          </div>
          <!-- End Check Member -->

          <!-- Start Company -->
          <div class="out">
            <div class="line-1"></div>
            <div class="flex-wrapper-four">
              <p class="pass">madju studio design</p>
            </div>
          </div>
          <!-- End Company -->

        </div>
      </div>
</body>
</html>