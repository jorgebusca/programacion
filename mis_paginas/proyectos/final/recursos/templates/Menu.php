<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<h1 id="logo">Logo Shop</h1>
        
        <a href="index.php" class="navbar-brand">
            <h2 class="px-5">El Herrero</h2>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<ul class="navbar-nav">
		<li class="nav-item">
				<a class="nav-link" href="index.php?s=Home" <?= $seccion == 'home' ? 'class="active"' : '';?>>Inicio</a></li>
		<li class="nav-item"> 
				<a class="nav-link" href="index.php?s=Productos" <?= $seccion == 'home' ? 'class="active"' : '';?>>Detalle</a></li>
		<li class="nav-item"> 
				<a class="nav-link" href="index.php?s=Contacto" <?= $seccion == 'home' ? 'class="active"' : '';?>>Contacto</a></li>
		</ul>
            

			<div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="carrito.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Carrito
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>
