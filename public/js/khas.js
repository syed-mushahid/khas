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

// Add this to your JavaScript code
// $('button.removeItem').on('click', function() {
//     var itemId = $(this).data('item-id');
//     var button = $(this);

//     $.ajax({
//         url: '/cart/remove/' + itemId,
//         type: 'DELETE',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function(response) {
//             if (response.status === 'success') {
//                 alert(response.message);
//                 // Remove the item from the view with animation
//                 button.closest('tr').fadeOut(400, function() {
//                     $(this).remove();
//                 });
//             }
//         },
//         error: function(xhr, textStatus, errorThrown) {
//             alert(xhr.responseJSON.message);
//         }
//     });
// });

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
