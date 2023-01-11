<?php include "exp/intro.php"; ?>

<body>
    <div class="galleryText">
        <h1>Ezen az oldalon értékhelheti a tájházat</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci laudantium, nemo officia id sequi expedita quasi a itaque fugit optio!</p>
    </div>


    <section>

        <h2 style="text-align:center;">Vendégkönyv</h2>

        <?php

        $dbName = "tajhaz";
        $dbUser = "root";
        $dbPass = "";
        $dsn = "mysql:host=localhost;dbname=" . $dbName . ";charset=utf8mb4";
        $pdo = new PDO($dsn, $dbUser, $dbPass);


        if (isset($_POST["sendEmail"])) {

            $name = trim($_POST["name"]);
            $email = trim($_POST["message"]);
            $message = trim($_POST["message"]);

            if (strlen($name) > 1 && strlen($email) > 5 && $message) {



                $sql = "INSERT INTO tajhaz_table VALUES (NULL, :name, :email, :message, :rating)";
                $query = $pdo->prepare($sql);
                $query->execute([
                    'name' => $_POST["name"],
                    'email' => $_POST["email"],
                    'rating' => $_POST["message"],
                    'message' => $_POST["message"]
                ]);



        
            }
            //	<p class="error">Maecenas accumsan maximus quam vel venenatis. </p>

            /*echo'<p>Név: '.$_POST["name"] .'</p>';
		echo'<p>E-mail: '.$_POST["email"] .'</p>';
		echo'<p>Értékelés: '.$_POST["subject"] .'</p>';
		echo'<p>Üzenet: '.$_POST["message"] .'</p>'; */
        }
        ?>
        <div class="center">

            <form style="background-color: gainsboro; padding:20px; border: 1px solid black; " method="post" action="velemenyek.php">
                <div class="inputBox">
                    <label for="inputName">Az Ön neve</label>
                    <input type="text" name="name" id="inputName" maxlength="50">
                </div>
                <div class="inputBox">
                    <label for="inputEmail">E-mail címe</label>
                    <input type="email" name="email" id="inputEmail" maxlength="256">
                </div>
                <div class="inputBox">
                    <label for="inputSubject">Szolgáltatás értékelése</label>
                    <select name="subject" id="inputSubject">
                        <option value="3">Kiváló</option>
                        <option value="2">Megfelelő</option>
                        <option value="1">Elégséges</option>
                        <option value="0">Kritikán aluli</option>
                    </select>
                </div>
                <div class="inputBox">
                    <label for="inputMessage">Üzenet törzse</label>
                    <textarea name="message" id="inputMessage" maxlength="1000"></textarea>
                </div>
                <div class="inputBox">
                    <button type="submit" name="sendEmail">Küldés</button>
                </div>
            </form>
        </div>
    </section>

    <ul class="Vendeg">
        <?php
        $sql = "SELECT * FROM tajhaz_table ORDER BY id DESC";
        $query = $pdo->query($sql);
        $records = $query->fetchAll(PDO::FETCH_ASSOC);


        foreach ($records as $item) {
            $ratings = ["Kritikán aluli", "Elégséges", "Megfelelő", "Kiváló"];
            $rating = $item["rating"];
            $ratingText = $ratings[$rating];


            echo '	<li class="vendegLista">
		<p><strong>' . $item["name"] . '</strong><span>' . $ratingText .  ' értékelés</span></p>
		<p>' . $item["message"] . '</p>
	</li>';
        }
        ?>
    </ul>
</body>
<?php include "exp/end.php"; ?>