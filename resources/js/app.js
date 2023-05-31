import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])



const deleteSubButton = document.querySelector(".delete-button");

deleteSubButton.addEventListener("click", (event) =>{
    event.preventDefault();
    const itemTitle = deleteSubButton.getAttribute("data-item-title");
    const modal = document.getElementById("deleteModal");
    console.log(itemTitle);
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
    console.log("click1");
    const deleteModalItemTitle = modal.querySelector("#deleteModalItemTitle");
    deleteModalItemTitle.textContent = itemTitle;
    console.log("click2");

    const deleteModalButton = document.querySelector(".delete-modal-button");
    deleteModalButton.addEventListener("click", () => {
        deleteSubButton.parentElement.submit()
    });
})
