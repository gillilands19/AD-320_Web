const nameField = document.getElementById('name');
const emailField = document.getElementById('email');
const form = document.querySelector('.test-form');
const errorContainer = document.querySelector('.error-msg')

function validateForm(e){
  if(nameField.value == '' || emailField.value == ''){
    errorContainer.innerHTML = '<p>Please fill out required fields</p>';
    e.preventDefault();
  }
}

form.addEventListener('submit', validateForm);