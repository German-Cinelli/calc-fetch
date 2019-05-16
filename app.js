var form = document.querySelector('#form');
var rs = document.querySelector('#rs');

form.addEventListener('submit', function(e){
    e.preventDefault();
    var data = new FormData(form);

    fetch('main.php', {
        method: 'POST',
        body: data
    })

    .then( res => res.json())
        .then( data => {
            if(data === 'err'){
                rs.innerHTML = `
                    Result: Error
                `
            } else {
                rs.innerHTML = `
                    Result: ${data}
                `
            }
        })

});
