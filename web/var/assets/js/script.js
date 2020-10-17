// function addToCart() {
//     document.onclick = event => {
//         console.log(event.target.classList);
//     }
// }

// addToCart()

// function getProduct() {
//     document.onclick = event => {
//         if (event.target.parentNode.className === "product_bloc" || event.target.className === "product_bloc") {
//             console.log(event.target);
//         }
//         // console.log(event.target.parentNode.className)
//     }
// }
//
// getProduct();

let modal = document.querySelector(".modal");
let modalBg = document.querySelector(".modal_bg");

function modalPopUp() {
    modal.classList.add("show");
    modalBg.classList.add("show");

    document.addEventListener("click", (event) => {
        let eventTarget = event.target.classList.value;

        if (eventTarget === "modal_bg show") {
            modal.classList.remove("show");
            modalBg.classList.remove("show");
        }
    })
}

let currentProduct = [];
let product = document.querySelectorAll(".product_bloc");
let productCart = document.querySelector(".current_product-wrapper");

for (let i = 0; i < product.length; i++) {
    product[i].addEventListener("click", event => {
        currentProduct["title"]       = product[i].childNodes[1].innerHTML;
        currentProduct["description"] = product[i].childNodes[2].innerHTML;
        currentProduct["img"]         = product[i].childNodes[3].nextSibling.currentSrc;
        currentProduct["id"]          = product[i].childNodes[5].dataset.id;



        switch (productCart.children.length !== 0) {

            case productCart.children[0].innerHTML !== "" || productCart.children[0] !== "undefined":
                 productCart.children[0].innerHTML = currentProduct["title"];

            case productCart.children[1].innerHTML !== "" || productCart.children[1] !== "undefined":
                 productCart.children[1].innerHTML = currentProduct["description"];

        }

        // if (productCart.children[0].innerHTML !== " ") {
        //     productCart.children[0].innerHTML = currentProduct["title"];
        //     productCart.children[0].innerHTML = currentProduct["title"];
        //     productCart.children[0].innerHTML = currentProduct["title"];
        // }
    })
}