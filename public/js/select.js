document.querySelector("#products-list").addEventListener('change', function(event){
    let total = 0
    for (let index = 0; index < event.target.selectedOptions.length; index++) {
        console.log(event.target.selectedOptions)
        console.log(event.target.selectedOptions[index])
        total = parseFloat(event.target.selectedOptions[index].dataset.value) + total
    }

    document.querySelector('#total-price').innerText = `R$ ${total.toFixed(2)}`
})
