//Here is your CODE!

function render() {
    console.log(123)
}

var render = (e) => {
    let container = document.getElementsByClassName('container')[0]

    if(window.getSelection) {
        text = window.getSelection().toString()
    } else if (window.document.getSelection) {
        text = window.document.getSelection().toString()
    }

    container.innerHTML = container.innerHTML.replace(text, `<span style="color: red; background-color: yellow;">${text}</span>`)
};
