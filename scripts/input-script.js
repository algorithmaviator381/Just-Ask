const inputForm = document.getElementById('inputForm');

inputForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  if (validateForm()) {
    inputForm.submit(); 
  }
});

function validateForm() {
    
  const qualificationSelect = document.getElementById('qualification');
  const selectedQualification = qualificationSelect.value;

  if (selectedQualification === '') {
    alert('Please select a qualification'); // Display an alert if no qualification is selected
    return false;
  }

  return true;
}
