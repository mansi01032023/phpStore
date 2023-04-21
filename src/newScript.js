$(document).ready(function () {
  displayProducts();
});

// displayProducts()
function showProducts() {
  $.ajax({
    url: "allProducts.php",
    type: "POST",
  }).done(function (result) {
    window.location = "allProducts.php";
  });
}

// display users
function showUsers() {
  $.ajax({
    url: "allUsers.php",
    type: "POST",
  }).done(function (result) {
    window.location = "allUsers.php";
  });
}

// display orders
function showOrders() {
  $.ajax({
    url: "allOrders.php",
    type: "POST",
  }).done(function (result) {
    window.location = "allOrders.php";
  });
}

// crud on products
$(document).on("click", ".edit", function () {
  let id = $(this).attr("id");
  $("#name" + id).prop("disabled", false);
  $("#category" + id).prop("disabled", false);
  $("#quantity" + id).prop("disabled", false);
  $("#price" + id).prop("disabled", false);
  $("#desc" + id).prop("disabled", false);
  $("#" + id).html("Update");
  $("#" + id).attr("class", "update");
});

$(document).on("click", ".update", function () {
  let id = $(this).attr("id");
  let name = $("#name" + id).val();
  let category = $("#category" + id).val();
  let quantity = $("#quantity" + id).val();
  let price = $("#price" + id).val();
  let desc = $("#desc" + id).val();
  $.ajax({
    url: "editProduct.php",
    type: "POST",
    data: {
      id: id,
      name: name,
      category: category,
      quantity: quantity,
      price: price,
      desc: desc,
    },
    datatype: JSON,
  }).done(function () {
    $(".update").attr("class", "edit");
    $(".edit").html("Edit");
    $("#name" + id).prop("disabled", true);
    $("#category" + id).prop("disabled", true);
    $("#quantity" + id).prop("disabled", true);
    $("#price" + id).prop("disabled", true);
    $("#desc" + id).prop("disabled", true);
  });
});

// crud on users
$(document).on("click", ".editUser", function () {
  let id = $(this).attr("id");
  $("#name" + id).prop("disabled", false);
  $("#email" + id).prop("disabled", false);
  $("#password" + id).prop("disabled", false);
  $("#address" + id).prop("disabled", false);
  $("#status" + id).prop("disabled", false);
  $("#" + id).html("Update");
  $("#" + id).attr("class", "updateUser");
});
$(document).on("click", ".updateUser", function () {
  let id = $(this).attr("id");
  let name = $("#name" + id).val();
  let email = $("#email" + id).val();
  let password = $("#password" + id).val();
  let address = $("#address" + id).val();
  let status = $("#status" + id).val();
  $.ajax({
    url: "editUser.php",
    type: "POST",
    data: {
      id: id,
      name: name,
      email: email,
      password: password,
      address: address,
      status: status,
    },
    datatype: JSON,
  }).done(function (result) {
    $(".updateUser").attr("class", "editUser");
    $(".editUser").html("Edit");
    $("#name" + id).prop("disabled", true);
    $("#email" + id).prop("disabled", true);
    $("#password" + id).prop("disabled", true);
    $("#address" + id).prop("disabled", true);
    $("#status" + id).prop("disabled", true);
  });
});

// crud on orders
$(document).on("click", ".editOrder", function () {
  let id = $(this).attr("id");
  $("#status" + id).prop("disabled", false);
  $("#total" + id).prop("disabled", false);
  $("#date" + id).prop("disabled", false);
  $("#address" + id).prop("disabled", false);
  $("#" + id).html("Update");
  $("#" + id).attr("class", "updateOrder");
});
$(document).on("click", ".updateOrder", function () {
  let id = $(this).attr("id");
  let total = $("#total" + id).val();
  let date = $("#date" + id).val();
  let status = $("#status" + id).val();
  let address = $("#address" + id).val();
  $.ajax({
    url: "editOrder.php",
    type: "POST",
    data: {
      id: id,
      total: total,
      date: date,
      status: status,
      address: address,
    },
    datatype: JSON,
  }).done(function (result) {
    $(".updateOrder").attr("class", "editOrder");
    $(".editOrder").html("Edit");
    $("#status" + id).prop("disabled", true);
    $("#total" + id).prop("disabled", true);
    $("#date" + id).prop("disabled", true);
    $("#address" + id).prop("disabled", true);
  });
});

// adding product by admin
function addProduct() {
  let pname = $("#product_name").val();
  let pcategory = $("#product_categorie").val();
  let pquantity = $("#available_quantity").val();
  let pdesc = $("#product_description").val();
  let pprice = $("#product_price").val();
  let pimage = $("#filebutton").val();
  $.ajax({
    url: "addProductFunction.php",
    type: "POST",
    data: {
      pname: pname,
      pcategory: pcategory,
      pquantity: pquantity,
      pdesc: pdesc,
      pprice: pprice,
      pimage: pimage,
    },
    datatype: JSON,
  }).done(function (result) {
    if (result) {
      alert("Product added successfully");
      window.location = "admin.php";
    } else {
      alert("Try Again!!!");
    }
  });
}

// user registration on signup page
$(document).on("click", "#register", function () {
  let name = $("#name").val();
  let email = $("#email").val();
  let password = $("#password").val();
  let address = $("#address").val();
  if (name == "" || email == "" || password == "" || address == "") {
    $("#error").html("No field must be empty!").css("color", "red");
  } else {
    $("#error").html("");
    $.ajax({
      url: "registration.php",
      type: "POST",
      data: {
        name: name,
        email: email,
        password: password,
        address: address,
      },
      datatype: JSON,
    }).done(function (result) {
      if (result == 1) {
        window.location = "login.php";
      }
    });
  }
});

// user login on login page
$(document).on("click", "#signin", function () {
  let emailLogin = $("#emailLogin").val();
  let passwordLogin = $("#passwordLogin").val();
  if (emailLogin == "" || passwordLogin == "") {
    $("#error").html("No field must be empty!").css("color", "red");
  } else {
    $("#error").html("");
    $.ajax({
      url: "checkUser.php",
      type: "POST",
      data: {
        emailLogin: emailLogin,
        passwordLogin: passwordLogin,
      },
    }).done(function (result) {
      if (result) {
        window.location = "index.php";
      } else {
        window.alert(
          "You're not a registered user! Wait for admin's approval..."
        );
        window.location = "index.php";
      }
    });
  }
});

// function to display all products on home page
function displayProducts() {
  $.ajax({
    url: "displayProducts.php",
    type: "POST",
    success: function (result) {
      $("#products").html(result);
    },
  });
}

// function to add to cart
function addToCart(id) {
  id = id.substring(4);
  $.ajax({
    url: "addToCart.php",
    data: "id=" + id,
    datatype: "text",
    type: "POST",
  }).done(function (result) {
    if (result == false) {
      window.location = "login.php";
    }
  });
}

// function to display wishlist
function displayWishlist() {
  $.ajax({
    url: "displayWishlist.php",
    type: "POST",
  }).done(function (result) {
    location.reload(true);
  });
}

// function to display cart
function displayCart() {
  $.ajax({
    url: "displayCart.php",
    type: "POST",
  }).done(function (result) {
    location.reload(true);
  });
}

// function to add to wishlist
function addToWishlist(id) {
  id = id.substring(4);
  $.ajax({
    url: "addToWishlist.php",
    data: "id=" + id,
    datatype: "text",
    type: "POST",
  }).done(function (result) {
    if (result) {
      window.location = "wishlist.php";
    } else {
      window.location = "login.php";
    }
  });
}

// function to buy a product
function buy(id) {
  id = id.substring(3);
  $.ajax({
    url: "singlePage.php",
    data: "id=" + id,
    datatype: "text",
    type: "POST",
  }).done(function (result) {
    if (result) {
      window.location = "singleProduct.php";
    } else {
      window.location = "login.php";
    }
  });
}

// function to checkout
function checkout(id) {
  quantity = $("#inputQuantity").val();
  id = id.substring(5);
  $.ajax({
    url: "checkout.php",
    data: { id: id, quantity: quantity },
    datatype: "json",
    type: "POST",
  }).done(function (result) {
    if (result) {
      alert(result);
    } else {
      window.location = "login.php";
    }
  });
}

// function to delete an item from wishlist
function deleteWishlist(id) {
  id = id.substring(6);
  $.ajax({
    url: "deleteWishlist.php",
    type: "POST",
    data: "id=" + id,
    datatype: "text",
  }).done(function () {
    displayWishlist();
  });
}

// function to delete items from cart
function deleteCart(id) {
  id = id.substring(6);
  $.ajax({
    url: "deleteCart.php",
    type: "POST",
    data: "id=" + id,
    datatype: "text",
  }).done(function () {
    displayCart();
  });
}
