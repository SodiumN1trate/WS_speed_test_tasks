let results = []
let page = 1
const userList = document.getElementById('user-list')


function render () {
    userList.innerHTML = ''
    results.forEach((user) => {
        userList.innerHTML += `
            <div>
            <h1>${ user.first_name } ${ user.last_nmae }</h1>
            <small>${ user.email }</small>
            <p>${ user.phone }</p>
            <address>${ user.country } - ${ user.city }</address>
            <hr>
        `
    })
}

$.ajax({
    url: `../server-side/index.php?page=1`
}).done((response) => {
    JSON.parse(response).map((user) => {
        results.push(user)
    })
    render()
})


document.addEventListener('scroll', (response) => {
    const {scrollHeight, scrollTop, clientHeight} = document.documentElement
    
    if(Math.abs(scrollHeight - scrollTop - clientHeight) < 1) {
        page += 1
        $.ajax({
            url: `../server-side/index.php?page=${page}`
        }).done((response) => {
            JSON.parse(response).map((user) => {
                results.push(user)
            })
            render()
        })
        
    }
})
