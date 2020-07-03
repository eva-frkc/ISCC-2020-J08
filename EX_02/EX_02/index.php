<html>

<head>
    <title>Summer Code Camp</title>
    <link rel="stylesheet" href="../style/vitrine.css">
    <meta charset="utf-8">
</head>

<body>

    <header>
        <div class="navigation">

            <nav>
                <?php if ($_GET['page'] == 'accueil') : ?>
                    <strong><a style="color:#17c1ff" href="vitrine-accueil.html">Accueil</a></strong>
                <?php else : ?>
                    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J08/EX_02/?page=accueil">Acceuil</a>
                <?php endif; ?>

                <?php if ($_GET['page'] == 'contacts') : ?>
                    <strong><a style="color:#17c1ff" href="vitrine-contacts.html">Contact</a><strong>
                        <?php else : ?>
                            <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J08/EX_02/?page=contacts">Contact</a>
                        <?php endif; ?>

                        <?php if ($_GET['page'] == 'programme') : ?>
                            <strong><a style="color:#17c1ff" href="vitrine-programme.html">Programme</a><strong>
                                <?php else : ?>
                                    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
                                <?php endif; ?>

                                <?php if ($_GET['page'] == 'contact-form') : ?>
                            <strong><a style="color:#17c1ff" href="contact-form.php">Contact Form</a><strong>
                                <?php else : ?>
                                    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J08/EX_02/?page=contact-form">Contact Form</a>
                                <?php endif; ?>
            </nav>

        </div>
        <h1>
            Summer Code Camp
        </h1>

    </header>

    <?php
    if ($_GET['page'] == 'accueil') {
        include('vitrine-accueil.html');
    } elseif ($_GET['page'] == 'contacts') {
        include('vitrine-contacts.html');
    } elseif ($_GET['page'] == 'programme') {
        include('vitrine-programme.html');
    }elseif($_GET['page'] == 'contact-form'){
        include('contact-form.php');
    } else{
        include('404.php');
    }
    ?>

    <footer>
        <div class="imageep">
            <a href="https://www.epitech.eu"><img src="../assetD04/logo_epitech.png" alt="logo_epitech"></a>
    </footer>

</body>

</html>