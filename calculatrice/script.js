$(document).ready(function() {
   
    $('.number').click(function(data) {
        let number = data.target.innerHTML
        $('#input').val( $('#input').val() + number )
    })
    
    $('.clear').click(function() {
        $('#input').val('')
    })
    
    $('.egal').click(function() {
        $('#input').val( eval( $('#input').val() ) )
    })
    
})
