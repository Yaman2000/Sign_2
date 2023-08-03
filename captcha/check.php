<div class="contact-form">
    <h1>Contact Us</h1>
        <p>Feel free to contact us and we will get back to you as soon as we can.</p>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <label for="phone">Phone Number:</label>
            <input type="number" name="phone" placeholder="Enter Your Phone Number" required>
            <label for="message">Message:</label>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            
            <div class="g-recaptcha" data-sitekey="6LfIqXEeAAAAAPO0Kzvp7Jz6mw3Mkgai1Mk5uSiB">
            </div>
            <input type="submit" value="Send" name="submit" class="submit-btn">
        </form>
        <div class="status">
            <?php
            if(isset($_POST['submit']))
            {
                $User_name = $_POST['name'];
                $phone = $_POST['phone'];
                $user_email = $_POST['email'];
                $user_message = $_POST['message'];

                $email_from = 'misbaneha2016@gmail.com';
                $email_subject = "New Form Submission";
                $email_body ="Name: $User_name.\n".
                             "Phone No: $phone.\n".
                             "Email Id: $user_email.\n".
                             "User Message: $user_message.\n";

                $to_email = "misbashaik@gmail.com";
                $headers = "From: $email_from \r\n";
                $headers .= "Reply-To: $user_email\r\n";

                $secretKey = "6LfIqXEeAAAAACbaLCiYAcKfTP_DV7ErKW1ogd9s";
                $responseKey = $_POST['g-recaptcha-response'];
                $UserIP = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

                $response = file_get_contents($url);
                $response = json_decode($response);

                if ($response->success)
                {
                    mail($to_email,$email_subject,$email_body,$headers);
                    echo "Message sent Successfully";
                }
                else
                {
                    echo "<span>Invalid Captcha, Please Try Again</span>";
                }
            }
            
            ?>

        </div>
    </div>








    <html>
    <head>
        <title>Contact Form Design</title>
        <link rel="stylesheet" href="stylecontact.css">
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&family=Cormorant:wght@700&family=Kaisei+Decol:wght@500&family=Padauk&family=Roboto+Condensed:ital,wght@1,300&family=Sarabun:wght@100&display=swap" rel="stylesheet">
        <script src="http://www.google.com/recaptcha/api.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="">INDIAN SIGN LANGUAGE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="twmplate.html">HOME</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="courses.html">COURSES</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="quiz.html">QUIZ</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="games.html">GAMES</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link active" href="Contact.html">CONTACT US</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about.html">ABOUT</a>
                      </li>
                  </ul>
              </div>


              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
              
          </div>
      </nav>

    <div class="contact-form">
    <h1>Contact Us</h1>
        <p>Feel free to contact us and we will get back to you as soon as we can.</p>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <label for="phone">Phone Number:</label>
            <input type="number" name="phone" placeholder="Enter Your Phone Number" required>
            <label for="message">Message:</label>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            
            <div class="g-recaptcha" data-sitekey="6LfIqXEeAAAAAPO0Kzvp7Jz6mw3Mkgai1Mk5uSiB">
            </div>
            <input type="submit" value="Send" name="submit" class="submit-btn">
        </form>
        <div class="status">
            <?php
            if(isset($_POST['submit']))
            {
                $User_name = $_POST['name'];
                $phone = $_POST['phone'];
                $user_email = $_POST['email'];
                $user_message = $_POST['message'];

                $email_from = 'misbaneha2016@gmail.com';
                $email_subject = "New Form Submission";
                $email_body ="Name: $User_name.\n".
                             "Phone No: $phone.\n".
                             "Email Id: $user_email.\n".
                             "User Message: $user_message.\n";

                $to_email = "misbashaik@gmail.com";
                $headers = "From: $email_from \r\n";
                $headers .= "Reply-To: $user_email\r\n";

                $secretKey = "6LfIqXEeAAAAACbaLCiYAcKfTP_DV7ErKW1ogd9s";
                $responseKey = $_POST['g-recaptcha-response'];
                $UserIP = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

                $response = file_get_contents($url);
                $response = json_decode($response);

                if ($response->success)
                {
                    mail($to_email,$email_subject,$email_body,$headers);
                    echo "Message sent Successfully";
                }
                else
                {
                    echo "<span>Invalid Captcha, Please Try Again</span>";
                }
            }
            
            ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>