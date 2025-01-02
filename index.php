<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include 'serverconnection.php'?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/2f939ab260.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
       <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title"> Professors Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Enter your registration number" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Our social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/JecrcUniversity/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://x.com/jecrcuniversity" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://jecrcuniversity.edu.in/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/school/jaipur-engineering-college-and-research-centre-jecrc-/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title"> Student Sign in</h2>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Our social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/JecrcUniversity/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://x.com/jecrcuniversity" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://jecrcuniversity.edu.in/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/school/jaipur-engineering-college-and-research-centre-jecrc-/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Seat Smarter</h3>
            <p>
              Welcome to future of exam seating!<br> Say goodbye to chaos and hello to organize brilliance.<br> Let's make exam day a breeze not a battle!    <br>Are you a Stuent?        </p>
            <button class="btn transparent" id="sign-up-btn">
               Sign in
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Welcome to hassle-free seating! </h3>
            <p>
            Get ready for a smooth, organized exam day.<br>
            Are you a Professor?
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register1.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>