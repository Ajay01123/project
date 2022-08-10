// $('#login').onsubmit(function (e) {
//     e.preventDefault();
  
   
//   });


function validation() {
    //console.log('sa');
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    // var form = document.getElementById('form');
    // var login = document.getElementById("login");
    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    var regex=/[a-zA-Z0-9_ ]/;
    var email_status;
    var password_status;

    if (email == "") {
        document.getElementById("semail").innerHTML = "Please fill the email id";
        //return false;
        email_status = false;
    } else if (email.match(pattern)) {
        document.getElementById("semail").innerHTML = "";
        email_status = true;
    } else {
        document.getElementById("semail").innerHTML = "Please fill correct email id";
        // return false;
        email_status = false;
    }

    if (password == "") {
        document.getElementById("pass").innerHTML = "Please fill the password";
        // return false;
        password_status = false;
        }else if (password.match(regex))  {
        document.getElementById("pass").innerHTML = "";
        password_status = true;

        }
     else {
        document.getElementById("pass").innerHTML = "Please fill the password";
        //return true;
        password_status = false;
    }
    if (password_status == false || email_status == false) {
        return false;
    }

}


var email = document.getElementById("email");
var password = document.getElementById("password");

email.addEventListener("keyup", function () {
   document.getElementById("semail").innerHTML = "";
   //alert(909);
})
  password.addEventListener("keyup", function () {
    document.getElementById("pass").innerHTML = "";
   //alert(8989);
})

