<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <meta name="abstract" content="" />
        <meta name="keywords" content="" />
        <meta name="reply-to" content="" />
        <meta name="creator" content="Movimento Web | ANTHONY HAL- Recife - PE"/>
        <meta name="author" content="" />
        <meta name="title" content="" />
        <meta name="creator.adress" content="reginaldo@movimentoweb.com.br" />
        <meta name="robots" content="" />
        <meta name="language" content="" />
        <meta name="doc-class" content="" />
        <meta name="revisit-after" content="" />
        <meta name="classification" content="business" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>" />        
        <link rel="stylesheet" href="<?php echo base_url('css/icomoon.css'); ?>" />        

        <!--CSS e JS Global e da página-->
        {CSSglobal}
        {CSSpagina}

        <title><?php if (isset($titulo)) { ?> {titulo} | <?php } ?> {titulo_padrao} </title>
    </head>
    <body>

        <div class="paginas">
            {header} 
            {paginas} 
            {footer}
        </div>
        {JSglobal}
        {JSpagina}
    </body>
</html>

