const addItemForm = document.querySelector('#addItem')
const newItem = document.querySelector('#userInput')
const errorMessage = document.querySelector('#errorMessage')


newItem.addEventListener('keyup', function() {
    if (newItem.value.length === 0 || newItem.value.length > 50) {
        errorMessage.classList.remove('hidden')
        errorMessage.classList.add('visible')
        errorMessage.innerText = 'Item added box must not be blank or greater than 50 characters long'
    } else {
        errorMessage.innerText = '';
        errorMessage.classList.remove('visible')
        errorMessage.classList.add('hidden')
    }
})



addItemForm.addEventListener('submit', function(e) {
    if (newItem.value.length < 1 || newItem.value.length > 50) {
        e.preventDefault()
        if (!window.location.href.includes('?error=1')) {
            window.location.href += '?error=1'
        }
        location.reload()
    }
})