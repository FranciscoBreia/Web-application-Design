// Email validation
function chkEmail() {
  let inputEmail = document.getElementById("email");
  let checkEmail = inputEmail.value.trim();
  const exp = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

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
  let password = document.getElementById("password").value;
  let confirm = document.getElementById("confirm").value;

  if (password !== confirm) {
    alert("Passwords do not match");
    document.getElementById("confirm").focus();
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

// Validate Signup Form
function validateSignupForm() {
  return chkName() && chkEmail() && chkPassword() && chkConfirmPassword();
}


// Validate Login Form
function validateLoginForm() {
  return chkEmail() && chkPassword();
}


// Validate Contact Form
function validateContactForm() {
  return chkName() && chkEmail();
}


/////////////////////////////////////u

// Checkout form validation
function validateCheckoutForm() {
  // Full Name
  let fullname = document.getElementById("fullname");
  if (fullname.value.trim().length < 2) {
    alert("Please enter your full name");
    fullname.focus();
    return false;
  }

  // Email
  let email = document.getElementById("email");
  let expEmail = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  if (!expEmail.test(email.value.trim())) {
    alert("Please enter a valid email address");
    email.focus();
    return false;
  }

  // Phone (Singapore: 8 digits, starts with 6/8/9)
  let phone = document.getElementById("phone");
  let expPhone = /^[689]\d{7}$/;
  if (!expPhone.test(phone.value.trim())) {
    alert("Please enter a valid phone number (8 digits, starts with 6, 8 or 9)");
    phone.focus();
    return false;
  }

  // Street Address
  let street = document.getElementById("street");
  if (street.value.trim().length < 5) {
    alert("Please enter a valid street address");
    street.focus();
    return false;
  }

  // City
  let city = document.getElementById("city");
  if (city.value.trim().length < 2) {
    alert("Please enter a valid city");
    city.focus();
    return false;
  }

  // Postal Code (Singapore: 6 digits)
  let postal = document.getElementById("postal");
  let expPostal = /^\d{6}$/;
  if (!expPostal.test(postal.value.trim())) {
    alert("Please enter a valid 6-digit postal code");
    postal.focus();
    return false;
  }

  // Country
  let country = document.getElementById("country");
  if (country.value === "") {
    alert("Please select your country");
    country.focus();
    return false;
  }

  // Cardholder Name
  let cardName = document.getElementById("cardname");
  if (cardName.value.trim().length < 2) {
    alert("Please enter the cardholder's name");
    cardName.focus();
    return false;
  }

  // Card Number (16 digits)
  let cardNumber = document.getElementById("cardnumber");
  let expCard = /^\d{16}$/;
  if (!expCard.test(cardNumber.value.trim())) {
    alert("Please enter a valid 16-digit card number");
    cardNumber.focus();
    return false;
  }

  // Expiry Date (MM/YY format)
  let expiry = document.getElementById("expiry");
  let expExpiry = /^(0[1-9]|1[0-2])\/\d{2}$/;
  if (!expExpiry.test(expiry.value.trim())) {
    alert("Please enter expiry date in MM/YY format");
    expiry.focus();
    return false;
  }

  // CVV (3 digits)
  let cvv = document.getElementById("cvv");
  let expCVV = /^\d{3}$/;
  if (!expCVV.test(cvv.value.trim())) {
    alert("Please enter a valid 3-digit CVV");
    cvv.focus();
    return false;
  }

  return true; // All checks passed
}





