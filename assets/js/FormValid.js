const form = document.querySelector("form"),
  emailField = form.querySelector(".email_field"),
  emailInput = emailField.querySelector(".email"),
  passwordField = form.querySelector("..password_field"),
  passwordInput = passField.querySelector(".password");


// Email Validtion
function checkEmail() {
  const emaiPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!emailInput.value.match(emaiPattern)) {
    return emailField.classList.add("invalid"); //adding invalid class if email value do not mathced with email pattern
  }
  emailField.classList.remove("invalid"); //removing invalid class if email value matched with emaiPattern
}


// Password Validation
function createPass() {
  const passPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

  if (!passwordInput.value.match(passPattern)) {
    return passwordField.classList.add("invalid"); //adding invalid class if password input value do not match with passPattern
  }
  passwordField.classList.remove("invalid"); //removing invalid class if password input value matched with passPattern
}


// Calling Funtion on Form Sumbit
form.addEventListener("submit", (e) => {
  e.preventDefault(); //preventing form submitting
  checkEmail();
  createPass();


  //calling function on key up
  emailInput.addEventListener("keyup", checkEmail);
  passInput.addEventListener("keyup", createPass);


  if (
    !emailField.classList.contains("invalid") &&
    !passField.classList.contains("invalid")
  ) {
    location.href = form.getAttribute("action");
  }
});
