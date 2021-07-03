<!-- calculadora Farol EQ-->
<div class="cells">
    <div class="titulo">
        Tamanho do Farol do Equador
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Altura FOP (mm):
            </span>
        </div>
        <input type="text" class="form-control" id="altFOP1" value="">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Largura FOP (mm):
            </span>
        </div>
        <input type="text" class="form-control" id="largFOP1" value="">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Area FOP (mm2):
            </span>
        </div>
        <input type="text" class="form-control" id="areaFOP1" value="">
    </div>

    <div class="input-group mb-3 align-items-center">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">
                Cilindrico:
            </span>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cilindroYes" name="cilindro" value="true" style="margin-left: 15px;">
            <label class="form-check-label" for="inlineCheckbox1">Sim</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cilindroNo" name="cilindro" value="false" checked>
            <label class="form-check-label" for="inlineCheckbox2">Não</label>
        </div>
    </div>
    <div class="input-group mb-3">
        <div class="row bg-light py-2">
            <div class="col-7 align-self-center">
                A largura do Farol <br> deve ser de:
            </div>
            <div class="col-3 align-self-center">
                <input type="text" class="form-control" id="largF1" value="0" style="height:66px; margin:auto">
            </div>
            <div class="col-2 align-self-center pl-5">
                <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-clipboard-512.png" alt="" class="icon" onclick="copyToClipboard(document.getElementById('largF1').value+' mm')">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#altFOP1').change(function() {
                $("#largF1").val(farolEq($("#altFOP1"), $("#largFOP1"), $("#areaFOP1")));
                $("#altFOP").val($("#altFOP1").val());
                $("#altFOP2").val($("#altFOP1").val());
                $("#altFOP3").val($("#altFOP1").val());
            })
            $('#largFOP1').change(function() {
                $("#largF1").val(farolEq($("#altFOP1"), $("#largFOP1"), $("#areaFOP1")));
                $("#largFOP").val($("#largFOP1").val());
                $("#largFOP2").val($("#largFOP1").val());
                $("#largFOP3").val($("#largFOP1").val());
            })
            $('#areaFOP1').change(function() {
                $("#largF1").val(farolEq($("#altFOP1"), $("#largFOP1"), $("#areaFOP1")));
            })
            $('#cilindroYes').change(function() {
                $("#largF1").val(farolEq($("#altFOP1"), $("#largFOP1"), $("#areaFOP1")));
            })
            $('#cilindroNo').change(function() {
                $("#largF1").val(farolEq($("#altFOP1"), $("#largFOP1"), $("#areaFOP1")));
            })
        })
    </script>
</div>