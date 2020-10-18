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
let currentProductWrapper = document.querySelector(".current_product-wrapper");
let product = document.querySelectorAll(".product_bloc");
let wrapper = document.querySelector(".current_product");

function createElem(html_elem, value) {
    let variable = document.createElement(html_elem);
    if (variable !== "undefined") variable.setAttribute("class", value);
    return variable;
}

if (currentProductWrapper.children[0].innerHTML == "") console.log("hello");

for (let i = 0; i < product.length; i++) {
    if (product.length > 0 && product[i] !== "undefined") {
        product[i].addEventListener("click", (event) => {
            
            currentProduct["title"]       = product[i].childNodes[1].innerHTML;
            currentProduct["description"] = product[i].childNodes[2].innerHTML;
            currentProduct["img"]         = product[i].childNodes[3].nextSibling.currentSrc;
            currentProduct["id"]          = product[i].childNodes[5].dataset.id;

            wrapper.style.display = "block";
            wrapper.style.background = "rgb(28, 30, 33)";
            wrapper.style.boxShadow = "0 0 10px rgb(28, 30, 33)";
            wrapper.style.marginTop = "40px";
            wrapper.style.padding = "30px";
            wrapper.style.opacity = "1";

            switch (product[i].childNodes.length > 0) {

                case product[i].childNodes[1].innerHTML !== "":
                    currentProductWrapper.children[0].innerHTML = currentProduct["title"];

                case product[i].childNodes[2].innerHTML !== "":
                    currentProductWrapper.children[1].innerHTML = currentProduct["description"];

                case product[i].childNodes[3].nextSibling.currentSrc !== "":
                    currentProductWrapper.children[2].setAttribute("src", currentProduct["img"]);
                
             }       
        })
    }  
}

// Замертка в дальнейшом при нажатии на документе фиксировать клик и если клоик не неа продукт блоке карте то тогда убирать выбранный продукт
