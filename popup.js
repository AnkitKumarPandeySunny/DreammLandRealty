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

form.addEventListener('submit', e => {
  e.preventDefault()
  const data = Object.fromEntries(new FormData(form).entries())
  console.log('Form submitted:', data)

  successMsg.classList.remove('hidden')
  form.reset()

  setTimeout(() => {
    popup.classList.add('hidden')
    successMsg.classList.add('hidden')
  }, 2000)
})
