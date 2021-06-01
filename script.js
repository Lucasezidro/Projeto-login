const Btn = {
    open() {
        document.getElementById('login').classList.add('active')
    },

    close() {
        document.getElementById('forgot').classList.remove('active')
    }
}

let login = document.getElementsByTagName('input')

function isEmpty(){
    if(!login == " ") {
        throw new Error('Please enter a valid login')
    }
}