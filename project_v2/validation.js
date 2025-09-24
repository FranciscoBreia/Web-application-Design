// Email validation
function chkEmail() {
  let inputEmail = document.getElementById("email");
  let checkEmail = inputEmail.value.trim();
  const exp = /^[^\s@]+@(\w+\.){1,3}\w{2,3}$/;

  if (!exp.test(checkEmail)) {
    alert("Please enter a valid email address");
    inputEmail.focus();
    return false;
  }
  return true;
}


// Password validation (min 6 chars)
function chkPassword() {
  let inputPassword = document.getElementById("password");
  if (inputPassword.value.length < 6) {
    alert("Password must be at least 6 characters long");
    inputPassword.focus();
    return false;
  }
  return true;
}


// Confirm password validation
function chkConfirmPassword() {
  let password = document.getElementById("password")?.value;
  let confirm = document.getElementById("confirm");
  if (!confirm) return true;

  if (password !== confirm.value) {
    alert("Passwords do not match");
    confirm.focus();
    return false;
  }
  return true;
}

// Full Name validation (only letters and spaces)
function chkName() {
  let inputName = document.getElementById("fullname");
  let exp = /^[A-Za-z\s]+$/;

  if (!exp.test(inputName.value.trim())) {
    alert("Name must contain only letters and spaces");
    inputName.focus();
    return false;
  }
  return true;
}



// EVENT LISTENERS


window.onload = function () {
  // Signup form
  if (document.getElementById("fullname")) {
    document.getElementById("fullname").addEventListener("change", chkName);
  }

  if (document.getElementById("email")) {
    document.getElementById("email").addEventListener("change", chkEmail);
  }

  if (document.getElementById("password")) {
    document.getElementById("password").addEventListener("change", chkPassword);
  }

  if (document.getElementById("confirm")) {
    document.getElementById("confirm").addEventListener("change", chkConfirmPassword);
  }

  // Contact form
  if (document.getElementById("fullname") && document.forms["contactForm"]) {
    document.getElementById("fullname").addEventListener("change", chkName);
    document.getElementById("email").addEventListener("change", chkEmail);
  }

  // Checkout form fields
  if (document.getElementById("phone")) {
    document.getElementById("phone").addEventListener("change", function () {
      let phone = document.getElementById("phone");
      let expPhone = /^[689]\d{7}$/;
      if (!expPhone.test(phone.value.trim())) {
        alert("Phone must be 8 digits and start with 6, 8 or 9");
        phone.focus();
      }
    });
  }

  if (document.getElementById("postal")) {
    document.getElementById("postal").addEventListener("change", function () {
      let postal = document.getElementById("postal");
      let expPostal = /^\d{6}$/;
      if (!expPostal.test(postal.value.trim())) {
        alert("Postal code must be 6 digits");
        postal.focus();
      }
    });
  }

  if (document.getElementById("cardnumber")) {
    document.getElementById("cardnumber").addEventListener("change", function () {
      let cardNumber = document.getElementById("cardnumber");
      let expCard = /^\d{16}$/;
      if (!expCard.test(cardNumber.value.trim())) {
        alert("Card number must be 16 digits");
        cardNumber.focus();
      }
    });
  }

  if (document.getElementById("cvv")) {
    document.getElementById("cvv").addEventListener("change", function () {
      let cvv = document.getElementById("cvv");
      let expCVV = /^\d{3}$/;
      if (!expCVV.test(cvv.value.trim())) {
        alert("CVV must be 3 digits");
        cvv.focus();
      }
    });
  }
};
