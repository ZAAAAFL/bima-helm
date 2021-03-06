$(document).ready(function () {
    // increment and decrement quantity
    $('.quantity-plus').click(function (e) {
        e.preventDefault();
        var max = parseInt($('#quantity').attr('max'));
        var quantity = parseInt($('#quantity').val());
        if (quantity < max) {
            $('#quantity').val(quantity + 1);
        }
    });
    $('.quantity-minus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if (quantity > 1) {
            $('#quantity').val(quantity - 1);
        }
    });

    // on change size
    $('#size').on('change', function () {
        var size = $(this).val();
        var id = $('#' + size).text();
        $('#quantity').attr('max', id);
    });

    // change image on click
    $('#gallery > div.images > img').click(function (e) {
        var thumbImg = $(this).attr('src');
        var mainImg = $('#gallery > div.main-img > img').attr('src');
        $('#gallery > div.main-img > img').attr('src', thumbImg);
    });

    // pagination
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        let sortBy = $('#sorting').children('option:selected').val();
        if (sortBy === undefined) {
            sortBy = '';
        }
        let page = $(this).attr('href').split('page=')[1];
        history.pushState(null, null, '?page=' + page + '&sortBy=' + sortBy);
        $.ajax({
            type: "GET",
            url: "/products?page=" + page,
            data: { sort_by: sortBy },
            success: function (response) {
                $('.data-products').html(response);
            }
        });
    });

    // filter
    $(document).on('change', '#sorting', function () {
        let sortBy = $(this).val();
        let searchParams = new URLSearchParams(window.location.search);
        var page = '';
        if (searchParams.has('page')) {
            var page = searchParams.get('page');
        }
        history.pushState(null, null, '?page=' + page + '&sortBy=' + sortBy);

        $.ajax({
            type: "GET",
            url: "/products?page=" + page,
            data: { sort_by: sortBy },
            success: function (response) {
                $('.data-products').html(response);
            }
        });
    });
});

$("#password").on("focusout", function () {
    if ($(this).val() != $("#confirmPassword").val()) {
      $("#confirmPassword").addClass("is-invalid");
    } else {
      $("#confirmPassword").removeClass("is-invalid");
    }
  });

  $("#confirmPassword").on("keyup", function () {
    if ($("#password").val() != $(this).val()) {
      $(this).addClass("is-invalid");
    } else {
      $(this).removeClass("is-invalid");
    }
  });

$(".check-shipp").change(function () {
    $('.check-shipp').not(this).prop('checked', false);
});

function onChangeRegion(url, id, name) {
    var token = $('#token').val();
    $.ajax({
        type: "POST",
        url: url,
        data: { _token:token,id: id },
        success: function (response) {
            $('#' + name).empty();
            $('#' + name).append('<option>Pilih Salah Satu</option>');

            $.each(response, function (key, value) {
                $('#' + name).append('<option value="' + key + '">' + value + '</option>');
            });
            $('#' + name).removeAttr('disabled');
        }
    });
}

function getPostalCode(name) {

    $('#loading-spinner').append('<div class="spinner-border float-end position-relative" style="top: -40px; right: 5px;" role="status"><span class="visually-hidden">Loading...</span></div>');
    $('#loading-spinner-info').append('<span class="small" >Mohon tunggu...</span>');

    $.ajax({
        type: "GET",
        url: 'https://kodepos.vercel.app/search',
        data: {q:name},
        dataType: "json",
        success: function (data) {
            if(data.status == true) {
                console.log(data.messages);
                $('#postalCode').val('');
                $('#postalCode').val(data.data[0].postalcode);
                $('#loading-spinner').empty();
                $('#loading-spinner-info').empty();
            }
        }
    });
}

$(function () {
    $('#province').on('change', function () {
        onChangeRegion('/indonesia/cities', $(this).val(), 'city');
    });
    $('#city').on('change', function () {
        onChangeRegion('/indonesia/districts', $(this).val(), 'district');
    });
    $('#district').on('change', function () {
        onChangeRegion('/indonesia/villages', $(this).val(), 'village');
    });
    $('#village').on('change', function () {
        var village = $('#village option:selected').text();
        var district = $('#district option:selected').text();
        getPostalCode(village+' '+district);
    });
});

var isBtnCart = true;
function btnCart(id, name, price, img) {
    var qty = $('#quantity').val();
    var size = $('#size option:selected').val();
    if (size === '') {
        $('#size').addClass('is-invalid');
    } else {
        if(isBtnCart) {
            cartAdd(id, name, qty, price, size, img);
            isBtnCart = false;
        } else {
            // cartRemove(id);
            isBtnCart = true;
        }
    }
}


$('#cartSection').on('click', '.remove-item', function () {
    var rowId = $(this).attr('id');
    cartRemove(rowId);
});

function cartAdd(id, name, qty, price, size, img) {
    $.ajax({
        type: "GET",
        url: '/cart-add',
        data: {id:id, name:name, qty:qty, price:price, size:size, img:img},
        success: function (data) {
            $('#btnCart').removeClass('btn-outline-primary').addClass('btn-primary');
            $('#cartCount').attr('data-count', data.count);
            $('.toast-body').text(data.message);
            showToast();
        }
    });
}

function cartRemove(rowId) {
    $.ajax({
        type: "GET",
        url: "/cart-remove",
        data: {rowId:rowId},
        success: function (data) {
            $("#cartSection").load(location.href + " #cartSection>*" );
            // $('#'+rowId).closest("tr").remove();
            $('#cartCount').attr('data-count', data.count);
            $('.toast-body').text(data.message);
            showToast();
        }
    });
}

function showToast() {
    const toast = new bootstrap.Toast(document.getElementById('toast'));
    toast.show();
}
