function check(){
  var password = document.getElementById("password").value;
  var password2 = document.getElementById("password2").value;

  if( password !== password2 ){
    alert('Your passwords do not match.Please try again');
  }
}
