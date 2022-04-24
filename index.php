<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Battvelocity | Home</title>
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
  <div class="wrapper">
    <div class="title">
      <h1>Contact us <span class="close">X</span></h1>
    </div>
    <form action="" method="POST">
      <div class="contact-form">
        <div class="input-fields">

          <input type="text" class="input" placeholder="Name" name="name" />
          <input type="text" class="input" placeholder="Email" name="email" />
          <input type="text" class="input" placeholder="Phone" name="mobile" />
          <input type="text" class="input" placeholder="Subject" name="subject" />


        </div>
        <?php include_once "gettingResponse.php"; ?>
        <div class="msg">
          <textarea placeholder="Message" name="message"></textarea>
          <button class="btn" type="submit">send</button>
        </div>
      </div>
    </form>
  </div>

  <section id="main-section">
    <div class="container">
      <nav class="nav">
        <img src="images/logo.png" alt="" width="50px" height="50px" />
        <ul>
          <li><a href="index.php" class="nav-link">Home</a></li>
          <li><a href="#products" class="nav-link">Products</a>
          <div id="dropdowns">
          </div>
        </li>

          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#blog" class="nav-link">Blog</a></li>
          <li><a href="#contact" class="get-in-touch">Get in touch</a></li>
        </ul>
      </nav>
      <h1 class="banner-heading">
        Battvelocity! <br />
        Where focus goes energy flows.
      </h1>
      <a class="explore-btn" href="#objective">
        Explore<i class="bx bx-chevron-right" style="color: #ffffff"></i>
      </a>

      <div class="circle-container">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
  </section>
  <section class="About-container container" id="about">
    <h1 class="about-heading" data-aos="fade-down">About us</h1>
    <p class="about-p" data-aos="fade-down">
      We are emerging as a game changer in empowering a sustainable future
      with the highest performance and safest batteries for electric vehicles,
      homes, and critical applications
    </p>
    <p class="about-p-2" data-aos="fade-down">
      Battvelocity Technology Limited is capable of handling any energy
      storage need, anywhere in the world, from our highly automated advanced
      production facility in Delhi NCR, Greater Delhi, India. Our focus is on
      the growing demand for high-tech storage solutions in Stationary, E
      Mobility, Future & Smart Cities, commercial transportation and specialty
      applications. Using the brightest engineering minds in cutting-edge
      facilities, we help customers all over the world develop new energy
      storage applications and solutions based on proven lithium-ion chemistry
      battvelocity technology Limited Storage technology is viable, scalable
      large-format cell technology with manufacturing expertise, deep market
      knowledge and a wide range of strategic partners to help fuel our
      customers’ innovations, Knowledge and Market base.
    </p>
  </section>
  <div class="connect-ticket" >
    <div class="container">
      <span  data-aos="fade-down">Leading manufactural and exporter of world class batteries.
      </span>
      <button class="round-get-btn">Lets connect</button>
    </div>
  </div>

  <section class="container ob-container">
    <div class="img-container">
      <img src="images/background-5.jpg" alt="" class="background-img" />
      <div class="img-ctr" data-aos="fade-down">
        <div class="img-circle">
          <i class="bx bx-star"></i>
        </div>
        <div class="img-circle">
          <i class="bx bx-bulb"></i>
        </div>
        <div class="img-circle">
          <i class="bx bxs-hourglass-top" undefined></i>
        </div>
      </div>
    </div>
    <div class="object-container" id="objective" data-aos="fade-down">
      <div class="objective"  data-aos="fade-down">
        <h3>ENGINEERING SERVICES</h3>
        <p>
          Smart engineering and implementation of energy engineering projects.
        </p>
      </div>
      <div class="objective"  data-aos="fade-down">
        <h3>CUSTOMER SERVICES & SUPPORT</h3>
        <p>
          We support our customers in the AFTER-SALES phase, After the
          prototyping phases, the series life of your systems often requires
          tailor-made support by our after-sales teams.
        </p>
      </div>
      <div class="objective"  data-aos="fade-down">
        <h3>TRAINING PROGRAMME</h3>
        <p>
          Battvelocity in collaboration with renowned technical institutions
          around the world in Lithium-Ion Battery Systems space provide
          Training Program that is designed to provide our customers,
          distributors, representatives and the public, with a hands-on
          training experience to learn how lithium-ion battery systems are
          designed, developed and manufactured.
        </p>
      </div>
    </div>
  </section>
  <div class="basic-intro" data-aos="fade-down">
    <h2>Battvelocity Technology Limited</h2>
    <p>
      We hold all the required certifications, registrations and standards
      that assure quality, integrity, and compliance in par with global
      standards. Our in-house testing capabilities guarantee continuous
      improvement of our products. This improvement in products meet the
      emerging requirements of industry. We are the Best Manufacturer of
      Lithium Battery Packs in India.
    </p>
  </div>
  <hr />

  <section class="products-container" id="products" > 
    <div class="container">
      <h1 class="products-heading">Products</h1>
      <hr />
      <div class="products"  data-aos="fade-down">
        <div class="product">
          <img src="images/product-1.jpeg" alt="" />
          <h2>GREEN TRANSPORTATION</h2>
          <ul>
            <li>ELECTRIC CYCLE</li>
            <li>BUS</li>
            <li>LOGISTICS VEHICLE</li>
            <li>UNARMED PLANES</li>
            <li>RAIL</li>
            <li>SHIP</li>
          </ul>
        </div>
        <div class="product"  data-aos="fade-down">
          <img src="images/product-2.jpeg" alt="" />
          <h2>SMART ENERGY STORAGE</h2>
          <ul>
            <li>RENEWABLE ENERGY STORAGE</li>
            <li>GRID ENERGY STORAGE</li>
            <li>INDUSTRIAL & COMMERCIAL</li>
            <li>DATA CENTRE BACK UP</li>
            <li>POWER HOME ENERGY STORAGE</li>
          </ul>
        </div>
        <div class="product"  data-aos="fade-down">
          <img src="images/product-3.jpg" alt="" />
          <h2>LOW CARBON CONSTRUCTION</h2>
          <ul>
            <li>SOLAR STREET LIGHTS</li>
            <li>SOLAR HOME LIGHT SYSTEM</li>
            <li>UPS SYSTEMS</li>
            <li>MEDICAL EQUIPMENT’S</li>
            <li>MEDICAL WHEELCHAIR</li>
            <li>TELECOMMUNICATION</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="counter-exp">
    <div class="cout"  data-aos="fade-down">
      <b>8+</b>
      <p>years of experience</p>
    </div>
    <div class="cout"  data-aos="fade-down">
      <b>420+</b>
      <p>clients</p>
    </div>
    <div class="cout"  data-aos="fade-down">
      <b>2+</b>
      <p>Locations</p>
    </div>
    <div class="cout"  data-aos="fade-down">
      <b>500+</b>
      <p>products delivered</p>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer">
        <div class="introduction" data-aos="fade-down">
          <img src="images/logo.png" alt="" width="50px" height="50px">
          <h1>Battvelocity technology</h1>
          <p>
            Battvelocity Technology Limited is capable of handling any energy
            storage need, anywhere in the world, from our highly automated
            advanced production facility in Delhi NCR, Greater Delhi, India.
          </p>
        </div>
        <div class="quick-link" data-aos="fade-down">
          <h1>quick links</h1>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#products">products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#blog">blog</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
        </div>
        <div class="contact-us" data-aos="fade-down">
          <h1>Contact us</h1>
          <div>
            <i class="bx bxs-location-plus"></i>
            <p>battvelocity pvt ltd. baner - 411045</p>
          </div>
          <div>
            <i class="bx bxs-mobile"></i>
            <p>+917028224996</p>
          </div>
          <div>
            <i class="bx bxs-envelope"></i>
            <p>sales@battvelocity.com</p>
          </div>
        </div>
      </div>
    </div>
    <h3 class="last-line">All rights reserved @2022 Battvelocity Technology Pvt Ltd.</h3>
  </footer>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="main.js"></script>
  <script>
    AOS.init();

  </script>
</body>

</html>