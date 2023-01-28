function validateEmail(email) {
  let res =
    /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$/;
  return res.test(email);
}

function validatePassword(password) {
  let res = /^[a-zA-Z0-9]+$/;
  return res.test(password);
}

function validatenumber(number) {
  let res = /[-+]?[0-9]*.?[0-9]+/;
  return res.test(number);
}

function validate(event) {
  let form = document.getElementById("loginForm");
  let erremail = document.getElementById("emailSpan");
  let errpassword = document.getElementById("passwordSpan");
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  event.preventDefault();
  let bol = true;

  erremail.innerText = "";
  if (!validateEmail(email)) {
    erremail.innerText = '"' + email + '"' + "Email is not valid";
    erremail.style.color = "red";
    bol = false;
  }

  errpassword.innerText = "";
  if (!validatePassword(password)) {
    errpassword.innerText = "password is not valid";
    errpassword.style.color = "red";
    bol = false;
  }
  if (bol) {
    form.submit();
  }

  return false;
}
