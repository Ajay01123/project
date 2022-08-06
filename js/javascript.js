function validation() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var login = document.getElementById("login");
    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/

    if (email == "") {
        document.getElementById("semail").innerHTML = "Please fill the email id";
        //return false;
    } else if (email.match(pattern)) {
        document.getElementById("semail").innerHTML = "";
    } else {
        document.getElementById("semail").innerHTML = "Please fill correct email id";
        //return true;
    }
    if (password == "") {
        document.getElementById("pass").innerHTML = "Please fill the Password";
        return false;
    } else {
        document.getElementById("pass").innerHTML = "";
    }

    if (!login == ""); {
        document.getElementById("pass").innerHTML = "";
    }

}