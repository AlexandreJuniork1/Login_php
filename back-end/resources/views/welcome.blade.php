<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "{{asset('formulario.css')}}">
    <title>Cadasdev</title>
</head>
<body>
    <div>
        <h1 id="titulo">Cadastro de Devs</h1>
        <p id="subtitulo">Complete as informações</p>
        <br>
    </div>

    <form>
        <fieldset class="grupo">
            <div>
                <label for= "nome"><strong>Nome</strong></label> 
                <input type="text" name= "nome" id= "name" required>
            </div>
            <div>
                <label for= "sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>
            
        <div class= "campo">
                <label for= "email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
        </div>

        <div class= "campo">
            <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
            <label>
                <input type="radio" name="devweb" value="frontend" checked>Front-end
            </label>
            <label>
                <input type="radio" name="devweb" value="backend">Back-end
            </label>
            <label>
                <input type="radio" name="devweb" value="fullstack">Full-stack
            </label>
        </div>

        <div class= "campo"> 
            <label for= "senioridade"><strong>Senioridade</strong></label>
            <select id="senioridade">
            <option selected disabled value="">Selecione</option>
            <option>Junior</option>
            <option>Pleno</option>
            <option>Sênior</option>
            </select>
        </div>

        <fieldset>
            <div id="check">
                <label><strong>Selecione as tecnologia que utiliza</strong></label>
                <input type="checkbox" id= "tecnologia1" value="HTML">
                <label for="tecnologia1">HTML</label>
                <input type="checkbox" id= "tecnologia2" value="JAVA">
                <label for="tecnologia2">Java</label>
                <input type="checkbox" id= "tecnologia3" value="C++">
                <label for="tecnologia3">C++</label>
                <input type="checkbox" id= "tecnologia4" value="Css">
                <label for="tecnologia4">CSS</label>
                <input type="checkbox" id= "tecnologia5" value="Python">
                <label for="tecnologia5">Python</label>
                <input type="checkbox" id= "tecnologia6" value="JavaScript">
                <label for="tecnologia6">JavaScript</label>
                <input type="checkbox" id= "tecnologia7" value="Php">
                <label for="tecnologia7">PHP</label>
            </div>
        </fieldset>

        <div class= "campo">
            <br>
            <label><strong> Conte mais sobre sua experiência:</strong></label>
            <textarea row=˜6˜ id="experiencia" name="experiencia" style="widh: 26em"></textarea>
        </div>

        <button class="botao" type="submit">Concluído</button>
    </form>
</body>
</html>