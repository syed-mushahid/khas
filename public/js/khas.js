$(window).on("load", function () {
    $(".loading-animation-wrapper").fadeOut("slow");
});
$(document).ready(function () {
    $(".add-to-favorites").on("click", function () {
        const phoneId = $(this).data("phone-id");
        addToFavorites(phoneId);
    });
    $(".remove-fav").on("click", function () {
        const favId = $(this).data("fav-id");
        removeFavorites(favId);
    });
});

function addToFavorites(phoneId) {
    $.ajax({
        url: "/favorite/add/" + phoneId,
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            toastr.success(response.message);
        },
        error: function (xhr, status, error) {
            toastr.error(xhr.responseJSON.message);
            // Show an error message or handle the error as needed
        },
    });
}
function removeFavorites(faveId) {
    $.ajax({
        url: "/favorite/remove/" + faveId,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            toastr.success(response.message);
        },
        error: function (xhr, status, error) {
            toastr.error(xhr.responseJSON.message);
            // Show an error message or handle the error as needed
        },
    });
}

$(document).ready(function () {
    $(".addToCart").on("click", function () {
        var phoneId = $(this).data("phone-id");

        $.ajax({
            url: "/cart/add",
            method: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"),
                phone_id: phoneId,
                // quantity: 1 // Uncomment and modify as needed
            },
            success: function (response) {
                toastr.success(response.message);
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
                // Show an error message or handle the error as needed
            },
        });
    });
    $(".checkoutBtn").on("click", function () {
        var phoneId = $(this).data("phone-id");

        $.ajax({
            url: "/cart/add",
            method: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"),
                phone_id: phoneId,
                // quantity: 1 // Uncomment and modify as needed
            },
            success: function (response) {
                // toastr.success(response.message);

                document.location.href = "/checkout";
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
                // Show an error message or handle the error as needed
            },
        });
    });
});

///////Home page phones sort///
$(document).ready(function () {
    $("#sort-date, #sort-price").change(function () {
        getPhones();
    });

    $("#search").keyup(function () {
        getPhones();
    });
});

function getPhones() {
    $("#loading-spinner").show();
    $("#phone-list").hide();
    $("#no-result").hide();
    var sort_date = $("#sort-date").val();
    var sort_price = $("#sort-price").val();
    var search = $("#search").val();
    $.ajax({
        url: "/",
        type: "GET",
        data: { sort_date: sort_date, sort_price: sort_price, search: search },
        success: function (response) {
            $("#phone-list").html(response.html);
            if (response.isEmpty) {
                $("#no-result").show();
            } else {
                $("#no-result").hide();
            }
        },
        complete: function () {
            // Hide the loading spinner
            $("#loading-spinner").hide();
            $("#phone-list").show();
        },
    });
}

/////Add To compare//

$(".add-to-compare").on("click", function (e) {
    e.preventDefault();

    var phoneId = $(this).data("phone-id");

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/compare/add",
        type: "POST",
        data: { phone_id: phoneId },
        success: function (response) {
            toastr.success(response.message);
        },
        error: function (xhr, status, error) {
            toastr.error(xhr.responseJSON.message);
            // Show an error message or handle the error as needed
        },
        complete: function (data) {
            console.log(data);
        },
    });
});


////Remove from compare



$(document).ready(function () {
    var search = document.getElementById("search");
    search.addEventListener("focus", (event) => {
        document.getElementById("navbar-search").style.border =
            "1px solid " + $("#nav-search-btn").css("backgroundColor");
    });

    search.addEventListener("focusout", (event) => {
        document.getElementById("navbar-search").style.border = "none";
    });
});

// Check if profile menue is active
const menuItems = document.querySelectorAll(".nav-link-style");
const currentUrl = window.location.href;

menuItems.forEach((item) => {
    if (item.getAttribute("href") === currentUrl) {
        item.classList.add("nav-menu-active");
    }
});
