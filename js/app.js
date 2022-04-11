//Chris Bull - Easy Groceries Javascript

//initialize foundation for the website
$(document).foundation();

//* global variables

let theUserId = "";
let theDepartments = [];
let theDepartmentString = [];
let theCart = {}; 
let theProducts = {};
let theTransaction = {};

//* functions to show pages

//function to return the size of an object
Object.size = function (theObject) {
    var objSize = 0,
        id;
    for (id in theObject) {
        if (theObject.hasOwnProperty(id)) {
            let total = theObject[id];
            //parse the total into an int
            let totalInt = parseInt(total);
            objSize = objSize + totalInt;
        }
    }
    return objSize;
};

//function to show the total number of  products in the cart
function showTotalInCart() {
    let total = Object.size(theCart);
    $("#cartButtonTotal").html(total);
}

//function to setup the products on the cart page
function setupCart() {
    let initialValue = 0.00;
    let cartItems = ``;
    $(".cartProductSection").html("");

    $.each(theProducts, (i, info) => {
        let cartProduct_id = info.id;
        let cartProduct_upc = info.upc;
        let cartProduct_brand = info.brand;
        let cartProduct_name = info.product_name;
        let cartProduct_description = info.product_description;
        let cartProduct_avg_price = parseFloat(info.avg_price);
        let cartProduct_department_name = info.category_name;
        let cartProduct_image_path = info.image_path;
        //let cartProduct_quantity = info.quantity;
        let cartProduct_quantity = theCart[cartProduct_id];
        let cartProduct_taxable = info.taxable;
        let cartProduct_final_price = cartProduct_avg_price.toFixed(2);

        let cartProduct_extended_price = parseInt(cartProduct_quantity) * parseFloat(cartProduct_avg_price);
        let short_extended_price = cartProduct_extended_price.toFixed(2);
        initialValue = initialValue + cartProduct_extended_price;

        cartItems += `<div class="grid-x cartPageItem">
                <div class="large-1 medium-1 small-2 cell" style="text-align: center;">
                    <h5>${i + 1}</h5>
                </div>
                <div class="large-2 medium-1 small-5 cell">
                    <img src="${cartProduct_image_path}" class="cartImage" alt="${cartProduct_name} image">
                </div>
                <div class="large-2 medium-2 small-5 cell cartProductInfo">
                    <p id="cartProductName">${cartProduct_name}</p>
                    <p id="cartProductBrand">${cartProduct_brand}</p>
                    <p id="cartProductUPC">${cartProduct_upc}</p>
                </div>
                <div class="large-2 medium-3 small-12 cell">
                    <h5 class="mobileTitle">Quantity: </h5>
                    <input type="button" value="-" class="decrease-cart" data-id="${cartProduct_id}">
                    <span>${cartProduct_quantity}</span>
                    <input type="button" value="+"  class="increase-cart" data-id="${cartProduct_id}">
                </div>
                <div class="large-1 medium-1 small-12 cell"><span class="mobileTitle">Price: </span>$${cartProduct_final_price}</div>
                <div class="large-2 medium-2 small-12 cell"><span class="mobileTitle">Total: </span>$${short_extended_price}</div>
                <div class="large-2 medium-2 small-12 cell">
                    <span class="mobileTitle">Remove: </span><h5 class="remove-cart" data-id="${cartProduct_id}">X</h5>
                </div>
            </div>`;
        });

        $(".cartProductSection").html(cartItems);

        //set total checkout values, fixed to 2 decimal points
        let finalUntaxedValue = initialValue.toFixed(2);
        $(".untaxed-value").html("$" + finalUntaxedValue);
        let firstHST = initialValue * 0.13;
        let fixedHST = firstHST.toFixed(2);
        $(".tax-total").html("$" + fixedHST);
        let finalValue = initialValue + firstHST;
        let finalValueDisplay = finalValue.toFixed(2);
        $(".taxed-value").html("$" + finalValueDisplay);

        //update total in cart
        showTotalInCart();
}

//function to setup the products on the cart page
function setupConfirmPage() {
    let initialValue = 0.00;
    let cartItems = ``;
    $(".confirmProductSection").html("");

    $.each(theProducts, (i, info) => {
        let cartProduct_id = info.id;
        let cartProduct_upc = info.upc;
        let cartProduct_brand = info.brand;
        let cartProduct_name = info.product_name;
        let cartProduct_description = info.product_description;
        let cartProduct_avg_price = parseFloat(info.avg_price);
        let cartProduct_department_name = info.category_name;
        let cartProduct_image_path = info.image_path;
        let cartProduct_quantity = info.quantity;
        let cartProduct_taxable = info.taxable;
        let cartProduct_final_price = cartProduct_avg_price.toFixed(2);

        let cartProduct_extended_price = parseInt(cartProduct_quantity) * parseFloat(cartProduct_avg_price);
        let short_extended_price = cartProduct_extended_price.toFixed(2);
        initialValue = initialValue + cartProduct_extended_price;

        cartItems += `<div class="grid-x cartPageItem">
                <div class="large-1 medium-1 small-2 cell" style="text-align: center;">
                    <h5>${i + 1}</h5>
                </div>
                <div class="large-2 medium-3 small-5 cell">
                    <img src="${cartProduct_image_path}" class="cartImage" alt="${cartProduct_name} image">
                </div>
                <div class="large-4 medium-3 small-5 cell cartProductInfo">
                    <p id="cartProductName">${cartProduct_name}</p>
                    <p id="cartProductBrand">${cartProduct_brand}</p>
                    <p id="cartProductUPC">${cartProduct_upc}</p>
                </div>
                <div class="large-2 medium-3 small-12 cell">
                    <h5 class="mobileTitle">Quantity: </h5>
                    <span>${cartProduct_quantity}</span>
                </div>
                <div class="large-1 medium-1 small-12 cell"><span class="mobileTitle">Price: </span>$${cartProduct_final_price}</div>
                <div class="large-2 medium-1 small-12 cell"><span class="mobileTitle">Total: </span>$${short_extended_price}</div>
            </div>`;
        });

        $(".confirmProductSection").html(cartItems);

        //set total checkout values, fixed to 2 decimal points
        let finalUntaxedValue = initialValue.toFixed(2);
        $(".confirm-untaxed-value").html("$" + finalUntaxedValue);
        let firstHST = initialValue * 0.13;
        let fixedHST = firstHST.toFixed(2);
        $(".confirm-tax-total").html("$" + fixedHST);
        let finalValue = initialValue + firstHST;
        let finalValueDisplay = finalValue.toFixed(2);
        $(".confirm-taxed-value").html("$" + finalValueDisplay);
}

//function to setup account being created
function setupAccount() {
    let createEmail = $("#create-email").val();
    let finalEmail = $("#final-email").val();
    let finalPassword = $("#create-password").val();
    let name_first_billing = $("#billing_first_name").val();
    let name_last_billing = $("#billing_last_name").val();
    let address_billing = $("#billing_address").val();
    let city_billing = $("#billing_city").val();
    let province_billing = $("#billing_province").val();
    let postal_billing = $("#billing_postal").val();
    let phone_billing = $("#billing_phone").val();


    if (createEmail != null || createEmail != "") {
        if (createEmail == finalEmail) {
            if (finalPassword == null || finalPassword == "") {
                alert("Please enter a password to create an account.");
                $("#create-password").focus();
            } else {
                let setupAccountDetails = $.ajax({
                    url: "./services/create_account.php",
                    type: "POST",
                    data: {
                        email: createEmail,
                        password: finalPassword,
                        name_first: name_first_billing,
                        name_last: name_last_billing,
                        address: address_billing,
                        city: city_billing,
                        province: province_billing,
                        postal: postal_billing,
                        phone: phone_billing

                    },
                    dataType: "json"
                });

                setupAccountDetails.fail(function (jqXHR, errorMessage) {
                    alert("Something went Wrong! (setupAccount)" +
                        errorMessage);
                });

                setupAccountDetails.done(function (data) {
                    if (data.error.id == "0") {
                        location.href = `#/account-signin/`;
                    } else {
                        alert("The account failed to be created.");
                    }
                }
                );
            }
        } else {
            alert("Entered emails do not match.");
            $("#final-email").focus();
        }
    } else {
        alert("Please enter an email.");
        $("#create-email").focus();
    }
}

//function to sign the user into the website
function signInUser() {
    let accountEmail = $("#account-email").val();
    let accountPassword = $("#account-password").val();

    if (accountEmail != null || accountEmail != "") {
        if (accountPassword == null || accountPassword == "") {
            alert("Please enter a password to sign in.");
            $("#account-password").focus();
        } else {
            let performSignIn = $.ajax({
                url: "./services/login_account.php",
                type: "POST",
                data: {
                    email: accountEmail,
                    password: accountPassword,
                },
                dataType: "json"
            });

            performSignIn.fail(function (jqXHR, errorMessage) {
                alert("Something went Wrong! (signInUser)" +
                    errorMessage);
            });

            performSignIn.done(function (data) {
                if (data.error.id == "0") {                 
                    $("#username-checkout").val(data.email);

                    $("#billing_checkout_first_name").val(data.billing_name_first);
                    $("#billing_checkout_last_name").val(data.billing_name_last);
                    $("#billing_checkout_address").val(data.billing_address);
                    $("#billing_checkout_city").val(data.billing_city);
                    $("#billing_checkout_province").val(data.billing_province);
                    $("#billing_checkout_postal").val(data.billing_postal);
                    $("#billing_checkout_phone").val(data.billing_phone);

                    $("#shipping_checkout_first_name").val(data.billing_name_first);
                    $("#shipping_checkout_last_name").val(data.billing_name_last);
                    $("#shipping_checkout_address").val(data.billing_address);
                    $("#shipping_checkout_city").val(data.billing_city);
                    $("#shipping_checkout_province").val(data.billing_province);
                    $("#shipping_checkout_postal").val(data.billing_postal);
                    $("#shipping_checkout_phone").val(data.billing_phone);
                    location.href = `#/order/shipping/`;
                } else {
                    alert("Failure with the login process.");
                }
            }
            );

        }
    } else {
        alert("Please enter an email.");
        $("#username-checkout").focus();
    }
}

//function to search for products using the search bar
function searchForProduct(searchProduct) {
    $(".hidePage").hide();

    let searchProducts = $.ajax({
        url: "./services/get_products_by_search.php",
        type: "POST",
        data: {
            search: searchProduct
        },
        dataType: "json"
    });

    searchProducts.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (searchForProduct)" +
            errorMessage);
    });

    searchProducts.done(function (data) {

        let departmentTitle = ``;
        let content = ``;

        $.each(data.products, function (i, info) {
            let product_id = info.id;
            let product_upc = info.upc;
            let product_brand = info.brand;
            let product_name = info.product_name;
            let product_description = info.product_description;
            let product_avgPrice = info.avg_price;
            let product_departmentName = info.department_name;
            let product_imagePath = info.image_path;

            departmentTitle = product_departmentName;
            content += `<div class="large-3 medium-6 small-12 cell foodCardMain">
                <div class="descriptionContainer" id="description_${product_id}">
                    <div class="descriptionContent">
                        <h3>Description</h3>
                        <p>${product_description}</p>
                    </div>
                </div>
                <h5 id="itemProducerMain">${product_brand}</h5>
                <p id="itemNameMain">${product_name}</p>
                
                <div class="grid-x grid-margin-x priceRating">
                <div id="itemUPC" class="large-8 small-8 cell">
                    UPC: ${product_upc}
                </div>
                <p id="itemPrice" class="large-4 small-4 cell">$${product_avgPrice}</p>
                </div>
                <img src="${product_imagePath}" alt="${product_name} image" id="itemImage">
                <p class="descriptionLink" id="itemDescription_${product_id}" data-id=${product_id}>+ More Info</p>
                
                <div class="grid-x grid-padding-x quantityOptions">
                <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="${product_id}">
                <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_${product_id}">1</p>
                <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="${product_id}">
                <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="${product_id}">
                </div>
            </div>`;
        });

        location.href= `#/search`;

        $("#crumbDepartment").html("Search <span id='crumbArrow' style='color: #a54d24; font-weight: bold;'> > </span>" + searchProduct);
        $(".departmentProducts").html(content);
        $(".eg-main").show();
    });
}

//navigate to splash page function
function navSplash() {
    $(".hidePage").hide();
    $(".splashSlider").slick("unslick");
    setupBannerSlider();
    window.scrollTo(0, 0);
    $(".eg-splash").show();
}

//navigate to department page function
function navDepartment(departmentId) {
    $(".hidePage").hide();
    window.scrollTo(0, 0);

    let loadProducts = $.ajax({
        url: "./services/get_products_by_department.php",
        type: "POST",
        data: {
            department_id: departmentId
        },
        dataType: "json"
    });

    loadProducts.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (loadProducts)" +
            errorMessage);
    });

    loadProducts.done(function (data) {

        let departmentTitle = ``;
        let content = ``;

        if (data.error.id == "0") {
            $.each(data.products, function (i, info) {
                let product_id = info.id;
                let product_upc = info.upc;
                let product_brand = info.brand;
                let product_name = info.product_name;
                let product_description = info.product_description;
                let product_avgPrice = info.avg_price;
                let product_departmentName = info.department_name;
                let product_imagePath = info.image_path;

                departmentTitle = product_departmentName;
                content += `<div class="large-3 medium-6 small-12 cell foodCardMain">
                    <div class="descriptionContainer "id="description_${product_id}">
                        <div class="descriptionContent">
                            <h3>Description</h3>
                            <p>${product_description}</p>
                        </div>
                    </div>
                    <h5 id="itemProducerMain">${product_brand}</h5>
                    <p id="itemNameMain">${product_name}</p>
                    
                    <div class="grid-x grid-margin-x priceRating">
                    <div id="itemUPC" class="large-8 small-8 cell">
                        UPC: ${product_upc}
                    </div>
                    <p id="itemPrice" class="large-4 small-4 cell">$${product_avgPrice}</p>
                    </div>
                    <img src="${product_imagePath}" alt="${product_name} image" id="itemImage">
                    <p class="descriptionLink" id="itemDescription_${product_id}" data-id="${product_id}">+ More Info</p>
                    
                    <div class="grid-x grid-padding-x quantityOptions">
                    <input type="button" value="-" class="button foodCardButton large-4 medium-4 small-4 cell product-minus" id="minusButton" data-id="${product_id}">
                    <p id="itemQuantity" class="large-4 medium-4 small-4 cell totalQuantity_${product_id}">1</p>
                    <input type="button" value="+" class="button foodCardButton large-4 medium-4 small-4 cell product-plus" id="plusButton" data-id="${product_id}">
                    <input type="button" value="Add to Cart" class="button foodCardButton large-12 medium-12 small-12 cell sendCart" id="itemCart" data-id="${product_id}">
                    </div>
                </div>`;
            });
        }
        
        $("#crumbDepartment").html("Department <span id='crumbArrow' style='color: #a54d24; font-weight: bold;'> > </span>" + departmentTitle);
        $("#mainDepartmentTitle").html(departmentTitle);
        $(".departmentProducts").html(content);
        $(".eg-main").show();
    });
}

//navigate to cart page function
function navCart() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);

    let userCart = JSON.stringify(theCart);

    let loadCartData = $.ajax({
        url: "./services/get_products_by_cart.php",
        type: "POST",
        data: {
            json: userCart
        },
        dataType: "json"
    });

    loadCartData.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (loadCartData)" +
            errorMessage);
    });

    loadCartData.done(function (data) {
        if (data.error.id == "0") {
            theProducts = data.products;
            setupCart();
        }
    });

    $(".eg-cart").show();
}

//navigate to login page function
function navLogin() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);
    $(".eg-signIn").show();
}

//navigate to create account function
function navCreateAccount() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);
    $(".eg-create").show();
}

//navigate to payment page function
function navPayment() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);
    $(".eg-payment").show();
}

//navigate to shipping page function
function navShipping() {
    $(".hidePage").hide();
    $(".eg-shipping").show();
}

//navigate to confirm order page function
function navConfirm() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);

    let userCart = JSON.stringify(theCart);

    let loadCartData = $.ajax({
        url: "./services/get_products_by_cart.php",
        type: "POST",
        data: {
            json: userCart
        },
        dataType: "json"
    });

    loadCartData.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (loadCartData)" +
            errorMessage);
    });

    loadCartData.done(function (data) {
        if (data.error.id == "0") {
            theProducts = data.products;
            setupConfirmPage();
        }
        
        $(".eg-confirm").show();
    });
}

//navigate to complete order page function
function navComplete() {
    $(".hidePage").hide();
    window.scrollTo(0, 0);

    //get the transaction information
    let completedTransaction = {};
    //get money values and remove $ from the strings
    let subTotal = $("#value_sub").html();
    subTotal = subTotal.replace('$', '');
    let hst = $("#value_hst").html();
    hst = hst.replace('$', '');
    let total = $("#value_total").html();
    total = total.replace('$', '');

    completedTransaction["transaction_code"] = theTransaction;
    completedTransaction["ea_user_id"] = theUserId;
    completedTransaction["user_email"] = $("#username_checkout").val();
    //billing info
    completedTransaction["billing_name_first"] = $("#billing_checkout_first_name").val();
    completedTransaction["billing_name_last"] = $("#billing_checkout_last_name").val();
    completedTransaction["billing_address"] = $("#billing_checkout_address").val();
    completedTransaction["billing_city"] = $("#billing_checkout_city").val();
    completedTransaction["billing_province"] = $("#billing_checkout_province").val();
    completedTransaction["billing_postal_code"] = $("#billing_checkout_postal").val();
    completedTransaction["billing_phone"] = $("#billing_checkout_phone").val();
    //shipping info
    completedTransaction["shipping_name_first"] = $("#shipping_checkout_first_name").val();
    completedTransaction["shipping_name_last"] = $("#shipping_checkout_last_name").val();
    completedTransaction["shipping_address"] = $("#shipping_checkout_address").val();
    completedTransaction["shipping_city"] = $("#shipping_checkout_city").val();
    completedTransaction["shipping_province"] = $("#shipping_checkout_province").val();
    completedTransaction["shipping_postal_code"] = $("#shipping_checkout_postal").val();
    //money info
    completedTransaction["sub_total"] = parseFloat(subTotal);
    completedTransaction["hst"] = parseFloat(hst);
    completedTransaction["total"] = parseFloat(total);
    
    //add the cart products to the transaction
    completedTransaction["myItems"] = theCart;

    // stringify
    let transaction_json = JSON.stringify(completedTransaction);
    // do send
    let completeOrder = $.ajax({
        url: "./services/make_invoice.php",
        type: "POST",
        data: {
            myCart: transaction_json
        },
        dataType: "json"
    });

    completeOrder.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (completeOrder)" +
            errorMessage);
    });

    completeOrder.done(function (info) {
        if (info.error.id == "0") {
            $("#transaction-number").html(info.invoice_id);
            $(".eg-complete").show();
        }
    });
}

//load the departments for the drop down menu
function loadDepartments() {
    let loadDepartmentsData = $.ajax({
        url: "./services/get_departments.php",
        type: "POST",
        dataType: "json"
    });

    loadDepartmentsData.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (loadDepartmentsData)" +
            errorMessage);
    });

    loadDepartmentsData.done(function (data) {

        let content = ``;
        if (data.error.id == "0") {
            $.each(data.departments, function (i, info) {
                let department_id = info.id;
                let department_name = info.name;
                theDepartments[department_id] = `${department_name}`;
                content += `<li data-id="${department_id}" class="to-menu-department">${department_name}</li>`;
            });
        }
        
        $(".departments-pullDown").html(content);
    });
}

//function to handle the payment for the user
function checkUserPayment() {

    let card_name = $("#card-name").val();
    let card_number = $("#card-number").val();
    let card_cvv = $("card-cvv").val();
    let card_month = $("card-month").val();
    let card_year = $("card-year").val();

    let checkPayment = $.ajax({
        url: "./services/make_payment.php",
        type: "POST",
        data: {
            card_holder_name: card_name,
            card_number: card_number,
            cvv: card_cvv,
            month: card_month,
            year: card_year
        },
        dataType: "json"
    });

    checkPayment.fail(function (jqXHR, errorMessage) {
        alert("Something went Wrong! (checkUserPayment)" +
            errorMessage);
    });

    checkPayment.done(function (data) {

        if (data.error.id == "0") {
            theTransaction = data.transaction_code
            location.href = '#/order/confirm/'
        }
        else {
            alert("There was an error processing your payment");
        }
        
    });
}

function setupBannerSlider() {
    //slick slider for the banner ads on the splash page
    $('.splashSlider').slick({    
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7500,
        arrows: false,
        dots: true
    });
}

//functions to operate once the page has loaded
$(window).on("load", function () {

    //run the banner slider setup
    setupBannerSlider();

    //site logo click event handler
    $(".siteLogo").click(
        function() {
            location.href= `#/home/`;
        }
    );

    //site Title click event handler
    $(".siteTitle").click(
        function() {
            location.href= `#/home/`;
        }
    );

    //department menu click event handler
    $(".to-home").click(
        function() {
            location.href= `#/home/`;
        }
    );

    //department menu click event handler
    $(".to-departments").click(
        function() {
            location.href= `#/department/100`;
        }
    );

    //department menu click item event handler
    $(document).on('click', 'body .to-menu-department', function () {
            let dept_id = $(this).data("id");
            location.href= `#/department/${dept_id}`;
            $(".departments-pullDown").hide();
    });

    //department item product plus event handler
    $(document).on('click', 'body .product-plus', function () {
        let productId = $(this).data("id");
        let sumQuantity = $(".totalQuantity_" + productId).html();
        let totalChosen = parseInt(sumQuantity);
        ++totalChosen;
        $(".totalQuantity_" + productId).html(totalChosen);
    });

    //department item product minus event handler
    $(document).on('click', 'body .product-minus', function () {
        let productId = $(this).data("id");
        let sumQuantity = $(".totalQuantity_" + productId).html();
        let totalChosen = parseInt(sumQuantity);
        if (totalChosen > 1)
            --totalChosen;
        $(".totalQuantity_" + productId).html(totalChosen);
    });

    //department item sendCart event handler
    $(document).on('click', 'body .sendCart', function () {
        let productId = $(this).data("id");
        let sumQuantity = $(".totalQuantity_" + productId).html();
        theCart[productId] = sumQuantity;
        showTotalInCart();
    });

    //cart page item cart increase event handler
    $(document).on('click', 'body .increase-cart', function () {
        let productId = $(this).data("id");
        let sumQuantity = parseInt(theCart[productId]) + 1;
        theCart[productId] = sumQuantity;
        navCart();
    });

    //cart page item cart decrease event handler
    $(document).on('click', 'body .decrease-cart', function () {
        let productId = $(this).data("id");
        let sumQuantity = parseInt(theCart[productId]) - 1;
        if (sumQuantity < 1) 
            sumQuantity = 1;
        theCart[productId] = sumQuantity;
        navCart();
    });

    //cart page item cart remove event handler
    $(document).on('click', 'body .remove-cart', function () {
        let productId = $(this).data("id");
        delete theCart[productId];
        showTotalInCart();
        navCart();
    });

    //show the item description event handler
    $(document).on('click', 'body .descriptionLink', function () {
        let productId = $(this).data("id");
        if (document.querySelector(`#description_${productId}`).style.display == "none") {
            $("#itemDescription_" + productId).html("- Less Info");
            $("#description_" + productId).show();
        }
        else {
            $("#itemDescription_" + productId).html("+ More Info");
            $("#description_" + productId).hide();
        }
            
    });

    //cart button click event handler
    $(".to-yourCart").click(
        function() {
            location.href= `#/shopping-cart/`;
        }
    );

    //sign in button click event handler
    $(".to-signIn").click(
        function() {
            location.href= `#/account-signin/`;
        }
    );

    //create account button click event handler
    $(".to-createAccount").click(
        function() {
            location.href= `#/account-create/`;
        }
    );

    //payment button click event handler
    $(".to-payment").click(
        function() {
            location.href= `#/order/payment/`;
        }
    );

    //shipping button click event handler
    $(".to-shipping").click(
        function() {
            location.href= `#/order/shipping/`;
        }
    );

    //confirm order button click event handler
    $(".to-confirm").click(
        function() {
            checkUserPayment();
        }
    );

    //complete order button click event handler
    $(".to-complete").click(
        function() {
            location.href= `#/order/complete/`;
        }
    );

    //send to deli page
    $(".to-deli").click(
        function() {
            location.href= `#/department/11`;
            navDepartment(11);
        }
    );

    //send to bakery page
    $(".to-bakery").click(
        function() {
            location.href= `#/department/2`;
            navDepartment(2);
        }
    );

    //send to canned goods page
    $(".to-canned").click(
        function() {
            location.href= `#/department/5`;
            navDepartment(5);
        }
    );

    //send to milk and dairy page
    $(".to-milk").click(
        function() {
            location.href= `#/department/20`;
            navDepartment(20);
        }
    );

    //handle opening and closing of departments drop down menu 
    $(".dept-menu").click(
        function() {
            if ($(".departments-pullDown").is(":hidden"))
                $(".departments-pullDown").show();
            else
                $(".departments-pullDown").hide();
        }
    );

    //get the value from the search bar
    $(".siteSearchBar").keyup(
        function () {
            let search = $(this).val();
            searchForProduct(search);
        }
    );

    loadDepartments();

    //setup account creation
    $(".finishAccount").click(
        function () {
            setupAccount();
        }
    );

    //sign in user
    $(".perform-signIn").click(
        function () {
            signInUser();
        }
    );

    //routing functions
    var app = $.sammy(function () {

        //route to splash page
        this.get('#/home/', function () {
            navSplash();
        });

        //route to department page
        this.get('#/department/:department', function () {
            let id = this.params["department"];
            navDepartment(id);
        });

        //route for search bar
        this.get('#/search/:search', function () {
            let id = this.params["search"];
            navDepartment(id);
        });

        //route to cart page
        this.get('#/shopping-cart/', function () {
            navCart();
        });

        //route to login page
        this.get('#/account-signin/', function () {
            navLogin();
        });

        //route to create account page
        this.get('#/account-create/', function () {
            navCreateAccount();
        });

        //route to payment page
        this.get('#/order/payment/', function () {
            navPayment();
        });
    
        //route to shipping page
        this.get('#/order/shipping/', function () {
            navShipping();
        });

        //route to confirm order page
        this.get('#/order/confirm/', function () {
            navConfirm();
        });

        //route to complete order page
        this.get('#/order/complete/', function () {
            navComplete();
        });

    });

    //set the splash page as the default page
    $(function () {
        app.run('#/home/');
    });

});
