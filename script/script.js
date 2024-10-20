
document.getElementById("submit").addEventListener("submit", function(event) {

    event.preventDefault()

    const formData = new FormData(this)

    fetch("php/submit.php", {
        method: 'POST',
        body: formData
    })

    alert("Successfully Submited")

    window.location.reload()

})

document.getElementById("delete").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

    fetch("php/delete.php", {
        method: 'POST',
        body: formData
    })

    alert("Deleted Successfully")

    window.location.reload()

})

