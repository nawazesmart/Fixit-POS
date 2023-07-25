
$(document).ready(function () {
var input = $('.C').val();
var xordernum = parseInt(input.substring(8));
var incrementedXordernum = xordernum + 1;
var updatedXordernum = 'CO--' + padNumber(incrementedXordernum, 7);
$('.o').val(updatedXordernum);
$('#o').text(updatedXordernum);
});

function padNumber(number, length) {
var str = number.toString();
while (str.length < length) {
str = '0' + str;
}
return str;
}


function addItem() {
    var productDiv = document.createElement("div");
    productDiv.textContent = "New Product"; // Example content, replace with your desired content
    document.getElementById("product-list").appendChild(productDiv);
}


$(document).ready(function () {


    // discount
    $('#extraDiscount').on('keyup', function () {
        calculateDiscount();
    });

    function calculateDiscount() {
        let subtotal = $('.all_sub_total').val();
        var extraDiscount = parseFloat($('#extraDiscount').val());
        var resultSection = $('#resultSection');
        var discountedPrice = subtotal - (extraDiscount * subtotal) / 100;
        if (isNaN(discountedPrice) || discountedPrice < 0) {
            resultSection.text(' Please enter numbers.');
        } else {
            resultSection.text('Total: BDT ' + discountedPrice.toFixed(2));
            resultSection.append('<br><input type="hidden" name="discountprice" class="resultSection" value="' + discountedPrice.toFixed(2) + '">');

        }
    }

    // discount end

    // vat

    $('#vatR').on('keyup', function () {
        calculateVAT();
    });

    function calculateVAT() {
        let subtotal = $('.resultSection').val();
        var vatRate = parseFloat($('#vatRate').val());
        var totalAmountResult = $('#allVatOrResult');


        var vatAmount = subtotal * (vatRate / 100);
        var totalAmount = subtotal + vatAmount;

        vatAmountResult.textContent = "VAT Amount: " + vatAmount.toFixed(2);
        totalAmountResult.textContent = "Total Amount: " + totalAmount.toFixed(2);
    }

    // vat end

    //shippingCost vatRate extraDiscount
    $('#vatRate, #shippingCost, #extraDiscount').on('keyup', calculateTotal);

    function calculateTotal() {

        var subtotal = parseFloat($('#all_total').val());
        var vatRate = parseFloat($('#vatRate').val() || 5);
        // var vatRate = 5;
        // var vatRate = $('#vatRate').val();
        // if (!vatRate) {
        //     vatRate = 5;
        // } else {
        //     vatRate = parseFloat(vatRate);
        // }
        var shippingCost = parseFloat($('#shippingCost').val() || 0);
        var extraDiscount = parseFloat($('#extraDiscount').val() || 0);

        var vatAmount = subtotal * ( vatRate / 100);
        var shippingAmount = shippingCost;
        var discountAmount = subtotal * (extraDiscount / 100);
        var totalAmount = subtotal + vatAmount + shippingAmount - discountAmount;

        $('#vatAmount').text('VAT Amount: ' + vatAmount.toFixed(2));
        $('#shippingAmount').text('Shipping Amount: ' + shippingAmount.toFixed(2));
        $('#discountAmount').text('Discount Amount: ' + discountAmount.toFixed(2));
        $('#totalAmount').text('Total : ' + totalAmount.toFixed(2));
        console.log({totalAmount})
        $('.total_amount_input').val(totalAmount);

        calculateSum()
    }


    //shippingCost vatRate extraDiscount end


    //amount sum

    // Function to calculate the sum
    function calculateSum() {

        var cardAmount = parseFloat($('#cardAmount').val() || 0);
        var cashAmount = parseFloat($('#cashAmount').val() || 0);
        var sum = cardAmount + cashAmount;
        $("#result").text("Pay: " + sum);
        $(".pay_amount_input").val(sum);


        // console.log('ok')
        calculatePayAmount()
    }

    // Event listener for input field changes
    $("#cardAmount, #cashAmount").on("input", calculateSum);


    function calculatePayAmount() {
        let totalAmount = Number($('.total_amount_input').val());
        let payAmount = Number($('.pay_amount_input').val());
        console.log({totalAmount, payAmount})
        if (totalAmount > payAmount) {
            $('.due_amount').text((totalAmount - payAmount).toFixed(2));
            $('.change_amount').text(0.00);
            $("due_amount").val((totalAmount - payAmount).toFixed(2));
        } else if (totalAmount < payAmount) {
            $('.change_amount').text((payAmount - totalAmount).toFixed(2));
            $('.due_amount').text(0.00);
            $('change_amount').val((payAmount - totalAmount).toFixed(2));

        } else {
            $('.change_amount').text(0.00);
            $('.due_amount').text(0.00);
        }

    }

    //amount sum end
//pay change due end

    // button config
    $('#btn').click(function () {
        // Perform action for Button 1

        var vatRate = $('#vatRate').val();
        alert('VAT Rate: ' + vatRate);
    });

    $('#button2').click(function () {
        // Perform action for Button 2
        Swal.fire('Payment Section already show in this page  ')
    });

    $('#button3').click(function () {

    });

    $('#button4').click(function () {
        // Perform action for Button 4
        Swal.fire({
            title: 'Use the sale option !',
            showDenyButton: true,
            // showCancelButton: true,
            // confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
        })
    });

    $("#searchInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#productTable tbody tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    // button config end


    // This branch section

    $('#branch_select').on('change', function (e) {
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
            url: '/fetchCategory/' + id,
            type: 'get',
            success: (result) => {
                $('#category_select').empty();
                $('#category_select').append(
                    '<option value="" selected="selected" disabled>Select Category </option>');
                $.each(result, function (index, item) {
                    $("#category_select").append(
                        $("<option></option>").val(index).html(index));

                });
                $('#category_details').trigger('change');

            }
        })
    });
    // This branch section end


    // This product show section
    $('#category_select').change(function () {
        var category_id = $(this).val();
        var branch_id = $('#branch_select').val();
        console.log(category_id);
        console.log(branch_id);

        $.ajax({
            url: '/fetchProducts-details/' + category_id + '/' + branch_id,
            type: 'get',
            success: (result) => {
                console.log(result);
                $('#product-list').empty();
                result.$product.forEach(function (product, key) {
                    var productHtml = `
                     <div >
                        <div class="col-xs-2 col-sm-2 col-md-4 overflow box-shadu" style="color: #1f2937">
                            <div class="search-thumbnail">
                                <div class="pl-3 thumbnail search-thumbnail">
                                    <div class="card gradient-1 product-item" style="background-color:#D2D881" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                                    <h5 class="card-header " style="padding: 5px; margin-top:0px" id="heading"data-milliseconds="">${product.xdesc.substring(1, 17)}..</h5>
                                    <h5 class="card-header name-product" style="padding: 5px; margin-top:0px ;display:none" id="heading"data-milliseconds="">${product.xdesc}</h5>
                                        <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                                        <span><div class="xitem" style="display:none">${product.xitem}</div></span>
                                        <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                                        <span><div class="zid" style="display:none">${product.zid}</div></span>
                                        <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                                        <div class="card-body p-2">
                                            <div class="d-inline-block">
                                                <h2 class= style="padding: 5px">${product.xstdprice}</h2>
                                                <p><span class="pull-right label label-grey quantity" >1</span></p>
                                            </div>
                                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                    $('#product-list').append(productHtml);
                });
            }
        })
    });

    // This product show section end


    // this main option This working
    // in cart system all work it

    var cartItems = [];
    var total = 0;
    $(document).on("click", ".product-item", function () {
        var productId = $(this).data("product-id");
        var key = productId.toString();
        var selector = "#product-item-" + key;
        var productItem = $(selector);

        var zid = productItem.find(".zid").text().trim();
        var xstdcost = productItem.find(".xstdcost").text().trim();
        var xitem = productItem.find(".xitem").text().trim();

        var item = productItem.find(".name-product").text().trim();
        var sku = productItem.find(".xitem").text().trim();
        var unit = productItem.find(".unit").text().trim();
        var price = parseInt(productItem.find(".price-product").text().trim());

        var qty = parseInt(productItem.find(".qty").text().trim());
        var quantity = parseInt(productItem.find(".quantity").text().trim());

        var itemTotal = price * quantity;
        total += itemTotal;

        var cartItem = {

            zid: zid,
            xstdcost: xstdcost,
            item: item,
            xitem: xitem,
            sku: xitem,
            unit: unit,
            price: price,
            quantity: quantity,
            total: itemTotal,
            qty : qty
        };

        if (cartItems[key]) {
            cartQTy = cartItems[key].quantity;
            console.log({qty, cartQTy})

            if (qty === 1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                return;
            }
            if (cartQTy === 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                return;
            }
            if (qty <= cartQTy) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Stock not available!',

                })
                // alert("Stock not available");
                return;
            }
            cartItems[key].quantity += quantity;
            cartItems[key].total += itemTotal;
        } else {
            cartItems[key] = cartItem;
        }

        $(".cart-items").empty();
        for (var key in cartItems) {
            if (cartItems.hasOwnProperty(key)) {
                var currentItem = cartItems[key];
                var rowId = "cart-item-" + key;
                $(".cart-items").append(`
                <tr id="${rowId}" class="cart-row">
                    <input type="hidden" name="zid[]" value="${currentItem.zid}">
                    <input type="hidden" name="xitem[]" value="${currentItem.xitem}">
                    <input type="hidden" name="xcost[]" value="${currentItem.xstdcost}">
                    <input type="hidden" name="xdesc[]" value="${currentItem.item}">
                    <input type="hidden" name="sku[]" value="${currentItem.xitem}">
                    <input type="hidden" name="xunitsel[]" value="${currentItem.unit}">
                    <input type="hidden" name="xrate[]" value="${currentItem.price}">
                    <input type="hidden" name="xqtyord[]" value="${currentItem.quantity}">
                    <input type="hidden" name="xlineamt[]" value="${currentItem.total}">
                    <input type="hidden" name="qty[]" value="${currentItem.qty}">




                    <td>${currentItem.item}</td>
                    <td>${currentItem.xitem}</td>
                    <td>${currentItem.unit}</td>
                    <td>${currentItem.price}</td>
                    <td class="quantity">${currentItem.quantity}</td>
                    <td>${currentItem.total}</td>
                </tr>
            `);
            }
        }

        $(".total-price").text("Total: BDT " + total);

        $(".total-price").append(`<br><input type="hidden" name="subtotal"id="all_total" class="all_sub_total" value="${total}">`);


        var date = $('#current_date').val();
        console.log(productId);
        calculateTotal();
    });


    $(document).on("click", ".cart-row", function () {
        var rowId = $(this).attr("id");
        var key = rowId.replace("cart-item-", "");

        if (cartItems.hasOwnProperty(key)) {
            var currentItem = cartItems[key];
            total -= currentItem.total;
            delete cartItems[key];
        }

        $(this).remove();
        $(".total-price").text("Total: BDT " + total);
    })


// card section end
    // This cart section end
    // in cart system all work it


    // search optinon
    $('#searchInput').keyup(function () {
        var searchInput = $(this).val();

        $.ajax({
            url: "{{ route('productsSearch') }}",
            type: "GET",
            data: {search: searchInput},
            dataType: "json",
            success: function (response) {
                // console.log(response)
                displaySearchResults(response);
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    function displaySearchResults(results) {
        var searchResults = $('#searchResults');
        searchResults.empty();

        if (results.length === 0) {
            searchResults.append('<li>No results found.</li>');
        } else {


            $.each(results, function (index, product) {
                var listItem = `
            <div class="col-sm-4  box-shadu" >
                <div class="search-thumbnail">
                    <div>
                        <div class="card gradient-1 product-item" style="background-color: #d3eaf1; border: none; border-radius: 10px;" id="product-item-${product.xitem}" data-product-id="${product.xitem}">
                           <h5 class="card-header " style="padding: 5px; margin-top: 0px; background-color: #1f2937; color: #fff; border-radius: 10px 10px 0 0;" id="heading"data-milliseconds="">${product.xdesc.substring(1, 17)}..</h5>
                                    <h5 class="card-header name-product" style="padding: 5px; margin-top:0px ;display:none" id="heading"data-milliseconds="">${product.xdesc}</h5>
                            <span><div class="sku" style="display:none">${product.xcitem}</div></span>
                            <span><h6 class="pull-right xitem"  >${product.xitem}</h6></span>
                            <span><div class="unit" style="display:none">${product.xunitiss}</div></span>
                            <span><div class="zid" style="display:none">${product.zid}</div></span>
                            <span><div class="xstdcost" style="display:none">${product.xstdcost}</div></span>
                            <div class="card-body p-2">
                                <div class="d-inline-block">
                                    <h2 class="text-white price-product" style="padding: 5px; color: #1f2937;">${product.xstdprice}</h2>
                                    <p><span class="pull-right label label-grey quantity"style="display:none">1</span></p>
                                    <p><span class="pull-right label label-grey qty">${product.quantity_total}</span></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
                searchResults.append(listItem);
            });
        }
    }






});

// search optinon end


$(document).ready(function () {
    // Get the product items container
    var productItemsContainer = $(".product-items");

    // Search input keyup event handler
    $("#search-input").on("keyup", function () {
        var searchTerm = $(this).val().toLowerCase();

        // Filter the product items based on the search term
        var filteredItems = productItemsContainer.find(".product-item").filter(function () {
            var itemText = $(this).text().toLowerCase();
            return itemText.indexOf(searchTerm) !== -1;
        });

        // Show/hide the filtered items
        productItemsContainer.find(".product-item").hide();
        filteredItems.show();
    });
});


const cashAmountInput = document.getElementById('cashA');
const cardAmountInput = document.getElementById('CardA');

cashAmountInput.addEventListener('input', toggleCardAmountRequired);
cardAmountInput.addEventListener('input', toggleCashAmountRequired);

function toggleCardAmountRequired() {
    if (cashAmountInput.value.trim() !== '') {
        cardAmountInput.removeAttribute('required');
    } else {
        cardAmountInput.setAttribute('required', 'required');
    }
}

function toggleCashAmountRequired() {
    if (cardAmountInput.value.trim() !== '') {
        cashAmountInput.removeAttribute('required');
    } else {
        cashAmountInput.setAttribute('required', 'required');
    }
}
