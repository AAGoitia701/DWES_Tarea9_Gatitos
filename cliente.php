
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat API</title>
</head>
<body>
    <h1>Curiosidades de Gatos</h1>

    <main>
        <div class="fact">
            <h2>Si quieres saber algo de los gatos</h2>
            <button type="button" onclick="ajaxCat();">Cat Fact</button>
            <p></p>
        </div>
    
        <div class="img">
            <h2>Si quieres ver una imagen de un gatito</h2>
            <button type="button" onclick="ajaxCatImg();">Cat Img</button>
            <img></img>
        </div>

    </main>

    
    <script src="procesar.js"></script>
</body>
</html>