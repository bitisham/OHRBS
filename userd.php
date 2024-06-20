<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UDashBoard-HOME</title>

  <?php
  include 'links.php';
  ?>

  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
  </style>

</head>

<body class="bg-light">

  <?php
  include 'header.php';
  ?>

  <!--carousel-->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide">
          <img src="./pictures/158.jpg" class=w-75 d-block">
        </div>
        <div class="swiper-slide">
          <img src="./pictures/102.jpg" class=w-75 d-block">
        </div>
        <div class="swiper-slide">
          <img src="./pictures/111.jpg" class=w-75 d-block">
        </div>
        <div class="swiper-slide">
          <img src="./pictures/57.jpg" class=w-75 d-block">
        </div>
        <div class="swiper-slide">
          <img src="./pictures/158.jpg" class=w-75 d-block">
        </div>
        <div class="swiper-slide">
          <img src="./pictures/102.jpg" class=w-75 d-block">
        </div>
      </div>
    </div>
  </div>

  <!--check availability form-->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 ">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 ">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 ">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--Our Rooms-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./pictures/102.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$10 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilites mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                WiFi
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Room Heater
              </span>
            </div>

            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                4 Children
              </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./pictures/111.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$10 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilites mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                WiFi
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                4 Children
              </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="./pictures/3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$10 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilites mb-4">
              <h6 class="mb-1">Facilites</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                WiFi
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-dark text-white text-wrap">
                4 Children
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
      </div>
    </div>
  </div>

  <!--Our Facilites-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="./pictures/wifi (1).png" width="80px">
        <h5 class="mt-3">WIFI</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="./pictures/air-conditioner (1).png" width="80px">
        <h5 class="mt-3">AC</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="./pictures/telephone.png" width="80px">
        <h5 class="mt-3">Telephone</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="./pictures/balcony.png" width="80px">
        <h5 class="mt-3">Balcony</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilites>>></a>
      </div>
    </div>
  </div>
  <!--Testimonals-->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="./pictures/78.png" width="30px">
            <h6 class="m-0 ms-2">Sarah</h6>
          </div>
          <p>
            Using the hotel room booking system was a breeze! It made planning my vacation so much easier.
            I could easily compare prices, view amenities, and read reviews from other travelers.
            The whole process was smooth and efficient. Highly recommended!

          </p>

          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="./pictures/78.png" width="30px">
            <h6 class="m-0 ms-2">Lily</h6>
          </div>
          <p>
            I was skeptical about booking a hotel room online, but this system exceeded my expectations.
            The interface was user-friendly, and the website provided comprehensive information about each rooms.
            I appreciated the real-time availability updates, which saved me from any last-minute disappointments.
            I had a fantastic stay, thanks to this hassle-free booking experience.
          </p>

          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="./pictures/78.png" width="30px">
            <h6 class="m-0 ms-2">Jennifer</h6>
          </div>
          <p>
            I've been a frequent traveler for years, and I must say, this hotel room booking system is a game-changer.
            It offers a wide range of accommodations, and the filtering options helped me find the perfect room that
            suited my preferences and budget.
            The confirmation process was instant, and I felt at ease knowing my reservation was secure.
            Will definitely use it for my future trips.
          </p>

          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="./pictures/78.png" width="30px">
            <h6 class="m-0 ms-2">Sia</h6>
          </div>
          <p>
            Planning a group trip can be quite a challenge, but this booking system made it a breeze.
            We could easily search for rooms, ensuring everyone in our group was accommodated comfortably.
            The system's customer support was also responsive and helped us with any questions we had.
            Our vacation was memorable, thanks to this excellent service.
          </p>

          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>



      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
    </div>

    <? include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 35,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 2500,
          disableonInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
</body>

</html>