/*==========================================
=            ModalPopUp Section            =
==========================================*/

/* Get modal pop-up variables */
let modal = document.querySelector(".modal");
let modalBg = document.querySelector(".modal_bg");

/* Write modalPopUp function */
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

/*=====  End of ModalPopUp Section  ======*/

/*======================================================================
=            Section of the preview of the selected product            =
======================================================================*/

/* Get product variables */
let currentProduct = [];
let currentProductWrapper = document.querySelector(".current_product-wrapper");
let product = document.querySelectorAll(".product_bloc");
let wrapper = document.querySelector(".current_product");

/* Cycle through the products */
for (let i = 0; i < product.length; i++) {
    /* If there are products */
    if (product.length > 0 && product[i] !== "undefined") {
        /* Hang events */
        product[i].addEventListener("click", (event) => {        
            /* Write the data of the selected product to the array */
            currentProduct["title"]       = product[i].childNodes[1].innerHTML;
            currentProduct["description"] = product[i].childNodes[2].innerHTML;
            currentProduct["img"]         = product[i].childNodes[3].nextSibling.currentSrc;
            currentProduct["id"]          = product[i].childNodes[5].dataset.id;

            wrapper.style.background = "rgb(28, 30, 33)";
            wrapper.style.boxShadow  = "0 0 10px rgb(28, 30, 33)";
            wrapper.style.marginTop  = "40px";
            wrapper.style.padding    = "30px";
            wrapper.style.opacity    = "1";

            /* Fill in the information card of the selected product */
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

/*=====  End of Section of the preview of the selected product  ======*/

/*============================================================================
=            Section of the close btn of the current product cart            =
============================================================================*/

/* Get the close btn */
let currentBtn = document.querySelector(".current_product-btn");

/* If button is not undefined and this is not null */
if (currentBtn !== "undefined" && currentBtn !== null) {
    /* Hang event */
    currentBtn.onclick = () => {

        wrapper.style.background = null;
        wrapper.style.boxShadow  = null;
        wrapper.style.marginTop  = null;
        wrapper.style.padding    = null;
        wrapper.style.opacity    = null;

        /* Clearing information about the selected product */
        switch (currentProductWrapper.hasChildNodes()) {

                case currentProductWrapper.children[0].innerHTML !== "":
                    currentProductWrapper.children[0].innerHTML = "";

                case currentProductWrapper.children[1].innerHTML !== "":
                    currentProductWrapper.children[1].innerHTML = "";

                case currentProductWrapper.children[2].innerHTML !== "":
                    currentProductWrapper.children[2].setAttribute("src", "");
             }   
    }
}

/*=====  End of Section of the close btn of the current product cart  ======*/

/*===========================================
=            Food basket section            =
===========================================*/





/*=====  End of Food basket section  ======*/



/*============================================================
=            Block with other important functions            =
============================================================*/


/* Function for created some html element */
function createElem(html_elem, value) {
    let variable = document.createElement(html_elem);
    
    if (variable !== "undefined") variable.setAttribute("class", value);
    return variable;
}

/*=====  End of Block with other important functions  ======*/



