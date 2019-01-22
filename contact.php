<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include './includes/header.php';  ?>
</head>

<body ng-app="myApp">

  <!-- Navigation -->
  <?php include './includes/navbar.php';  ?>
  <header>
    &nbsp;<br><br>
  </header>






  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>Consultas y Reservas</h1>
      <p>HACE TU RESERVA Y DISFRUTA DEL MEJOR LUGAR EN VILLA LA
        ANGOSTURA.</p>



      <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form">
                  <div class="md-form">
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="name" class="">Your name</label>
                  </div>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form">
                  <div class="md-form">
                    <input type="text" id="email" name="email" class="form-control">
                    <label for="email" class="">Your email</label>
                  </div>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>

          <div class="center-on-small-only">
            <a class="btn btn-primary" onclick="validateForm()">Send</a>
          </div>
          <div class="status" id="status"></div>
          <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
          <img src="images/logo_1.png">
        </div>
        <!--Grid column-->

      </div>



    </div>
  </section>





  <!-- Footer -->
  <footer class="py-5 bg-dark white">
    <div class="container">
      <div class="row text-white">
        <div class="col-sm-4 text-center">
          <img src="./images/ribbon sp.png">
          <img src="./images/logo_marca_agua.png">
        </div>
        <div class="col-sm-4 text-center">
          <address>
            <h3> Consultas y Reservas</h3>
            <br>Camino del cóndor 1055
            <br>Villa La Angostura
            <br>
          </address>
          <address>
            <span title="Phone">Tel:</span>
            (+5411) 4921-5900
            <br>
            <a>info@patagoniacamelot.com</a>
          </address>
        </div>

        <div class="col-sm-4 text-center">
          <address>
            <h3>Data Fiscal</h3> <br>
            <img src="./images/qrcode.jpg">
          </address>
        </div>

      </div>
      <p class="m-0 text-center text-white">@ 2018 Patagonia Camelot-Powered By <br>
        <a target="_blank" class="footLink" rel="nofollow" href="https://e-zero.com.ar/"> Copyright &copy;
          e-zero.com.ar</a></p>


    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="./main.js"></script>


  <script>

    function validateForm() {
      // var x =  document.getElementById('name').value;
      // if (x == "") {
      //     document.getElementById('status').innerHTML = "Name cannot be empty";
      //     return false;
      // }
      // x =  document.getElementById('email').value;
      // if (x == "") {
      //     document.getElementById('status').innerHTML = "Email cannot be empty";
      //     return false;
      // } else {
      //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      //     if(!re.test(x)){
      //         document.getElementById('status').innerHTML = "Email format invalid";
      //         return false;
      //     }
      // }
      // x =  document.getElementById('subject').value;
      // if (x == "") {
      //     document.getElementById('status').innerHTML = "Subject cannot be empty";
      //     return false;
      // }
      // x =  document.getElementById('message').value;
      // if (x == "") {
      //     document.getElementById('status').innerHTML = "Message cannot be empty";
      //     return false;
      // }
      //get input field values data to be sent to server
      document.getElementById('status').innerHTML = "Sending...";
      formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'subject': $('input[name=subject]').val(),
        'message': $('textarea[name=message]').val()
      };


      $.ajax({
        url: "mail.php",
        type: "POST",
        data: formData,
        success: function (data, textStatus, jqXHR) {

          $('#status').text(data.message);
          if (data.code) //If mail was sent successfully, reset the form.
            $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR, textStatus, errorThrown) {
          $('#status').text(jqXHR);
        }
      });



    }
  </script>




</body>

</html>