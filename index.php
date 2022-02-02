<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="data:;base64,iVBORw0KGgo=">
        <link rel="stylesheet" href="style.css">
        <title>Teste -Junior Lima - Barra de Progresso</title>
    </head>

    <body>

        <div class="container">

            <div class="upload">

                <<h1>Upload de Arquivos</h1><br>

                <form id="formFiles" name="formFiles" action="javascript:void(0);" enctype="multipart/form-data">
                    <input type="file" name="file" required><br><br>
                    <button type='submit'>Enviar Arquivo</button>
                </form>

                <div id="return"></div>

                <div id="progressBar">
                    <span></span>
                </div>
                
            </div>

        </div>

        <script async src="script.js"></script>

    </body>
</html>