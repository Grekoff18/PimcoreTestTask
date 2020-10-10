// function addToCart() {
//     document.onclick = event => {
//         console.log(event.target.classList);
//     }
// }

// addToCart()
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

let signInForm = document.getElementById("signin");
function regForm(event) {
    
}
