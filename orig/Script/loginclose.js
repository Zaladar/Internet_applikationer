// Get the modal
var login = document.getElementById('login');
var register = document.getElementById('register');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == login) {
      login.style.display = "none";
    }
    if (event.target == register) {
      register.style.display = "none";
    }
}
