<?php
session_start();
include './models/database.php';
include './models/review.php';

$database = new database();
$review = new review($database);
$reviews = new review($database);


if (isset($_POST['verstuur_review'])) {
    $review->add();
}

?>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Ruben Kruiter">
    <meta name="description" content="Protfolio van Ruben Kruiter">
    <meta name="keywords" content="ruben, kruiter, ruben kruiter,  rubenkruiter, portfolio ruben, portfolio ruben kruiter">
    <link rel="stylesheet" href="css/index.scss">
    <script src="https://kit.fontawesome.com/d876e9125b.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

        <div class="p1">
            <div class="home">

                <div class="brand">
                    <h1>Ruben Kruiter</h1>
                    <h2>Webdeveloper & Webdesigner</h2>
                </div>

                <div class="rvslider">

                    <div class="rvs1">
                        1
                    </div>

                    <div class="rvs2">
                        2
                    </div>

                    <div class="rvs3">
                        3
                    </div>

                    <div class="rvs4">
                        4
                    </div>

                </div>

            </div>
        </div>

        <div class="p2">
            <div class="mywork">

                <div class="ptitle">
                    <h2>Mijn werk</h2>
                </div>

                <div class="work">
                    <div class="work-content">
                        <div class="work-image">
                            <img src="Images/Index/Mywork/mywork-example.jpg" alt="">
                        </div>
                        <div class="work-name">
                            <h3>Example 1</h3>
                        </div>
                        <div class="work-disc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto, autem
                                consequatur debitis delectus ipsa minima nobis, obcaecati officia optio soluta,
                                tempore vero. Et laudantium, officia perferendis reprehenderit saepe voluptate?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="work">
                    <div class="work-content">
                        <div class="work-image">
                            <img src="Images/Index/Mywork/mywork-example.jpg" alt="">
                        </div>
                        <div class="work-name">
                            <h3>Example 2</h3>
                        </div>
                        <div class="work-disc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto, autem
                                consequatur debitis delectus ipsa minima nobis, obcaecati officia optio soluta,
                                tempore vero. Et laudantium, officia perferendis reprehenderit saepe voluptate?
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="work">
                <div class="work-content">
                    <div class="work-image">
                        <img src="Images/Index/Mywork/mywork-example.jpg" alt="">
                    </div>
                    <div class="work-name">
                        <h3>Example 3</h3>
                    </div>
                    <div class="work-disc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto, autem
                            consequatur debitis delectus ipsa minima nobis, obcaecati officia optio soluta,
                            tempore vero. Et laudantium, officia perferendis reprehenderit saepe voluptate?
                        </p>
                    </div>
                </div>
            </div>

            <div class="work">
                <div class="work-content">
                    <div class="work-image">
                        <img src="Images/Index/Mywork/mywork-example.jpg" alt="">
                    </div>
                    <div class="work-name">
                        <h3>Example 4</h3>
                    </div>
                    <div class="work-disc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto, autem
                            consequatur debitis delectus ipsa minima nobis, obcaecati officia optio soluta,
                            tempore vero. Et laudantium, officia perferendis reprehenderit saepe voluptate?
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="p3">
            <div class="aboutme">

                <div class="ptitle">
                    <h2>Over Mij</h2>
                </div>

                <div class="aboutme-container">
                    <div class="aboutme-content">

                        <div class="txt-header">
                            <h3>Introductie</h3>
                        </div>
                        <div class="txt">
                            <p>Hallo, mijn naam is Ruben Kruiter. Ik ben een tweedejaars student applicatie en
                                mediaontwikkelaar aan het Landstede Harderwijk. Leuk dat jij een kijkje neemt op
                                mijn portfolio waar ik vol trots al mijn werk tentoonstel. Mijn vrijetijd besteed ik
                                het liefst met familie en vrienden of dat nou sporten, bordspelletjes, online games
                                en of gewoon een film kijken is maakt mij niet uit. Ook een andere tijdsbesteding
                                van mij is Crypto, ik begon met het bezitten van crypto in 2018, maar pas in 2021
                                ben ik begonnen met het inlezen over technische analyses van grafieken en het
                                dagelijks trade in crypto.</p>
                        </div>

                        <div class="txt-header">
                            <h3>Opleidingskeuze</h3>
                            <h4>Hoe kom ik bij mijn keuze tot applicatie en mediaontwikkelaar? </h4>
                        </div>
                        <div class="txt">
                            <p>Voordat ik op mijn huidige opleiding terecht ben gekomen is er het één en het ander
                                aan vooraf gegaan. Mijn huidige opleiding was namelijk niet mijn eerste keuze,
                                sterker nog, ik heb het niet eens overwogen. Na mijn examen te hebben gehaald op het
                                toen nog het hetende Groenhorst College Lelystad, ben ik op het ROC Almere, Junior
                                Accountmanager gaan studeren. Echter de opleiding en de school hebben mij in het
                                eerste jaar erg teleurgesteld, waar ik op mijn oude school nooit heb gespijbeld en
                                of te laat ben gekomen was dat dit jaar wel anders. Mijn motivatie voor school was
                                erg laag, ik voelde mij daar ook absoluut niet op mijn plek. Aan het einde van het
                                eerste jaar kregen wij opdracht om stage te gaan lopen tot aan de zomer vakantie. Ik
                                heb een stageplek gevonden bij DuurzaamMedia, waarbij website, design, online
                                strategien aan de orde van de dag was. Ondanks dat ik economie en ondernemen erg
                                leuk vind, heb ik samen met mijn moeder besloten een andere opleiding te zoeken. En
                                nu.. 2021, nog steeds erg blij met mijn keuze, zowel mijn opleiding als mijn
                                school.Voordat ik op mijn huidige opleiding terecht ben gekomen is er het één en het
                                ander aan vooraf gegaan. Mijn huidige opleiding was namelijk niet mijn eerste keuze,
                                sterker nog, ik heb het niet eens overwogen. Na mijn examen te hebben gehaald op het
                                toen nog het hetende Groenhorst College Lelystad, ben ik op het ROC Almere, Junior
                                Accountmanager gaan studeren. Echter de opleiding en de school hebben mij in het
                                eerste jaar erg teleurgesteld, waar ik op mijn oude school nooit heb gespijbeld en
                                of te laat ben gekomen was dat dit jaar wel anders. Mijn motivatie voor school was
                                erg laag, ik voelde mij daar ook absoluut niet op mijn plek. Aan het einde van het
                                eerste jaar kregen wij opdracht om stage te gaan lopen tot aan de zomer vakantie. Ik
                                heb een stageplek gevonden bij DuurzaamMedia, waarbij website, design, online
                                strategien aan de orde van de dag was. Ondanks dat ik economie en ondernemen erg
                                leuk vind, heb ik samen met mijn moeder besloten een andere opleiding te zoeken. En
                                nu.. 2021, nog steeds erg blij met mijn keuze, zowel mijn opleiding als mijn
                                school.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="p4">
            <div class="reviews">

                <div class="ptitle">
                    <h2>Reviews</h2>
                </div>

                <div class="reviews-content">

                    <div class="reviews-reviews">
                        <?php
                        foreach ($reviews->get() as $review) {

                            $stars = '';
                            for ($i = 0; $i <= $review['review_rating']; $i++) {
                                $stars .= '<div class="star"> </div>';
                            };

                            echo '<div class="review">' . '<div class="review-fullname">' . $review['review_name'] . ' ' . $review['review_lastname'] . '</div>' . '<div class="review-rating">' . $stars   . '</div>' . '<div class="review-message">' . $review['review_message'] . '</div>' . '</div>';
                        }
                        ?>
                    </div>

                    <div class="reviews-container">
                        <form action="" method="post">
                            <label>Voornaam</label><input type="text" name="voornaam_review">
                            <label>Achternaam</label><input type="text" name="achternaam_review">
                            <label>E-mail</label><input type="email" name="email_review">
                            <div class="rating-container">
                                <div class="rating">
                                    <input type="radio" name="rating_review" value="1" id="star1"><label for="star1"></label>
                                    <input type="radio" name="rating_review" value="2" id="star2"><label for="star2"></label>
                                    <input type="radio" name="rating_review" value="3" id="star3"><label for="star3"></label>
                                    <input type="radio" name="rating_review" value="4" id="star4"><label for="star4"></label>
                                    <input type="radio" name="rating_review" value="5" id="star5"><label for="star5"></label>
                                </div>
                            </div>
                            <label>Bericht</label><input type="text" placeholder="Type hier je bericht.." name="message_review">
                            <label>Mag ik je review op mijn portfolio
                                plaatsen?</label><input type="checkbox" name="agree_review">
                            <button type="submit" name="verstuur_review">Verstuur</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <div class="p5">
            <div class="contact">

                <div class="ptitle">
                    <h2>Contact</h2>
                </div>

                <div class="contact-container">
                    <form action="" method="post">
                        <label>Voornaam</label><input type="text" name="voornaam_contact">
                        <label>Achternaam</label><input type="text" name="achternaam_contact">
                        <label>E-mail</label><input type="email" name="email_contact">
                        <label>Tel.</label><input type="tel" name="tel_contact">
                        <label>Bericht</label><input type="text" placeholder="Type hier je bericht.." name="message_contact">
                        <a href="" type="submit" name="verstuur_contact">Verstuur</a>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>

