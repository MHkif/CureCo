function validateEmail(email) {
  let res =
    /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$/;
  return res.test(email);
}

function validatePassword(password) {
  let res = /^[a-zA-Z0-9]+$/;
  return res.test(password);
}

function validatePassword(password, confirm) {
  let res = /^[a-zA-Z0-9]+$/;
  return password == confirm ? true : false;
}

function validatenumber(number) {
  let res = /[-+]?[0-9]*.?[0-9]+/;
  return res.test(number);
}

function validateName(name) {
  let res = /[-+]?[0-9]*.?[0-9]+/;

  return res.test(name) ? false : true;
}

function validate(event) {
  let form = document.getElementById("registerForm");
  let first_name = document.getElementById("first_name").value;
  let last_name = document.getElementById("last_name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let confirm_password = document.getElementById("confirm_password").value;

  let erreFirst_name = document.getElementById("firstSpan");
  let erreLast_name = document.getElementById("lastSpan");
  let erremail = document.getElementById("emailSpan");
  let errpassword = document.getElementById("passwordSpan");
  let errConf_password = document.getElementById("confirmSpan");

  event.preventDefault();
  let bol = true;

  erreFirst_name.innerText = "";
  if (!validateName(first_name)) {
    erreFirst_name.innerText =
      '"' + first_name + '"' + "First name is not valid";
    erreFirst_name.style.color = "red";
    bol = false;
  }

  erreLast_name.innerText = "";
  if (!validateName(last_name)) {
    erreLast_name.innerText = '"' + last_name + '"' + "Last name is not valid";
    erreLast_name.style.color = "red";
    bol = false;
  }

  erremail.innerText = "";
  if (!validateEmail(email)) {
    erremail.innerText = '"' + email + '"' + "Email is not valid";
    erremail.style.color = "red";
    bol = false;
  }

  errpassword.innerText = "";
  if (!validatePassword(password)) {
    errpassword.innerText = "Password is not valid";
    errpassword.style.color = "red";
    bol = false;
  }

  errConf_password.innerText = "";
  if (!validateConPassword(password, confirm_password)) {
    errConf_password.innerText = "Passwords does not matches, Try Again";
    errConf_password.style.color = "red";
    bol = false;
  }

  if (bol) {
    form.submit();
  }

  return false;
}
