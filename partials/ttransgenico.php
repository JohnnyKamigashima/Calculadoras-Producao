<!-- calculadora T Transgenico -->

<div class="cells">
    <div class="titulo">
        Calculo do Triângulo de Transgênico
    </div>

    <div class="entrada_normal ">
        <div class="input-group-prepend">
            <label for="altFOP2" class="input-group-text">
                Altura FOP (mm):
            </label>
        </div>
        <input type="text" class="form-control" id="altFOP2" value="">
    </div>

    <div class="entrada_normal">
        <div class="input-group-prepend">
            <label for="largFOP2" class="input-group-text">
                Largura FOP (mm):
            </label>
        </div>
        <input type="text" class="form-control" id="largFOP2" value="">
    </div>

    <div class="input-group ">
        <div class="linha_resposta">
            <div class="col-7 align-self-center">
                <label for="largT1"> A largura mínima do <br>triângulo de transg. <br>deve ser (mm):</label>
            </div>
            <div class="col-3 align-self-center">
                <input type="text" class="form-control" id="largT1" value="0">
            </div>
            <div class="col-2 align-self-center pl-5"><img
                    src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-clipboard-512.png"
                    alt="Botão de copiar resultado para a Área de colagem" class="icon"
                    onclick="copyToClipboard(document.getElementById('largT1')
                    .value+' mm')">
            </div>
        </div>

    </div>
</div>
<script 
    type="text/javascript" 
    src="partials/functions/Transgenico_lib.js">
</script>
<script
    type="text/javascript"
    src="partials/functions/CopyToClipboard_lib.js">
</script>
    <script>
        $(document).ready(() => {
            $('#altFOP2').keyup(() => { //calculate points
                $("#altFOP")
                .val($("#altFOP2")
                .val());
                $("#altFOP1")
                .val($("#altFOP2")
                .val());
                $("#altFOP3")
                .val($("#altFOP2")
                .val());
                calcula();
            })

            $('#largFOP2').keyup(() => { //calculate points
                $("#largFOP")
                .val($("#largFOP2").val());
                $("#largFOP1").val($("#largFOP2").val());
                $("#largFOP3").val($("#largFOP2").val());
                calcula();
            })

        })

        function calcula() {
            $("#largT1")
            .val(Transgenico($("#altFOP2")
            .val().replace(',', '.'),
              $("#largFOP2")
            .val().replace(',', '.')));
        }
    </script>