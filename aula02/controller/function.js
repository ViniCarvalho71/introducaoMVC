$(document).ready(function() {

    $('.btn-send').click(function(e) {
        e.preventDefault()


        let dados = $('#form').serialize()

        $('#retorno').empty()
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../model/retorno.php',
            success: function() {}
        })


    })
})