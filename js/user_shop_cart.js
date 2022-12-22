export function user_shop_cart() {
  // if there are any items in local storage, parse them into variable
  let itemsInCart = JSON.parse(localStorage.getItem('userCartItems'));

  // if cart is empty, make an empty array
  if(!itemsInCart) {
    itemsInCart = [];
  }

  // elem selectors
  const parentEl = document.querySelector(".shopping-cart");
  const checkoutEl = document.querySelector(".checkout-cart");

  const cartTotalPrice = document.querySelector("#sum_price");

  const checkoutProductsSum = document.querySelector("#checkout_products_sum_price");
  const checkoutFinalPrice = document.querySelector("#checkout_final_price");

  const itemQuantity = document.querySelector("#item_quantity");
  const items = document.querySelectorAll(".shop-item");

  const addToCartBtn = document.querySelectorAll(".add-to-cart");
  const addedItemFeedback = document.querySelectorAll(".item-added-feedback");

  const checkoutBtn = document.getElementById("checkout_btn")
  const checkoutCart = window.location.pathname;

  // if first elem is not found, ignore the rest
  // (first elem in navbar is found when user is logged in)
  if(!(parentEl === null)) {
    // calculate total price of all items
    const countSumPrice = function () {
        let totalPrice = 0;
        itemsInCart.forEach((item) => {
        totalPrice += item.price;
        });
        return parseFloat(totalPrice).toFixed(2);
    };

    // calculate total amount of all items (checkout page)
    const totalQuantity = function () {
        let totalQuantity = 0;
        itemsInCart.forEach((item) => {
            totalQuantity += item.count;
        });
        return totalQuantity;
    }

    // updates user's cart on every "add" click
    const updateShoppingCartHTML = function () {
        localStorage.setItem('userCartItems', JSON.stringify(itemsInCart));
        if (itemsInCart.length > 0) {
            // mapping user's selection and prints it into the navbar cart and checkout cart
            let result = itemsInCart.map((item) => {
            return `
                <li class="list-group-item shop-item-added-to-cart moonffee-font">
                        <div class="row p-2 px-3">
                            <div class="col-md-4">
                                <img src="${item.image}" alt="Added shop item in a cart" class="">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="shop-item-title card-title moonffee-font fw-bold">${item.name}</h5>
                                        <p class="card-text fw-bold m-0"><small class="text-muted">Product: €${item.basePrice}</small></p>
                                        <p class="card-text fw-bold m-0"><small>Total: €${parseFloat(item.price).toFixed(2)}</small></p>
                                    </div>
                                    <div>
                                        <button class="button-delete btn btn-danger btn-sm" data-id='${item.id}'><i class="fa-solid fa-trash" data-id='${item.id}'></i></button>
                                        <button class="button-minus btn btn-dark btn-sm" data-id='${item.id}'><i class="fa-solid fa-minus" data-id='${item.id}'></i></button>
                                        <span class="item-quantity mx-1 fw-bold">${item.count}</span>
                                        <button class="button-plus btn btn-dark btn-sm" data-id='${item.id}'><i class="fa-solid fa-plus" data-id='${item.id}'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>`;
        }).join("");
        // printing in parentEl (navbar user cart)
        parentEl.innerHTML = result;
        // prints only if the specific page is active
        if (checkoutCart == '/user_checkout.php') {
            checkoutEl.innerHTML = result;
            checkoutProductsSum.innerHTML = "€" + countSumPrice();
            checkoutFinalPrice.innerHTML = "€" + countSumPrice(); // for now, shipping is free!
            itemQuantity.innerHTML = totalQuantity();
        };
        cartTotalPrice.innerHTML = "€" + countSumPrice() + " |";
        } else {
            // prints that cart is empty if it's empty
            parentEl.innerHTML = 
            `<h5 class='shop-item-title card-title moonffee-font fw-bold text-center p-3 pb-0'>Your cart is empty!</h5>
            <hr>
            <div class='d-flex align-items-center justify-content-around text-center'>
                <a class='fw-bold btn btn-outline-dark mb-2' role='button' href='/shop.php'><i class="fa-sharp fa-solid fa-bag-shopping me-2"></i>Go to shop</a> 
            </div>`;
            // prints for specific page in different element location
            if (checkoutCart == '/user_checkout.php') {
                checkoutEl.innerHTML = 
                `<h5 class='shop-item-title card-title moonffee-font fw-bold text-center p-3'>Your cart is empty!</h5>
                    <hr>
                <div class='d-flex align-items-center justify-content-around text-center moonffee-font'>
                    <a class='fw-bold btn btn-outline-dark' role='button' href='/shop.php'><i class="fa-sharp fa-solid fa-bag-shopping me-2"></i>Go to shop</a> 
                </div>`;
                checkoutProductsSum.innerHTML = "€0";
                checkoutFinalPrice.innerHTML = "€0";
                itemQuantity.innerHTML = "0";
            }
        cartTotalPrice.innerHTML = "€0 |";
        };
    };

    // updates total price and count of the cart
    function updateItemsInCart(items) {
        for (let i = 0; i < itemsInCart.length; i++) {
            if (itemsInCart[i].id == items.id) {
                itemsInCart[i].count += 1;
                itemsInCart[i].price = itemsInCart[i].basePrice * itemsInCart[i].count;
                return;
            };
        };
        itemsInCart.push(items);
    }

    // makes a new object in the array of the products user has clicked on
    items.forEach((item) => {
        item.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart')) {
                const itemID = e.target.dataset.itemId;
                const itemName = item.querySelector(".shop-item-title").innerHTML;
                const itemPrice = item.querySelector(".shop-item-price").innerHTML;
                const itemImage = item.querySelector("img").src;
                let itemToCart = {
                    name: itemName,
                    price: +itemPrice,
                    id: itemID,
                    image: itemImage,
                    count: 1,
                    basePrice: +itemPrice,
                };
                updateItemsInCart(itemToCart);
                updateShoppingCartHTML();
            };
        });
    });

    // gives user feedback that the corresponding item has been added to the cart
    addToCartBtn.forEach((add) => {
        add.addEventListener('click', (e) => {
            const txtEl = document.createElement("p");
            txtEl.innerText = "Product added to cart!";

            for (let i = 0; i < addedItemFeedback.length; i++) {
                if (addedItemFeedback[i].dataset.itemId == e.target.dataset.itemId) {
                    if (!(addedItemFeedback[i].innerHTML)) {
                        const feedback = addedItemFeedback[i].appendChild(txtEl);
                        setTimeout(() => {
                            feedback.remove();
                        }, 8000);
                    };
                };
            };
        });
    });

    // clear cart items on purchase
    if (checkoutCart == '/user_checkout.php') {
        checkoutBtn.onclick = function() { clearCart() };
    }

    function clearCart() {
        localStorage.clear();
    };

    // event listener for navbar cart shop
    parentEl.addEventListener('click', (e) => {itemButtons(e)});


    if (checkoutCart == '/user_checkout.php') {
        checkoutEl.addEventListener('click', (e) => {itemButtons(e)});
        // disable checkout button if cart is empty
        if (itemsInCart.length === 0) checkoutBtn.disabled = true;
    };

    // function for navbar cart shop, for incrementing, decrementing or removing items from nav cart
    function itemButtons(e) {
        e.stopPropagation();
        const isIncrementBtn = e.target.classList.contains('button-plus');
        const isDecrementBtn = e.target.classList.contains('button-minus');
        const isIncrementIcon = e.target.classList.contains('fa-plus');
        const isDecrementIcon = e.target.classList.contains('fa-minus');
        const isDel = e.target.classList.contains('button-delete');
        const isDelIcon = e.target.classList.contains('fa-trash');

        if (isIncrementBtn || isDecrementBtn || isIncrementIcon || isDecrementIcon || isDel || isDelIcon) {
            for (let i = 0; i < itemsInCart.length; i++) {
                if (itemsInCart[i].id === e.target.dataset.id) {
                    if (isIncrementBtn || isIncrementIcon) {
                        itemsInCart[i].count += 1;
                    } else if (isDecrementBtn || isDecrementIcon) {
                        itemsInCart[i].count -= 1;
                    } else if (isDel || isDelIcon) {
                        itemsInCart[i].count = 0;
                    };
                itemsInCart[i].price = itemsInCart[i].basePrice * itemsInCart[i].count;
                }
                if (itemsInCart[i].count <= 0) {
                    itemsInCart.splice(i, 1);
                };
                if (checkoutCart == '/user_checkout.php') {
                    if (itemsInCart.length === 0) {
                        checkoutBtn.disabled = true;
                    } else checkoutBtn.disabled = false;
                    
                };
            };
        updateShoppingCartHTML();
        };
    };
  updateShoppingCartHTML();
  };
}