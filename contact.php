<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UDashBoard-CONTACT US</title>
  <?php
  include 'links.php';
  ?>

</head>

<body class="bg-light">
  <?php
  include 'header.php';
  ?>
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Your satisfaction is essential to us, and we are committed to making your experience
      with our platform smooth and enjoyable.
      <br> Whether you need help with a booking, want to provide feedback, or have any other inquiries, don't hesitate
      to get in touch.
    </p>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
          <h5>Call us</h5>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+977-9803300596
          </a>
          <br>
          <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+977-98412345678
          </a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto: bitisham99@gmail.com"
            class="d-inline-block mb-2 text-decoration-none text-dark">bitisham99@gmail.com
          </a>

          <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>Twitter</a>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>Facebook</a>
          <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i>Instagram</a>

        </div>
      </div>



      <div class="col-lg-6 md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg mt-3 -shadow-none">SEND</button>





          </form>

        </div>
      </div>
    </div>
  </div>
  </div>



  <?php
  include 'footer.php';
  ?>
</body>

</html>