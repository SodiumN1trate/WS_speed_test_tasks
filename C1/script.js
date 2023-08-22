let input = document.getElementById('input')
let text = document.getElementById('text')
// const defaultText = text.innerHTML
let button = document.getElementById('button')

button.addEventListener('click', () => {
    // text.innerHTML = defaultText
    if (input.value.length === 0) {
        return 0
    }
    text.innerHTML = text.innerHTML.replaceAll(input.value, `<span style="background-color: red;">${input.value}</span>`)
    input.value = ''
})