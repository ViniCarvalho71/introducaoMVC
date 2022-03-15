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
            success: function(dados) {
                $('#retorno').append(`
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert-primary">
                    <h1 class="text-white text-center">
                        ${dados.mensagem}
                    </h1>
                    <img src="../img/${dados.tipo}" alt="" class="img-fluid">
                </div>
            </div>
                `)
            }  
        })


    })
})