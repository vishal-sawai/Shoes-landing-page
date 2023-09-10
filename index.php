<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneakers Shop</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Home Page -->
    <div id="home">
      <div class="home-page"></div>
    </div>

    <!-- About Section -->
    <section class="container" id="about">
      <div class="about-page">
        <div class="aboutImg">
          <img src="image/about shoes.jpg" alt="" srcset="" />
        </div>
        <div class="aboutInfo">
          <div class="adata">
            <h1>NIKE</h1>
            <h3>All Time Best Product In Sneakers</h3>

            <p>
              &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Ipsum, nulla
              voluptatum quod ipsam maxime mollitia voluptas! Tempora, excepturi
              dolore. Distinctio aut ex nobis quod blanditiis illum fugit
              aspernatur quaerat ratione!
            </p>
            <div class="orderProduct">
              <span style="font-weight: bold; font-size: 30px">Rs.75000</span>
              <button type="button">
                <i class="fa-solid fa-cart-shopping"></i>Order Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Section -->

    <section id="product" class="container">
      <div class="product-page">
        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes1.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Air Jordan 1 Retro High OG</h3>
            <p>Rs.16147.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>
        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes2.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Nike InfinityRN 4</h3>
            <p>Rs.14995.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>
        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes3.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Air Jordan 1 Low SE Craft</h3>
            <p>Rs.9777.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>

        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes4.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Jordan Nu Retro 1 Low</h3>
            <p>Rs.36999.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>

        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes5.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Air Jordan Legacy 312 Low</h3>
            <p>Rs.13999.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>

        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes6.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Air Jordan 1 Low OG</h3>
            <p>Rs.12795.00</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>

        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes7.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Nike Phantom GT2 Academy</h3>
            <p>Rs.8999</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>

        <div class="productCard">
          <div class="productImg">
            <img src="image/shoes8.png" alt="" srcset="" />
          </div>
          <div class="productAbout">
            <h3>Jordan Max Aura 5</h3>
            <p>Rs.2000</p>
            <button type="button">
              <i class="fa-solid fa-cart-shopping"></i>Order Now
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Contatct us -->

    <section id="contact" class="container">
      <div class="contact-page">
        <div class="contactForm">
          <form
            action=""
            method="post"
            name="myForm"
            onsubmit="return validateForm()"
          >
            <div class="inputGroup">
              <label for="">Full Name</label> <span class="formerror"> </span
              ><br />
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter Your Name"
              />
            </div>
            <div class="inputGroup">
              <label for="">Email</label> <span class="formerror"> </span><br />
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Enter Your Email"
              />
            </div>
            <div class="inputGroup">
              <label for="">Phone</label> <span class="formerror"> </span><br />
              <input
                type="tel"
                name="phone"
                id="phone"
                placeholder="Enter Your Phone"
              />
            </div>
            <div class="inputGroup">
              <label for="">Message</label> <span class="formerror"> </span
              ><br />
              <textarea
                style="height: 80px"
                name="msg"
                placeholder="Enter Your Message"
              ></textarea>
            </div>
            <div class="inputGroup">
              <button type="submit" name="contactbtnsubmit">Submit</button>
            </div>
          </form>
        </div>
        <div class="contactImg">
          <img src="image/contact.jpg" alt="" />
        </div>
      </div>
    </section>

    <!-- font aweosome -->
    <script
      src="https://kit.fontawesome.com/ff3c91d27a.js"
      crossorigin="anonymous"
    ></script>

    <script src="script.js"></script>
  </body>
</html>
