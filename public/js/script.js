let newItem = document.querySelector('#userInput')
let errorMessage = document.querySelector('#errorMessage')


newItem.addEventListener('keydown', function() {
    console.log(newItem.value.length)
    if (newItem.value.length < 1 || newItem.value.length > 50) {
        errorMessage.classList.remove('hidden')
        errorMessage.classList.add('visible')
    } else {
        errorMessage.classList.remove('visible')
        errorMessage.classList.add('hidden')
    }
})