$('#example').DataTable();

function addToCart(productId){
    $.ajax({
        url     : urlLink,
        method  : 'POST',
        data    : {
            // _token: CSRF_TOKEN,
            product_id  : productId
        },
        headers:
        {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success : function(response){
            if(response.success === true){
                $("#add-cart-modal").modal()
            }else{
                if(response.error === "login"){
                    var redirect = window.location.href;
                    window.location = "/login?redirect=" + redirect;
                }
            }
        },
        error:function(){

        }
    });
}

function deleteCart(cartId){
    $.ajax({
        url     : urlLinkDelete,
        method  : 'POST',
        data    : {
            cart_id  : cartId
        },
        headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        success : function(response){
            $("#cart_item_" + cartId).fadeOut("normal", function() {
                $(this).remove();
            });

            $priceTemp = $("total-price-value").val();
            $newPrice = $priceTemp - response;
            $("total-price-value").val($newPrice);


        },
        error:function(){
            alert("error!!!!");
        }
    });
}

function editCartQuantity(cartId){
    var quantity = $('#cart_quantity_' + cartId).val();
    var rowId = "cart_item_" + cartId;
    var productSubtotal = $("#" + rowId + "_total_price span");
    if(quantity){
        $.ajax({
            url     : editCartQtyUrl,
            method  : 'POST',
            dataType: 'JSON',
            data    : {
                cart_id  : cartId,
                quantity : quantity
            },
            success : function(response){
                productSubtotal.html("Rp. " + response.singlePrice);
                $("#cart-grand-total").html("TOTAL: Rp " + response.totalPrice);
            },
            error:function(){

            }
        });
    }
}

// function editCartQuantity(cartId){
//     var qty = $('#cart_quantity_' + cartId).val();
//     if(qty.trim().length){
//         var rowId = "cart_item_" + cartId;
//         var price = $("#" + rowId + "_price").data("price");
//         var priceDouble = parseFloat(price);
//         var qtyInt = parseInt(qty);
//         var subtotal = priceDouble * qtyInt;
//         var subtotalId = $("#" + rowId + "_total_price");
//         subtotalId.attr("data-total-price", subtotal);
//         subtotalId.data("total-price", subtotal);
//
//         $("#" + rowId + "_total_price span").html(addCommas(subtotal));
//
//         var total = 0;
//         $(".cart-subtotal").each(function(){
//             total += parseFloat($(this).data("total-price"));
//         })
//         $("#cart-grand-total").html("TOTAL: " + addCommas(total));
//     }
// }

function addCommas(nStr) {
    nStr += '';
    x = nStr.split(',');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return "Rp " + x1 + x2;
}

// autoNumeric
numberFormat = AutoNumeric.multiple('.price-format > input', {
    decimalCharacter: ',',
    digitGroupSeparator: '.',
    decimalPlaces: 0
});

//SELECT PAYMENT
function handleChangePayment(myRadio){
    var selectedValue = myRadio.value;
    var grandTotalValue = $("#grand-total-value").val();
    grandTotalValue = grandTotalValue.replace(/[.]/g, "");
    var newGrandTotalValue = 0;
    var newGrandTotal = "";
    var selectedFeeValue = $("#selected-fee").val();
    selectedFeeValue = selectedFeeValue.replace(/[.]/g, "");
    var selectedFee = "";

    if(selectedValue == "bank_transfer"){
        newGrandTotalValue = parseInt(grandTotalValue) - parseInt(selectedFeeValue) + 4000;
        newGrandTotal = addCommas(newGrandTotalValue);

        $("#selected-fee").val(4000);
        $('#admin-fee').html(addCommas(4000));
        $("#grand-total-value").val(newGrandTotalValue);
        $("#grand-total-price").html(newGrandTotal);
    }
    else{
        var fee = ((parseInt(grandTotalValue) - parseInt(selectedFeeValue)) * 0.03) + 2000;
        selectedFee = addCommas(fee);
        newGrandTotalValue = parseInt(grandTotalValue) - parseInt(selectedFeeValue) + fee;
        newGrandTotal = addCommas(newGrandTotalValue);

        $("#selected-fee").val(fee);
        $('#admin-fee').html(selectedFee);
        $("#grand-total-value").val(newGrandTotalValue);
        $("#grand-total-price").html(newGrandTotal);
    }
}

function selectShippingAgent(e){
    if(e.value != "-1"){
        $("#checkout-shipping-section").show();
        var fee = $("#checkout-shipping-option option:selected").data('fee');
        $("#checkout-shipping-cost").html(addCommas(fee));

        var totalPrice = $("#checkout-total-price").data("total-price");
        var totalPayment = parseFloat(totalPrice) + parseFloat(fee);
        $("#checkout-total-payment").html(addCommas(totalPayment));

        var agentId = $("#checkout-shipping-option option:selected").data('agent-id');
        var shippingId = $("#checkout-shipping-option option:selected").data('shipping-id');
        $("#courier_id").val(agentId);
        $("#delivery_type_id").val(shippingId);
    }
    else{
        $("#checkout-shipping-section").hide();
        var totalPrice = $("#checkout-total-price").data("total-price");
        $("#checkout-total-payment").html(addCommas(totalPrice));

        $("#courier_id").val("-1");
        $("#delivery_type_id").val("-1");
    }
}

// NOUISLIDER
//  Price Filter ( noUiSlider Plugin)
if($("#price-range").length){
    $("#price-range").noUiSlider({
        range: {
            'min': [ 0 ],
            'max': [ 1000 ]
        },
        start: [40, 940],
        connect:true,
        serialization:{
            lower: [
                $.Link({
                    target: $("#price-min")
                })
            ],
            upper: [
                $.Link({
                    target: $("#price-max")
                })
            ],
            format: {
                // Set formatting
                decimals: 2,
                prefix: '$'
            }
        }
    })
}

//ELEVATEZOOM
$(".zoom_05").elevateZoom({
    zoomType	: "inner",
    cursor		: "crosshair"
});