<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->


<?php
include "header.php"
//use include to include from diffrent files such as "header"

?>


        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

        <?php 
        //php does not show up on the server, it runs on the server after the client has requested the document
        //phpinfo();

        //uppg1 
        print("<p>server is running on port" . $_SERVER['SERVER_PORT'] . ", which is usual on php and apache")
        ?>

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Bloggen - Inlägg 1</h2>
                <p>Denapappas memoarer</p>
                <?php print("<p> Det här blogg inlägget är nummer </p>" . (3 + 1)); ?>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Bloggen - Inlägg 2</h2>
                <p>Elcyklar och solkraft</p>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>