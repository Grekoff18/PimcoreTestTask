// function addToCart() {
//     document.onclick = event => {
//         console.log(event.target.classList);
//     }
// }

// addToCart()

// function modalPopUp() {
//
//     let shopingCartBtn = document.querySelector(".shopping_cart");
//     let modal = document.querySelector(".modal");
//     let modalBg = document.querySelector(".modal_bg");
//
//     if (typeof shopingCartBtn !== "undefined" || typeof modal !== "undefined") {
//
//         shopingCartBtn.addEventListener("click", () => {
//         modal.classList.add("show");
//         modalBg.classList.add("show");
//         })
//
//         document.addEventListener("click", (event) => {
//             let eventTarget = event.target.classList.value;
//             if (eventTarget === 'modal_bg show') {
//                 modal.classList.remove("show");
//                 modalBg.classList.remove("show");
//             }
//         })
//     }
// }
//
// modalPopUp();

let signInForm = document.getElementById("signin");
let btn = document.querySelector(".form_btn");
btn.onclick = event => {
    event.preventDefault();
    let parent = btn.parentNode;
    if (typeof parent !== "undefined") {
        parent.childNodes[1].innerHTML = "Register";
        parent.children[4].innerHTML = "If you have an account";
    }
}
