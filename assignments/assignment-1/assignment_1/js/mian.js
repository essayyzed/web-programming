

const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const gender = document.getElementsByName('gender');
const genValue = false;
const select = document.getElementById('semester');
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    e.preventDefault();

  let messages = []
  if (name.value === '' || name.value == null) {
    alert('Name is required')
  }

  if (password.value.length <= 6) {
    alert('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    alert('Password must be less than 20 characters')
  }
  var location = document.getElementById('Location');
  var invalid = location.value == "Please Select";

  for(var i=0; i<gender.length;i++){
    if(gender[i].checked == true){
        genValue = true;    
    }
}
    if(!genValue){
        alert("Please Choose the gender");
        return false;
    }

    if (select.value== "Select")
    {
        alert('Please enter first name');
        select.style.borderColor = "red"; 
        return false; 
    }  
})