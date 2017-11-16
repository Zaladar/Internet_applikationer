// get the element
var register = document.getElementById('register');
// close when clicking outside
window.onclick = function(event){
  if(event.target == register){
    register.style.display = "none";
  }
}
