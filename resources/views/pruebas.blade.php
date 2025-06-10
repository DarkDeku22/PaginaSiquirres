<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>
<body>
    

    <div class="mb-3">
    <label for="icono">Selecciona un ícono</label>
    <select id="icono" name="icono" class="form-select" style="width: 100%">
        <option value='<i class="bi bi-people"></i>'>People</option>
        <option value='<i class="bi bi-house"></i>'>House</option>
        <option value='<i class="bi bi-gear"></i>'>Gear</option>
        <option value='<i class="bi bi-alarm"></i>'>Alarm</option>
        <option value='<i class="bi bi-star"></i>'>Star</option>
    </select>
</div>
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    $(document).ready(function () {
        $('#icono').select2({
            templateResult: function (data) {
                if (!data.id) return data.text;
                return $(data.id); // Renderiza la etiqueta <i class="...">
            },
            templateSelection: function (data) {
                return $(data.id);
            },
            escapeMarkup: function (markup) {
                return markup;
            }
        });
    });
</script>

</body>
</html>