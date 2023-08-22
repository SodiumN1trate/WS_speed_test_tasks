const image = document.getElementById('image')
const mouse = document.getElementById('mouse')
let size = 10;

image.addEventListener('mousemove', (response) => {
    mouse.style.opacity = 0.7
    mouse.style.left = response.clientX - (size / 2) + 'px'
    mouse.style.top = response.clientY  - (size / 2) + 'px'
    console.log(response)
})


image.addEventListener('mousewheel', (response) => {
    if(response.deltaY > 0) {
        size += 10
        mouse.style.width = size + 'px'
        mouse.style.height = size + 'px'
    } else {
        size -= 10
        mouse.style.width = size + 'px'
        mouse.style.height = size + 'px'
    }
    mouse.style.left = response.clientX - (size /2) + 'px'
    mouse.style.top = response.clientY  - (size / 2) + 'px'
})