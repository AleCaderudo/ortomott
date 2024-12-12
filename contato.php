<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortopedia Ortomott - Contato</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php include 'inc/header.php'; ?>
</header>

<body>
    <div class="conteudo">

        <p class="conteudo__texto">Para contato utilize o nosso Telefone (54) 3324 1279 Loja/Residência</p>
        <p class="conteudo__texto">Ou nosso WhatsApp <a class="conteudo__link" href="https://wa.me/555484190801" target="_blank" 
        title="Clique aqui para acessar nosso WhatsApp">54 84190801</a></p>
        <p class="conteudo__texto">Caso prefira pode nos mandar uma mensagem utilizando o formulario:</p>


   <section class="formulario">
    <div class="formulario__container">

        <table cellspacing="2" cellpadding="2">
        
        <form method="POST" name="myform" action="contatoinsert.php" data-formulario  class="principal__formulario"  >

        <fieldset class="formulario__campo">
            <label class="campo__etiqueta" for="nome">Nome: </label>
            <div class="campo__escrita__container">
            <input name="nome" id="nome" class="campo__escrita" type="text" minlength="3" required />
            <span class="mensagem-erro">Campo obrigatório</span>
            </div>
        </fieldset>

        <fieldset class="formulario__campo">
			<label class="campo__etiqueta" for="email">E-mail:</label>
            <div class="campo__escrita__container">
			<input name="email" id="email" class="campo__escrita" type="email" minlength="6" required />
			<span class="mensagem-erro">Campo obrigatório</span> 
            </div>
		</fieldset>

        <fieldset class="formulario__campo">
			<label class="campo__etiqueta" for="telefone">Telefone: </label>
            <div class="campo__escrita__container">
			<input name="telefone" id="telefone" class="campo__escrita" type="tel" minlength="6" pattern="\d{10,}"/>
            </div>
		</fieldset>

        <fieldset class="formulario__campo">
			<label class="campo__etiqueta" for="cidade">Cidade: </label>
            <div class="campo__escrita__container">
			<input name="cidade" id="cidade" class="campo__escrita" type="tex" minlength="2" />
            </div>
		</fieldset>

        <fieldset class="formulario__campo">
			<label class="campo__etiqueta" for="mensagem">Mensagem: </label>
            <div class="campo__escrita__container">
			<textarea  name="mensagem" id="mensage" class="campo__escrita__text" rows="6" cols="50" minlength="5" required ></textarea>
			<span class="mensagem-erro">Campo obrigatório</span>
            </div>
		</fieldset>

        <input value="Enviar" class="formulario__botao" id="enviar" data-botao-enviar type="submit">
</form>

</section>

</body>

<footer>

    <?php include 'inc/footer.php'; ?>

</footer>

<script src="js/validaForm.js" type="module"></script>

</html>