function isValidEmail(email){
    let parts = email.split("@");

}

function validator(){
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    let f150 = document.getElementById("f150");
    let macbook = document.getElementById("macbook");
    let rv = document.getElementById("rv");
    let freeShip = document.getElementById("free");
    let overnightShip = document.getElementById("overnight");
    let threeDayShip = document.getElementById("threeDay");
    if (username.value == "" || password.value == ""){
        alert("Login Information Not Filled Out!");
        return false;
    }
    else if (!username.checkValidity()){
        alert("Username must be an email!");
        return false;
    }
    else if(!freeShip.checked && !overnightShip.checked && !threeDayShip.checked){
        alert("Shipping Information Not Entered!");
        return false;
    }
    else if (!f150.checked && !macbook.checked && !rv.checked){
        alert ("No Products Selected!");
        return false;
    }
    return true;
}