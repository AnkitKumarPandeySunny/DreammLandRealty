const popup = document.getElementById('popup')
const closeBtn = document.getElementById('close-btn')
const form = document.getElementById('enquiry-form')
const successMsg = document.getElementById('success-msg')

const showPopup = () => {
  popup.classList.remove('hidden')
  console.log('Popup displayed after 5 seconds')
}

window.addEventListener('load', () => {
  console.log('Page loaded. Showing popup in 5 seconds...')
  setTimeout(showPopup, 5000)
})

closeBtn.addEventListener('click', () => {
  popup.classList.add('hidden')
  console.log('Popup closed')
})

// form.addEventListener('submit', e => {
//   e.preventDefault()
//   const data = Object.fromEntries(new FormData(form).entries())
//   console.log('Form submitted:', data)

//   successMsg.classList.remove('hidden')
//   form.reset()

//   setTimeout(() => {
//     popup.classList.add('hidden')
//     successMsg.classList.add('hidden')
//   }, 2000)
// })

document.addEventListener('DOMContentLoaded', function() {
  const enquiryForm = document.getElementById('enquiry-form');
  
  if (enquiryForm) {
    enquiryForm.addEventListener('submit', async function(e) {
      e.preventDefault();
      
      // Get form elements
      const submitBtn = document.getElementById('enquiry-submit-btn');
      const btnText = document.getElementById('enquiry-btn-text');
      const btnSpinner = document.getElementById('enquiry-btn-spinner');
      
      // Disable button and show loading state
      submitBtn.disabled = true;
      submitBtn.setAttribute('aria-disabled', 'true');
      btnText.textContent = 'Sending...';
      btnSpinner.style.display = 'inline-block';
      
      // Collect form data
      const formData = {
        name: enquiryForm.elements['name'].value,
        phone: enquiryForm.elements['contact'].value,
        location: enquiryForm.elements['location'].value,
        message: enquiryForm.elements['message'].value
      };
      
      const apiURL = 'https://backendforankit.onrender.com/sendEmailForDreamland'
        try {
          const response = await fetch(apiURL, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(formData)
        });
        
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        alert('Thank you! Your enquiry has been submitted successfully.');
        enquiryForm.reset();
        
        // Close popup after successful submission
        document.getElementById('popup').classList.add('hidden');
      } catch (error) {
        console.error('Enquiry submission error:', error);
        alert('Sorry, there was an error submitting your enquiry. Please try again.');
      } finally {
        // Re-enable button and reset loading state
        submitBtn.disabled = false;
        submitBtn.removeAttribute('aria-disabled');
        btnText.textContent = 'Submit';
        btnSpinner.style.display = 'none';
      }
    });
  }
});