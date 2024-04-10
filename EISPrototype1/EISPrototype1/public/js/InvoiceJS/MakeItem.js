function MakeItem(){
    event.preventDefault();
    var confirmRoute = document.getElementById('SaveBtn').value;
    window.location.href = confirmRoute;
}