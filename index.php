<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">

        <link rel="stylesheet" href="styles.css">
       
       <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6XZG_uM0PIcKLAhQRaU98-m5YPtS7eBA&callback=initMap">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    </head>
    <body>
            <div class ="logo-cont">
            <img src="https://img.freepik.com/premium-photo/korean-street-food-stall-night-market-offering-tteokbokki-fish-cake-gimbap_1111209-86790.jpg" alt="Stall logo" class="logo-img">
            </div>
         <section class="heading">
            <h1 class="title">Night Stall</h1>
         </section>
         <header>
        
           <div class="nav">
                    <a href="#startmain">Home</a>
                    <a href="#about">about</a>
                    <div class="dropdown">
                        <button class="button"> Menu</button>
                        <div class="dropdown-content">
                            <a href="#fast-food">Fast Food</a>
                            <a href="#dinner">Dinner Rice Meal</a>
                            <a href="#health_choice">Hygienic & Healthy Choices</a>
                            <a href="#diet">Meals for Patients & Diet Needs</a>
                        </div>
                    </div>


                    <div class="rightbar">
                        <a href="#services">Services</a>
                        <a href = "#signin"> Register Now to Grap the Crisp</a>
                    </div>

                   
            </div>
        </header>

        <div id = "startmain" class="content">
            <h2 class ="head-cont"> "Late-Night Cravings? Welcome to Night Stall!"</h2>
            <p class ="para1">At Night Stall, we bring you delicious, hygienic, and soul-satisfying meals that suit every craving, whether it's a late-night snack or a wholesome dinner. Here's what we serve:</p>
          
        </div>

         <section id="fast-food" >
            <h2  class="head-cont">🌭 Fast Food</h2>
           <div class = "ff-content">
            <p >
                Our fast food is made fresh and hot – perfect for a quick bite on the go or a midnight craving!
                <br>
                Items include:
                <li>
                Crispy French Fries 🍟</li>
                 <li>
                Cheesy Burgers 🍔</li>

              <li>Spicy Paneer Rolls 🌯</li>

               <li> Chicken Nuggets 🐔</li>

               <li> Veg & Non-Veg Momos 🥟</li>
              </p>
             

                Why customers love it: Affordable, freshly made, and served in minutes!
                </div>
            
                <div class ="ff-button">
            <button id ="togglebut" class = "ff-but" onclick="toggleImages('fastimages' , this)" >View More</button> 
                </div>
            <div  id="fastimages" class = "img-container"  >
                <img src="https://img.freepik.com/premium-photo/french-fries-delicious-veg-burger-combo_758367-61530.jpg" alt ="burger">
                <img src="https://tse1.mm.bing.net/th?id=OIP.iPvazX4IibUx0rDmnVR4egHaFc&pid=Api&P=0&h=180" alt = "french fries">
                <img src="https://spicecravings.com/wp-content/uploads/2020/12/Paneer-kathi-Roll-6.jpg" alr="panner roll">
                <img src="https://c8.alamy.com/comp/C2MMTN/a-thai-woman-laying-out-chicken-nuggets-and-french-fries-on-a-market-C2MMTN.jpg" alt="checken nuggets">
                <img src="https://tse3.mm.bing.net/th?id=OIP.iqfhAx7kNoW5p9jeFWjFgwHaKk&pid=Api&P=0&h=180" alt="veg-n-n momos">
                <img src="https://tse3.mm.bing.net/th?id=OIP.mR3BJyBBQuz2mV5nVqDjZwHaFj&pid=Api&P=0&h=180"  alt="burger">
            </div>
         </section>

         <section id="dinner" >
            <h2 class="head-cont" >🍚 Dinner Rice Meals</h2>
            <div class = "ff-content">
            <p>
                Comfort food that feels like home – served hot every night with a variety of flavorful options.<br>
Choices include:<br>
<br>
<li>Chicken Biryani & Veg Biryani 🍗🍛 </li>

<li>Jeera Rice with Dal Tadka 🍲</li>

<li>Egg Fried Rice 🍳</li>

<li>South Indian Meals (Sambar, Rasam, Rice) 🍛</li>
<br>

Why customers love it: Generous portions, perfectly spiced, and satisfying!


            </p>
            </div>

             <div class ="ff-button">
            <button id ="togglebut" class = "ff-but" onclick="toggleImages('dinnerimages' , this)" >View More</button> 
                </div>
            <div  id="dinnerimages" class = "img-container"  >
                <img src="https://tse4.mm.bing.net/th?id=OIP.JVoSIi6sY7GvN713CljmvQHaFj&pid=Api&P=0&h=180" alt ="checken-bir">
                <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/12/veg-biryani-vegetable-biryani.jpg" alt = "veg-bir">
                <img src="https://tse2.mm.bing.net/th?id=OIP.tyf358WOD6Hg2AgLjuXUEAHaEK&pid=Api&P=0&h=180" alr="egg-fr">
                <img src="https://tse4.mm.bing.net/th?id=OIP.GjIwCh89aXCNSbCMbriWkwHaE7&pid=Api&P=0&h=180" alt="southindian meals">
                
            </div>


         </section>

         <section id="health_choice" >
          <h2 class="head-cont">🥗 Hygienic & Healthy Choices</h2>
          <div class="ff-content">
            <p>We care for your health and hygiene. Our meals are prepared in a clean kitchen with fresh ingredients and no compromise on quality.<br>


Options include:

<li>Grilled Sandwiches 🥪</li>

<li>Fresh Fruit Bowls 🍎🍌</li>

<li>Multigrain Wraps 🌯</li>

<li>Low-oil Paratha Meals</li><br>

Why customers love it: Tasty, guilt-free food that’s good for the body.

            </p>
          </div>
<div class ="ff-button">
            <button id ="togglebut" class = "ff-but" onclick="toggleImages('healthimages' , this)" >View More</button> 
                </div>
            <div  id="healthimages" class = "img-container"  >
                <img src="https://www.madhuseverydayindian.com/wp-content/uploads/2022/10/bombay-grilled-sandwich-500x500.jpg" alt ="sandwich">
                <img src="https://tse2.mm.bing.net/th?id=OIP.TWA3WKUz_gdszY_1os0cCQHaFE&pid=Api&P=0&h=180" alt = "fruit-bowls">
                <img src="https://tse2.mm.bing.net/th?id=OIP.obeo5XNeCDjxqfM5cBBfDwHaHa&pid=Api&P=0&h=180" alr="multigrain">
                <img src="https://tse3.mm.bing.net/th?id=OIP.Ex8epXl_stwwqex9KzGIWwHaFU&pid=Api&P=0&h=180" alt="parathass">
                
            </div>
         </section>

<section id="diet">
          <h2 class="head-cont">🍵 Meals for Patients & Diet Needs</h2>
          <div class="ff-content">
            <p>Specially curated meals for people recovering from illness, following a diet, or just seeking something simple and nutritious.<br>


Options include:

<li>Khichdi (moong dal + rice) 🥣</li>

<li>Steamed Vegetables 🥦</li>

<li>Clear Vegetable/Chicken Soup 🍲</li>

<li>Boiled Egg & Banana Combos</li><br>

Why customers love it: Easy to digest, light on the stomach, and doctor-friendly.

            </p>
          </div>
<div class ="ff-button">
            <button id ="togglebut" class = "ff-but" onclick="toggleImages('dietimages' , this)" >View More</button> 
                </div>
            <div  id="dietimages" class = "img-container"  >
                <img src="https://tse4.mm.bing.net/th?id=OIP.V8vokePV47BAZh3MksES-gAAAA&pid=Api&P=0&h=180" alt ="moongdal">
                <img src="https://tse1.mm.bing.net/th?id=OIP.Oa_XdpO-beKcqQfaQtdDowHaHa&pid=Api&P=0&h=180" alt = "steamed veg">
                <img src="https://tse4.mm.bing.net/th?id=OIP.9x_KjL8M9hTl0T1myJUHdQHaEK&pid=Api&P=0&h=180" alr="veg - soup">
                <img src="https://tse2.mm.bing.net/th?id=OIP.SFWCz_n5hBLtXAXWkdFlngHaE8&pid=Api&P=0&h=180" alt="egg-banana">
                
            </div>

         </section>
         <br>
        

         <div class="time">
          <p class="timings">
            🕘 Open every evening from 6 PM to 2 AM<br>
📍 Find us near [Gandhi statue , Fountain Plaza]<br>
❤️ We believe in clean food, full hearts, and happy stomachs!<br>
          </p>
         </div>
<br>
         
<section id="about">
  <h2 class="about-head">About Our Night Stall</h2>

  <p>
    Our night stall has been a beloved local food stop for the past <strong>7 years</strong>, serving hot, fresh meals to late-night food lovers. We have a dedicated team of <strong>5 skilled workers</strong> who bring not just experience, but also passion to the food they prepare. All our workers are from nearby towns and villages, and most have been with us since the beginning — some with over <strong>10 years of food industry experience</strong>. Their combined efforts help us maintain both speed and quality, even during busy hours.
  </p>

  <h3>What Makes Our Night Stall Special?</h3>
  <ul>
    <li>🍔 A diverse menu including fast food, rice meals, hygienic food, and even meals for patients.</li>
    <li>⏰ Open till late night to serve students, workers, and night shift employees.</li>
    <li>🧑‍🍳 Experienced and friendly staff who ensure quality and quick service.</li>
    <li>🧼 Clean cooking practices and safe packaging, even for medical diets.</li>
  </ul>

  <h3>Benefits of Having a Night Stall</h3>
  <p>
    A night stall not only fills hungry stomachs but also creates employment opportunities, supports local farmers through ingredient sourcing, and provides a reliable food option when most places are closed. It’s a lifeline for late workers, students, travelers, and hospital visitors. Our stall has become more than just a food outlet — it's a part of the community.
  </p>
  <p><strong>Only Cash On Delivery For Online Orders</strong></p>

  <div class="add">
  <div class ="stall-add">
    <h3>📍 Stall Address</h3>
  <p>
    <strong> Night Stall</strong><br>
    <a href="#">
    Opposite ABC Hospital,<br>
    Gandhi Road, Near Bus Stand,<br>
    Chennai – 600001, Tamil Nadu</a>
  </p>
  </div>
  </div>
  <br>

  <div class="viewstall">
    <p>Get To Know About Out Stall</p>
    <button id="togglebut" onclick="toggleImages('stall-image' , this)">View More</button>
    <div id="stall-image" class="img-container">
      <img src="https://tse3.mm.bing.net/th?id=OIP.IQkq6eiaWcOzGFBn0tvDxAHaFc&pid=Api&P=0&h=180" alt="open-sit">
      <img src="https://c8.alamy.com/comp/D7D4Y7/night-stall-selling-seafood-in-the-indian-market-yangon-myanmar-D7D4Y7.jpg" alt="customer buy">
      <img src="https://tse4.mm.bing.net/th?id=OIP.um7copjE-n3j0ZIfbzgaCAHaFc&pid=Api&P=0&h=180">
      <img src="https://tse3.mm.bing.net/th?id=OIP.gjVSxtO1SEsaBDZHjWyFBwHaL4&pid=Api&P=0&h=180">
      <img src="https://tse4.mm.bing.net/th?id=OIP.UWyh1mWgMOr-v4PLcn01agHaE7&pid=Api&P=0&h=180">
    </div>
  </div>
</section>

<br>


        <section id="services">
            <h2 class ="about-head">Our Services</h2>
            <div class="service-box">
                <h3>1️⃣ On-Spot Buying</h3>
                <ul class="menu-list">
      <li>Burger - ₹80</li>
      <li>French Fries - ₹50</li>
      <li>Chicken Nuggets - ₹100</li>
      <li>Veg Momos - ₹70</li>
      <li>Rice & Curry - ₹120</li>
    </ul>
            </div>
       
<br>
        <div class="service-box">
            <h3>2️⃣ Online Ordering</h3>
            <form id="orderfrom">
                <label><input type="checkbox" name="item" value="Burger-80"> Burger - ₹80</label><br>
                <label><input type="checkbox" name="item" value="French Fries-50"> French Fries - ₹50</label><br>
                <label><input type="checkbox" name="item" value="Chicken Nuggets-100"> Chicken Nuggets - ₹100</label><br>
                <label><input type="checkbox" name="item" value="Veg Momos-70"> Veg Momos - ₹70</label><br>
                <label><input type="checkbox" name="item" value="Rice & Curry-120"> Rice & Curry - ₹120</label><br>
                <br>
                <button type="button" onclick="placeOrder()">Place Order</button>
            </form>

            <div id="ordersummary"></div>
            <br>
            <div id="map"></div>
        </div>
         </section>
<br>
<div id = "register">
<section id="signup">
  <h1 class="about-head">Registration Form</h1>
  <form id="form-signup" action ="register.php" method="POST">
    <label for="first-name">First Name</label>
    <input type="text" placeholder="First-Name"  name="first-name" class="textbox">
    <br>
    <br>
    <label for="last-name">Last Name</label>
    <input type="text" placeholder="Last-Name"  name="last-name" class="textbox">
    <br>
    <br>
    <label for="email">Email Id</label>
    <input type="email" placeholder="Email"  name="email" class="textbox">
    <br>
    <br>
    <label for="password">Password</label>
    <input type="password" placeholder="password"  name="password" class="textbox">
<br>
<br>
 <button name="signUp" id="upbutton">Sign Up</button>
 <br>
<h1>----OR----</h1>
<div class = "social-login">
  <p>Sign Up With :</p>
  <div class="social-icons">
    <a href="https://accounts.google.com/signup" target="_blank"><i class="fab fa-google"></i></a>
    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
  </div>
</div>
<div class="signinif">
  <p>Already have an account? <a href="#" id="goto-login" >Sign In </a></p>
  <br>
  <br>
</div>
  </form>
</section>
</div>

<br>
<br>
<div id = "login">
<section id="signin">

  <h1 class="about-head" > Login </h1>
  <form id="form-signin" action="register.php" method="POST">
   
    <label for="email">Email Id</label>
    <input type="email" placeholder="Email"  name="email" class="textbox">
    <br>
    <br>
    <label for="password">Password</label>
    <input type="password" placeholder="password"  name="password" class="textbox">
<br>
<br>
 <button name="signIn" id="inbutton">Sign In</button>
 <br>
<h1>----OR----</h1>

<div class = "social-login">
  <p>Sign In With :</p>
  <div class="social-icons">
    <a href="https://accounts.google.com/signup" target="_blank"><i class="fab fa-google"></i></a>
    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
  </div>
</div>
<div class="signupif">
  <p>Not Yet Regsitered ? <a href="#" id="goto-signup" >Sign Up </a></p>
  <br>
</div>
  </form>
</section>
</div>


<!-- SIGN UP FORM -->
<!-- <div id="register" style="display: none;">
  <section id="signup">
    <h1 class="about-head">Registration Form</h1>
    <form id="form-signup">
      <label for="first-name">First Name</label>
      <input type="text" placeholder="First-Name" name="first-name" class="textbox"><br><br>

      <label for="last-name">Last Name</label>
      <input type="text" placeholder="Last-Name" name="last-name" class="textbox"><br><br>

      <label for="email">Email Id</label>
      <input type="email" placeholder="Email" name="email" class="textbox"><br><br>

      <label for="password">Password</label>
      <input type="password" placeholder="password" name="password" class="textbox"><br><br>

      <button id="upbutton">Sign Up</button><br>

      <h1>----OR----</h1>
      <div class="social-login">
        <p>Sign Up With :</p>
        <div class="social-icons">
          <a href="https://accounts.google.com/signup" target="_blank"><i class="fab fa-google"></i></a>
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
      </div>

      <div class="signinif">
        <p>Already have an account? <a href="#" id="goto-login">Sign In</a></p><br><br>
      </div>
    </form>
  </section>
</div>
-->
<!-- SIGN IN FORM -->
<!-- <div id="login">
  <section id="signin">
    <h1 class="about-head">Login</h1>
    <form id="form-signin">
      <label for="email">Email Id</label>
      <input type="email" placeholder="Email" name="email" class="textbox"><br><br>

      <label for="password">Password</label>
      <input type="password" placeholder="password" name="password" class="textbox"><br><br>

      <button id="inbutton">Sign In</button><br>

      <h1>----OR----</h1>
      <div class="social-login">
        <p>Sign In With :</p>
        <div class="social-icons">
          <a href="https://accounts.google.com/signup" target="_blank"><i class="fab fa-google"></i></a>
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
      </div>

      <div class="signupif">
        <p>Not Yet Registered? <a href="#" id="goto-signup">Sign Up</a></p><br>
      </div>
    </form>
  </section>
</div>
 --> 

 <script src="script.js"></script>
    </body>
</html> 
