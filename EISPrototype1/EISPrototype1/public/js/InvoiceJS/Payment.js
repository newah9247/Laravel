function SendPayment(){
    event.preventDefault();
    var confirmRoute = document.getElementById('Savebtn').value;
    window.location.href = confirmRoute;
}