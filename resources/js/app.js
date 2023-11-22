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

document.addEventListener("DOMContentLoaded", function () {
    const phoneNumberInput = document.getElementById("phoneNumber");

    phoneNumberInput.addEventListener("input", function (event) {
        const inputValue = event.target.value;
        const cleanedValue = inputValue.replace(/\s/g, "");
        const formattedValue = cleanedValue.replace(/(.{4})/g, "$1 ");

        event.target.value = formattedValue.trim();
    });
});
