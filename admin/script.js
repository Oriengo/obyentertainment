function validateForm() {
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();

    if (username === "" || password === "") {
        alert("Both fields are required!");
        return false;
    }
    
    return true;
}
