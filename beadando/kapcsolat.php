<?php include "exp/intro.php"; ?>

<body>
    <div class="container">
        <div class="content1 reveal">
            <div>
                <h1>Elnök: Bakó Zoltán</h1>
                <p style="text-decoration: underline black;">Telefonszám: 06 70 123/45-67</p>
                <?php

                $fh = fopen('exp/Zoli.txt', 'r');
                while ($line = fgets($fh)) {
                    echo $line;
                }
                fclose($fh);
                ?>

            </div>
            <img src="tagok/Zoli.jpg" alt="Zoli">
        </div>

        <div class="content2 reveal">
            <div>
                <h1>Alelnök: Rácz Mihály</h1>
                <p style="text-decoration: underline black;">Telefonszám: 06 70 321/54-76</p>
                <?php

                $fh = fopen('exp/Misi.txt', 'r');
                while ($line = fgets($fh)) {
                    echo $line;
                }
                fclose($fh);
                ?>

            </div>
            <img src="tagok/Misi.jpg" alt="Misi">
        </div>

        <div class="content3 reveal">
            <div>
                <h1>Helyettes: Lázár Tibor</h1>
                <p style="text-decoration: underline black;">Telefonszám: 06 70 321/54-76</p>
                <?php

                $fh = fopen('exp/Tibi.txt', 'r');
                while ($line = fgets($fh)) {
                    echo $line;
                }
                fclose($fh);
                ?>

            </div>
            <img src="tagok/Tibi.jpg" alt="Misi">
        </div>

    </div>

</body>
<?php include "exp/end.php"; ?>
