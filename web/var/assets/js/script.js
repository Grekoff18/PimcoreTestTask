// function addToCart() {
//     document.onclick = event => {
//         console.log(event.target.classList);
//     }
// }

// addToCart()

function modalPopUp() {

    let shopingCartBtn = document.querySelector(".shopping_cart");
    let modal = document.querySelector(".modal");
    let modalBg = document.querySelector(".modal_bg");

    if (typeof shopingCartBtn !== "undefined" || typeof modal !== "undefined") {

        shopingCartBtn.addEventListener("click", () => {
        modal.classList.add("show");
        modalBg.classList.add("show");
        })

        document.addEventListener("click", (event) => {
            let eventTarget = event.target.classList.value;
            if (eventTarget === 'modal_bg show') {
                modal.classList.remove("show");
                modalBg.classList.remove("show");
            }   
        })
    }
}

modalPopUp();
