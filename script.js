document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Stop form from submitting

    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let errorMessage = document.getElementById("errorMessage");

    if (password.length < 8) {
        errorMessage.textContent = "Password must be 8 characters long";
        errorMessage.style.color = "red";
        return;
    }

    if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match!";
        errorMessage.style.color = "red";
        return;
    }

    errorMessage.textContent = "";
    alert("Form submitted successfully!"); 
});
