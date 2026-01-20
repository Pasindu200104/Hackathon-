function changeView1() {
  // alert("ok 1");
  var home = document.getElementById("home");
  var aboutUs = document.getElementById("aboutUs");
  var contact = document.getElementById("contactUs");

  home.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center ";
  aboutUs.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
  contact.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
}
function changeView2() {
  // alert("ok 2");

  var home = document.getElementById("home");
  var aboutUs = document.getElementById("aboutUs");
  var contact = document.getElementById("contactUs");

  home.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
  aboutUs.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center";
  contact.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
}
function changeView3() {
  // alert("ok 3");

  var home = document.getElementById("home");
  var aboutUs = document.getElementById("aboutUs");
  var contact = document.getElementById("contactUs");

  home.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
  aboutUs.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center d-none";
  contact.classList =
    "col-lg-6 col-12 d-flex justify-content-center align-items-center ";
}

//  <-- SignUp function -->

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email1");
  var pass1 = document.getElementById("pass1");
  var pass2 = document.getElementById("pass2");

  var f = new FormData();
  f.append("fname", fname.value);
  f.append("lname", lname.value);
  f.append("email1", email.value);
  f.append("pass1", pass1.value);
  f.append("pass2", pass2.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        document.getElementById("alertSucc").innerHTML = t;
        document.getElementById("alertdiv").className = "d-block";
      } else {
        document.getElementById("alertDan").innerHTML = t;
        document.getElementById("alertdivDanger").className = "d-block";
      }
    }
  };
  r.open("POST", "signUpProcess.php", true);
  r.send(f);
}

// function verifyEmail() {
//   // alert("ok");
//   var email = document.getElementById("email2");

//   var r = new XMLHttpRequest();
//   r.onreadystatechange = function () {
//     if (r.readyState == 4) {
//       var t = r.responseText;
//       if (t == "Success") {
//         window.location = "verification.php";
//       }else{
//         alert(t);
//       }
//     }
//   };

//   r.open("GET", "verifyEmail.php?e=" + email.value, true);
//   r.send();
// }

function forgotPassword() {
  var email = document.getElementById("email2");

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        window.location = "verification.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  r.send();
}

function resetPassword() {
  // alert("OK");
  var verify = document.getElementById("verify");
  var pass3 = document.getElementById("pass3");
  var pass4 = document.getElementById("pass4");

  var f = new FormData();
  f.append("verify", verify.value);
  f.append("pass3", pass3.value);
  f.append("pass4", pass4.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Success") {
        document.getElementById("verifySucc").innerHTML = t;
        document.getElementById("verifydiv").className = "d-block";
        window.location = "signUp.php";
      } else {
        document.getElementById("verifyDan").innerHTML = t;
        document.getElementById("verifydivDanger").className = "d-block";
      }
    }
  };
  r.open("POST", "varifyProcess.php", true);
  r.send(f);
}

