const btn = document.getElementById("btn");

btn.addEventListener("click", () => {
    let UserName = document.getElementById("UserName").value;
    let Email = document.getElementById("Email").value;
    let Password = document.getElementById("Password").value;
    let CPassword = document.getElementById("CPassword").value;

    if (UserName == "" || Email == "" || Password == "" || CPassword == "") {
        window.alert("Please Fill the Form");
    } else if (Password != CPassword) {
        window.alert("Please Enter Same Password")
    }
    // else if (document.getElementById('checkbox').checked){
        // window.alert("Your Form is Submit");
    // }
//     else {
//         window.alert("Please Accept terms of services");
//     }
});