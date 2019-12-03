const addItemForm = document.querySelector('#addItem')
const newItem = document.querySelector('#userInput')
const errorMessage = document.querySelector('#errorMessage')


newItem.addEventListener('keyup', function() {
    if (newItem.value.length === 0) {
        errorMessage.innerText = 'The \'add new item\' box must not be blank';
    } else if (newItem.value.length > 50) {
        errorMessage.innerText = 'The item input should not be greater than 50 characters in length';
    } else {
        errorMessage.innerText = '';
    }
})


addItemForm.addEventListener('submit', function(e) {
    if (newItem.value.length === '' || newItem.value.length > 50) {
        e.preventDefault()
        if (!window.location.href.includes('?error=1')) {
            window.location.href += '?error=1'
        }
        location.reload()
    }
})