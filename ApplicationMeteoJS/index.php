<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icone de https://fontawesome.com/ -->
    <script src="https://kit.fontawesome.com/2d652a1965.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3vvmD3hptI8LUk4WlXvX9Pzc5Bz7N0" crossorigin="anonymous">
    <title>Météo API</title>
</head>

<body>
    <h1>Quel temps fait-il ?</h1>
    <div class="container">
        <div class="justify-content-center">
            <div class="col-12 col-sm-6 my-3">
                <form action="" class="form-group">
                    <div>
                        <input type="text" class="form-control" id="inputCity" placeholder="Rechercher une ville">
                    </div>
                    <button type="submit" class="btn btn-info btn-block">
                        Rechercher
                    </button>
                </form>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center my-3">
                <div class="box-container">
                    <div id="city" class="box"></div>
                    <div id="temp" class="box"></div>
                    <div id="humidity" class="box"></div>
                    <div id="wind" class="box"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script src="app.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>