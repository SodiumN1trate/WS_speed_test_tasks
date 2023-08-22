const buttons = document.querySelectorAll('header > a')


buttons.forEach((element, index) => {
    element.addEventListener('click', (response) => {
        window.location.href = 'a.html'
        console.log(index)
    })
});