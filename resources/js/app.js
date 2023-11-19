import "./bootstrap";
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const signupModal = document.getElementById("signupModal");

openModalBtn.addEventListener("click", () => {
    signupModal.classList.remove("hidden");
});

closeModalBtn.addEventListener("click", () => {
    signupModal.classList.add("hidden");
});
