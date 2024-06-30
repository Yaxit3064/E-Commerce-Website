document.getElementById('userIconPopupCb').onchange = function () {
    let form = document.getElementById('userIconPopupForm');
    if (document.getElementById('userIconPopupCb').checked) {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
}

function logout(){
   
}

function goTOAddPRoduct(){
    window.location.replace("../HTML/AddProduct.php");
}


function loginFIrst(){
    alert('Login First');
}