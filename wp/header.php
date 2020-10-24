<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Top -->
    <header>
        <div class="header-content d-flex align-items-center justify-content-center">
            <span class="button-menu open">
                <input id="oi" type="checkbox">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </span>     
            <!-- Main Menu -->
            <nav class="main-menu closed">
                <ul>
                    <li><a href="#">Projetos</a></li>
                    
                    <li><a href="#">Sobre mim</a></li>
                    
                </ul>
            </nav>
            <!-- //Main Menu -->

            <!-- Box name from the top -->
            <div class="my-name">
                <h1 id="name"><span id="span"></span> </h1>
            </div>
            <!-- //Box name from the top -->
        </div>
    </header>
    
    <!-- // Top -->