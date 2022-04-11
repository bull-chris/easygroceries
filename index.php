<?php
  $when = mktime();
?>

<!-- Chris Bull - Easy Groceries HTML Page -->
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Files for the Website -->
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">
    <link rel="stylesheet" href="css/app.css?id=<?php echo"$when"?>">

    <!-- Script link for Font Awesome -->
    <script src="https://kit.fontawesome.com/4d6f1793f8.js" crossorigin="anonymous"></script>

    <!-- Easy Groceries Page Title -->
    <title>Easy Groceries - Shop with Ease</title>
  </head>
  <body>

    <!-- Easy Groceries Header -->
    <header>
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-6 medium-12 small-12 cell">
            <div class="siteLogo">
              <img src="./assets/images/eg_logo_v2.png" alt="">
            </div>
          </div>
          <!-- <div class="large-4 medium-7 small-12 cell">
            <h3 class="siteTitle">Easy Groceries</h3>
          </div> -->
          <div class="large-5 medium-12 small-12 cell large-offset-1">
            <div class="grid-x grid-margin-x">
              <div class="large-12 medium-12 small-12 cell searchBarDiv">
                <input type="text" name="siteSearch" class="siteSearchBar" placeholder=" Search for your item...">
              </div>
              <div class="large-5 medium-6 small-6 cell departmentButton"> 
                <h6 class="dept-menu">Departments <img src="./assets/images/downArrow.png" alt="Down arrow for menu" id="dropDownArrow"></h6>
                <section>
                  <ul class="departments-pullDown"></ul>
                </section>
              </div>
              <div class="large-3 medium-3 small-3 cell to-yourCart yourCartButton">
                <span id="cartButtonTotal">0</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 30px;">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z" fill="white"/>
                </svg>
                
              </div>
              <div class="large-4 medium-3 small-3 cell to-signIn signInButton ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 25px;">
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" fill="#8bc07c"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Splash Page Slider -->
    <section class="eg-splash hidePage">
      <div class="splashSlider">
        <div class="bannerSlide bannerSlideOne">
          <img src="./assets/images/banner1.png" alt="">
          <!-- <h1 id="sliderText">Add variety to your Sandwiches,<br>made easy with Easy Groceries™</h1> -->
        </div>
        <div class="bannerSlide bannerSlideTwo">
          <img src="./assets/images/banner2.png" alt="">
        </div>
        <div class="bannerSlide bannerSlideThree">
          <img src="./assets/images/banner3.png" alt="">
        </div>
      </div>
    </section>

    <!-- Easy Groceries Content Container -->
    <div class="grid-container siteContent">
      <!-- Splash Page -->
      <section class="eg-splash hidePage">
        <div class="grid-x grid-margin-x">
          <div class="large-12 small-12 cell">
            <h2>Deals of the Week</h2>
          </div>
          <div class="large-3 medium-6 small-12 cell foodCard boxSiteDiv1">
            <div class="dealOverlay">
              <img src="./assets/images/dealOverlay.png" alt="">
            </div>
            <div class="dealOverlayText">
              <h5 id="dealText">
                SAVE <br>
                20%
              </h5>
            </div>
            <div class="foodNameSection">
              <h5 id="itemProducer">Smithfield </h5>
              <p id="itemName">Ham, Boneless, Sliced, Maple Flavored</p>
            </div>
            <div class="grid-x grid-margin-x priceRating">
              <div id="itemUPC" class="large-8 small-8 cell">
                UPC: 203797000004
              </div>
              <p id="itemPrice" class="large-4 small-4 cell">$4.49</p>
            </div>
            <img src="./images/2037/203797000004.jpg" alt="Ham, Boneless, Sliced, Maple Flavored image" id="itemImage">
            <div class="grid-x grid-padding-x quantityOptions">
              <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="1179">
              <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_1179">1</p>
              <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="1179">
              <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="1179">
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell foodCard boxSiteDiv1">
            <div class="dealOverlay">
              <img src="./assets/images/dealOverlay.png" alt="">
            </div>
            <div class="dealOverlayText">
              <h5 id="dealText">
                SAVE <br>
                15%
              </h5>
            </div>
            <div class="foodNameSection">
              <h5 id="itemProducer">Diamond of California</h5>
              <p id="itemName">Pecans</p>
            </div>
            <div class="grid-x grid-margin-x priceRating">
            <div id="itemUPC" class="large-8 small-8 cell">
                UPC: 10300000198
            </div>
            <p id="itemPrice" class="large-4 small-4 cell">$4.49</p>
            </div>
            <img src="./images/1030/10300000198.jpg" alt="Pecans image" id="itemImage">
            <div class="grid-x grid-padding-x quantityOptions">
              <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="92">
              <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_92">1</p>
              <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="92">
              <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="92">
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell foodCard boxSiteDiv1">
            <div class="dealOverlay">
              <img src="./assets/images/dealOverlay.png" alt="">
            </div>
            <div class="dealOverlayText">
              <h5 id="dealText">
                SAVE <br>
                25%
              </h5>
            </div>
            <div class="foodNameSection">
              <h5 id="itemProducer">Pepperidge Farm</h5>
              <p id="itemName">Bread, Hearty White</p>
            </div>
            <div class="grid-x grid-margin-x priceRating">
            <div id="itemUPC" class="large-8 small-8 cell">
                UPC: 14100070832
            </div>
            <p id="itemPrice" class="large-4 small-4 cell">$2.47</p>
            </div>
            <img src="./images/1410/14100070832.jpg" alt="Bread, Hearty White image" id="itemImage">
            <div class="grid-x grid-padding-x quantityOptions">
              <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="968">
              <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_968">1</p>
              <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="968">
              <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="968">
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell foodCard boxSiteDiv1">
            <div class="dealOverlay">
              <img src="./assets/images/dealOverlay.png" alt="">
            </div>
            <div class="dealOverlayText">
              <h5 id="dealText">
                SAVE <br>
                30%
              </h5>
            </div>
            <div class="foodNameSection">
              <h5 id="itemProducer">Gemeral Mills</h5>
              <p id="itemName">Cheerios Cereal</p>
            </div>
            <div class="grid-x grid-margin-x priceRating">
            <div id="itemUPC" class="large-8 small-8 cell">
                UPC: 16000275287
            </div>
            <p id="itemPrice" class="large-4 small-4 cell">$4.50</p>
            </div>
            <img src="./images/1600/16000275287.jpg" alt="Cheerios Cereal image" id="itemImage">
            <div class="grid-x grid-padding-x quantityOptions">
              <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="186">
              <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_186">1</p>
              <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="186">
              <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="186">
            </div>
          </div>
        </div>
        <div class="grid-x grid-margin-x">
          <div class="large-12 small-12 cell">
            <h2>Customer Favourite Departments</h2>
          </div>
          <div class="large-3 medium-6 small-12 cell to-deli departmentCard departColour1">
            <h5 id="departmentCardTitle">Deli</h5>
            <img src="./assets/images/deliDepartment.png" alt="Department image for Deli" id="departmentCardImage">
            <div id="departmentCardOffer">
              <h6>Today's Special</h6>
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell to-bakery departmentCard departColour2">
            <h5 id="departmentCardTitle">Bakery</h5>
            <img src="./assets/images/bakeryDepartment.png" alt="Department image for Bakery" id="departmentCardImage">
            <div id="departmentCardOffer">
              <h6>Today's Special</h6>
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell to-canned departmentCard departColour1">
            <h5 id="departmentCardTitle">Canned Goods</h5>
            <img src="./assets/images/cannedDepartment.png" alt="Department image for Canned Goods" id="departmentCardImage">
            <div id="departmentCardOffer">
              <h6>Today's Special</h6>
            </div>
          </div>
          <div class="large-3 medium-6 small-12 cell to-milk departmentCard departColour2">
            <h5 id="departmentCardTitle">Milk & Dairy</h5>
            <img src="./assets/images/dairyDepartment.png" alt="Department image for Milk & Dairy" id="departmentCardImage">
            <div id="departmentCardOffer">
              <h6>Today's Special</h6>
            </div>
          </div>
        </div>
      </section>
      <!-- Department/Main Page -->
      <section class="eg-main hidePage">
        <div class="grid-x grid-margin-x">
          <div class="large-4 large-offset-8 cell crumbTrail">
            <h5 id="crumbDepartment"></h5>
          </div>
          <div class="large-12 cell sectionTitle" id="departmentName">
            <h2 id="mainDepartmentTitle"></h2>
          </div>
        </div>
        <div class="grid-x grid-margin-x departmentProducts">
          <!-- Department Products List -->
        </div>
      </section>
      <!-- Cart Page -->
      <section class="eg-cart hidePage">
        <div class="grid-x grid-padding-x">
          <div class="large-8 medium-12 small-12 cell">
            <!-- Cart Titles -->
            <div class="grid-x cartProductTitles">
              <div class="large-1 medium-1 small-2 cell" style="text-align: center;"><h5>#</h5></div>
              <div class="large-4 medium-3 small-9 cell"><h5>Product Info</h5></div>
              <div class="large-2 medium-3 mobileCart cell"><h5>Quantity</h5></div>
              <div class="large-1 medium-1 mobileCart cell"><h5>Price</h5></div>
              <div class="large-2 medium-2 mobileCart cell"><h5>Extended</h5></div>
              <div class="large-2 medium-2 mobileCart cell" style="padding-right: 0.5rem;"><h5>Remove</h5></div>
            </div>
            <!-- Cart products list -->
            <div class="grid-x cartProductSection">
            </div>
          </div>
          <!-- Checkout totals -->
          <div class="large-3 large-offset-1 medium-12 small-12 cell checkoutTotals">
            <div class="grid-x">
              <div class="large-12 cell">
                <h4>Subtotal: <span class="untaxed-value"></span></h4>
              </div>
              <!-- <div class="large-2 cell untaxed-value"></div> -->
              <div class="large-12 cell">
                <h4>HST: <span class="tax-total"></span></h4>
              </div>
              <!-- <div class="large-2 cell tax-total"></div> -->
              <div class="large-12 cell">
                <h4>Final Total: <span class="taxed-value"></span></h3>  
              </div>
              <!-- <div class="large-2 cell taxed-value"></div> -->
              <div class="large-12 cell">
                <input type="button" value="Checkout Items" class="button to-shipping confirmCheckout"></input>
              </div>
              <div class="large-12 cell">
                <input type="button" value="Return to Store" class="button to-home returnToStore secondaryButton"></input>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SignIn Page -->
      <section class="eg-signIn hidePage">
        <div class="grid-x grid-padding-x signInSection">
          <div class="large-12 medium-12 small-12 cell pageTitle">
            <h1>Sign In to Easy Groceries</h1>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <label for="account-email">Email:</label>
            <input type="text" id="account-email" placeholder="Email">
            <label for="account-password">Password:</label>
            <input type="text" id="account-password" placeholder="Password">
          </div>
          <div class="large-8 large-offset-2 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Sign In" class="button perform-signIn"></input>
            <input type="button" value="Create Account" class="button boxSiteDiv3 to-createAccount"></input>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Cancel" class="button to-home secondaryButton"></input>
          </div>
        </div>
      </section>
      <!-- Create Account Page -->
      <section class="eg-create hidePage">
        <div class="grid-x grid-padding-x createSection">
          <div class="large-12 cell pageTitle">
            <h1> Create your Account</h1>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <h3>Account Details</h3>
            <label for="create-email">Email:</label>
            <input type="text" id="create-email" placeholder="Email">
            <label for="final-email">Confirm your Email:</label>
            <input type="text" id="final-email" placeholder="Confirm Email">
            <label for="create-password">Password:</label>
            <input type="password" id="create-password" placeholder="Password">
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <h3>Billing Information</h3>
            <label for="billing_first_name">First Name:</label>
            <input type="text" id="billing_first_name" placeholder="First Name">
            <label for="billing_last_name">Last Name:</label>
            <input type="text" id="billing_last_name" placeholder="Last Name">
            <label for="billing_address">Street/Apartment Address:</label>
            <input type="text" id="billing_address" placeholder="Address">
            <label for="billing_city">City:</label>
            <input type="text" id="billing_city" placeholder="City">
            <label for="billing_province">Province/Territory:</label>
            <select id="billing_province">
              <option value="NT">Northwest Territories</option>
              <option value="YT">Yukon</option>
              <option value="NU">Nunavut</option>
              <option value="BC">British Columbia</option>
              <option value="AB">Alberta</option>
              <option value="SK">Saskatchewan</option>
              <option value="MB">Manitoba</option>
              <option value="ON">Ontario</option>
              <option value="QC">Quebec</option>
              <option value="NB">New Brunswick</option>
              <option value="NS">Nova Scotia</option>
              <option value="PE">Prince Edward Island</option>
              <option value="NL">Newfoundland and Labrador</option>
            </select>
            <label for="billing_postal">Postal Code:</label>
            <input type="text" id="billing_postal" placeholder="Postal" maxLength="6">
            <label for="billing_phone">Phone Number:</label>
            <input type="text" id="billing_phone" placeholder="Phone">
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Finish Account Creation" class="button finishAccount to-signIn"></input>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Cancel" class="button to-home secondaryButton"></input>
          </div>  
        </div>
      </section>
      <!-- Shipping Page -->
      <section class="eg-shipping hidePage">
        <div class="grid-x grid-padding-x checkoutSection">
          <div class="large-12 cell pageTitle">
            <h1>Checkout your Order</h1>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <h3>Account/Email for Checkout</h3>
            <label for="username_checkout">Email:</label>
            <input type="text" id="username_checkout" placeholder="Email">
            <div class="actionButtons">
              <input type="button" value="Sign In" class="button boxSiteDiv3 to-signIn"></input>
              <input type="button" value="Create Account" class="button boxSiteDiv3 to-createAccount"></input>
            </div>
            
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <h3>Billing Information</h3>
            <label for="billing_checkout_first_name">First Name:</label>
            <input type="text" id="billing_checkout_first_name" placeholder="First Name">
            <label for="billing_checkout_last_name">Last Name:</label>
            <input type="text" id="billing_checkout_last_name" placeholder="Last Name">
            <label for="billing_checkout_address">Street/Apartment Address:</label>
            <input type="text" id="billing_checkout_address" placeholder="Address">
            <label for="billing_checkout_city">City:</label>
            <input type="text" id="billing_checkout_city" placeholder="City">
            <label for="billing_checkout_province">Province/Territory:</label>
            <select id="billing_checkout_province">
              <option value="NT">Northwest Territories</option>
              <option value="YT">Yukon</option>
              <option value="NU">Nunavut</option>
              <option value="BC">British Columbia</option>
              <option value="AB">Alberta</option>
              <option value="SK">Saskatchewan</option>
              <option value="MB">Manitoba</option>
              <option value="ON">Ontario</option>
              <option value="QC">Quebec</option>
              <option value="NB">New Brunswick</option>
              <option value="NS">Nova Scotia</option>
              <option value="PE">Prince Edward Island</option>
              <option value="NL">Newfoundland and Labrador</option>
            </select>
            <label for="billing_checkout_postal">Postal Code:</label>
            <input type="text" id="billing_checkout_postal" placeholder="Postal" maxLength="6">
            <label for="billing_checkout_phone">Phone Number:</label>
            <input type="text" id="billing_checkout_phone" placeholder="Phone">
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell">
            <h3>Shipping Information</h1>
            <label for="shipping_checkout_first_name">First Name:</label>
            <input type="text" id="shipping_checkout_first_name" placeholder="First Name">
            <label for="shipping_checkout_last_name">Last Name:</label>
            <input type="text" id="shipping_checkout_last_name" placeholder="Last Name">
            <label for="shipping_checkout_address">Street/Apartment Address:</label>
            <input type="text" id="shipping_checkout_address" placeholder="Address">
            <label for="shipping_checkout_city">City:</label>
            <input type="text" id="shipping_checkout_city" placeholder="City">
            <label for="shipping_checkout_province">Province:</label>
            <select id="shipping_checkout_province">
              <option value="NT">Northwest Territories</option>
              <option value="YT">Yukon</option>
              <option value="NU">Nunavut</option>
              <option value="BC">British Columbia</option>
              <option value="AB">Alberta</option>
              <option value="SK">Saskatchewan</option>
              <option value="MB">Manitoba</option>
              <option value="ON">Ontario</option>
              <option value="QC">Quebec</option>
              <option value="NB">New Brunswick</option>
              <option value="NS">Nova Scotia</option>
              <option value="PE">Prince Edward Island</option>
              <option value="NL">Newfoundland and Labrador</option>
            </select>
            <label for="shipping_checkout_postal">Postal Code:</label>
            <input type="text" id="shipping_checkout_postal" placeholder="Postal" maxLength="6">
            <label for="shipping_checkout_phone">Phone Number:</label>
            <input type="text" id="shipping_checkout_phone" placeholder="Phone">
          </div>

          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Proceed to Payment Details" class="button boxSiteDiv3 to-payment"></input>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Return to Cart" class="button boxSiteDiv3 to-yourCart secondaryButton"></input>
          </div>
        </div>
      </section>
      <!-- Payment Page -->
      <section class="eg-payment hidePage">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell pageTitle">
            <h1>Payment Information</h1>
          </div>
          <div class="large-6 large-offset-0 medium-8 medium-offset-2 small-12 cell">
            <label for="card-name">Name of Card Owner:</label>
            <input type="text" id="card-name" placeholder="Enter owner name...">
            <label for="card-number">Card #:</label>
            <input type="text" id="card-number" placeholder="Enter card number...">
            <label for="card-cvv">CVV:</label>
            <input type="text" id="card-cvv" placeholder="Enter CVV...">
          </div>
          <div class="large-6 large-offset-0 medium-8 medium-offset-2 small-12 cell">
            <label for="card-month">Card Expiry Month:</label>
            <select id="card-month">
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
              <option value="6">06</option>
              <option value="7">07</option>
              <option value="8">08</option>
              <option value="9">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
            <label for="card-year">Card Expiry Year:</label>
            <select id="card-year">
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
            </select>
          </div>
          <!-- Confirm Payment -->
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Confirm Payment Information" class="button confirmPayment to-confirm"></input>
          </div>
          <div class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 cell actionButtons">
            <input type="button" value="Cancel" class="button to-home secondaryButton"></input>
          </div>
        </div>
      </section>
      <!-- Confirm Order Page -->
      <section class="eg-confirm hidePage">
        <div class="grid-x grid-padding-x">
          <div class="large-8 cell">
            <div class="grid-x cartProductTitles">
              <div class="large-1 medium-1 small-2 cell" style="text-align: center;"><h5>#</h5></div>
              <div class="large-6 medium-4 small-9 cell"><h5>Product Info</h5></div>
              <div class="large-2 medium-3 mobileCart cell"><h5>Quantity</h5></div>
              <div class="large-1 medium-1 mobileCart cell"><h5>Price</h5></div>
              <div class="large-2 medium-1 mobileCart cell"><h5>Extended</h5></div>
            </div>
            <!-- Cart products list -->
            <div class="grid-x confirmProductSection">
            </div>
          </div>
          <!-- Checkout totals -->
          <div class="large-3 large-offset-1 cell checkoutTotals">
            <div class="grid-x">
              <div class="large-12 cell">
                <h4>Subtotal: <span class="untaxed-value" id="value_sub"></span></h4>
              </div>
              <div class="large-12 cell">
                <h4>HST: <span class="tax-total" id="value_hst"></span></h4>
              </div>
              <div class="large-12 cell">
                <h4>Final Total: <span class="taxed-value" id="value_total"></span></h3>  
              </div>
              <div class="large-12 cell">
                <input type="button" value="Complete Order" class="button to-complete"></input>
              </div>
              <div class="large-12 cell">
                <input type="button" value="Return to Store" class="button to-home returnToStore secondaryButton"></input>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Complete Order Page -->
      <section class="eg-complete hidePage">
        <div class="grid-x grid-padding-x">
          <div class="large-12 medium-8 medium-offset-2 small-12 cell">
            <h1>Your order is now complete!</h1>
            <p>Thank you for shopping with Easy Groceries today. For your convenience, your transaction number is posted below.</p>
            <!-- Transaction Number -->
          </div>
          <div class="large-8 medium-8 large-offset-2 medium-offset-2 small-offset-0 small-12 cell transactionDetails">
            <h3>Transaction #: <span id="transaction-number"></span></h3>
            <p>Please keep note of your transaction number for future use.</p>
            <input type="button" value="Return to Store" class="button to-home secondaryButton"></input>
          </div>
        </div>
      </section>
    </div>

    <!-- Easy Groceries Footer -->
    <footer>
      <div class="grid-container">
        <div class="grid-x grid-margin-x">
          <div class="large-4 medium-6 small-12 cell">
            <div class="about">
              <h5>About Easy Groceries™</h5>
              <p class="footerLinks">
                FAQs <br>
                How It Works <br>
                Delivery <br>
                Pickup <br>
                Marketplace
              </p>
            </div>
            <div class="about">
              <h5>About Us</h5>
              <p class="footerLinks">
                Who We Are <br>
                Charity & Community <br>
                Corporate Social Responsibility <br>
                Store Locator <br>
                Contact Us <br>
                Careers
              </p>
            </div>
          </div>
          <div class="large-4 medium-6 small-12 cell">
            <div class="promotions">
              <h5>Popular Categories</h5>
              <p class="footerLinks">
                Weekly Flyer <br>
                Marketplace Offers <br>
                Fruits & Vegetables <br>
                Dairy & Eggs <br>
                Pantry <br>
                Meat <br>
                Bakery
              </p>
            </div>
            <div class="promotions">
              <h5>More Services</h5>
              <p class="footerLinks">
                Gift Cards <br>
                Pharmacy <br>
                Photo Lab <br>
                Recipes
              </p>
            </div>
          </div>
          <div class="large-4 medium-12 small-12 cell">
            <div class="additional">
              <h5>Questions?</h5>
              <p class="footerLinks">
                Call us at: <br>
                1-EASY-GROCERIES
              </p>
            </div>
            <div class="additional">
              <h5>Find us at:</h5>
              <p class="footerLinks">
                123 Easy Grove, Ontario
              </p>
            </div>
            <div class="copyright">
              <h5>Copyright 2022 Easy Groceries</h5>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JS scripts for the Easy Groceries Site -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/sammy.min.js" type="text/javascript"></script>
    <script src="js/sammy.template.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js" type="text/javascript"></script>
    <script src="js/app.js?id=<?php echo"$when"?>"></script>
  </body>
</html>
