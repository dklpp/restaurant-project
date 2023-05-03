let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'Cheese plate',
        tag: 'Cheeseplate',
        price: 15,
        inCart: 0
    },
    {
        name: 'Chicken Wings',
        tag: 'ChickenWings',
        price: 11,
        inCart: 0
    },
    {
        name: 'Mozzarella Sticks',
        tag: 'MozzarellaSticks',
        price: 9.00,
        inCart: 0
    },
    {
        name: 'Burger',
        tag: 'Burger',
        price: 8,
        inCart: 0
    },
    {
        name: 'Salmon with puree',
        tag: 'Salmonwithpuree',
        price: 17,
        inCart: 0
    },
    {
        name: 'Steak with grilled vegetables',
        tag: 'Steakwithgrilledvegetables',
        price: 14,
        inCart: 0
    }
]


for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        const cartNumberSpan = document.querySelector('.cart .link span');
        if (cartNumberSpan) {
            cartNumberSpan.textContent = productNumbers;
        }
    }
}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart .link span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart .link span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if (cartItems != null) {
        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');
    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <div class="product-name">
                    <ion-icon name="close-circle-outline"></ion-icon>
                    <span>${item.name}</span>
                </div>
                <div class="price">$${item.price},00</div>
                <div class="quantity">
                    <ion-icon class="decrease" name="chevron-back-circle-outline"></ion-icon>
                    <span>${item.inCart}</span>
                    <ion-icon class="increase" name="chevron-forward-circle-outline"></ion-icon>
                </div>
                <div class="total">
                    $${item.inCart * item.price},00
                </div>
            </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="basket-total-container">
                <h4 class="basket-total-title">
                    Your Total: 
                </h4>
                <h4 class="basket-total">
                    $${cartCost}
                </h4>
            </div>
        `;
    }
}

onLoadCartNumbers();
displayCart();
