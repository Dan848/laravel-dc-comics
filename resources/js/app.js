import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])



const deleteSubButton = document.querySelector(".del-button");

deleteSubButton.addEventListener("click", (event) =>{
    event.preventDefault();
    const itemTitle = button.getAttribute("data-item-title");
    const modal = document.getElementById("delModal");
    const bootstrapModal =new bootstrap.Modal(modal);
    bootstrapModal.show();

    const deleteModalItemTitle = modal.querySelector("#deleteModalItemTitle");
    deleteModalItemTitle.textContent = dataTitle
})
