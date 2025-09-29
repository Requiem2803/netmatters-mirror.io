<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wdth,wght@0,75..100,500;1,75..100,500&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us | Netmatters</title>
</head>
<body>
    <?php include 'Partials/header.php';?>
    <h1>Our Offices</h1>

    <ul>
        <li><div class="office-location">
            <img src="img/cambridge.jpg">
            <h3>Cambridge Office</h3>
            <p class="Address">Unit 1.31,<br>St Johns Innovation Centre,<br>Cambridge,<br>CB4 0WS</p>
            <p class="Phone-Num">01223 37 57 72</p>
            <button>VIEW MORE</button>
        </div></li>
        <li><div class="office-location">
            <img src="img/wymondham.jpg">
            <h3>Wymondham Office</h3>
            <p class="Address">Unit 15,<br>Penfolt Drive,<br>Wymondham,<br>NR18 0WZ</p>
            <p class="Phone-Num">01603 70 40 20</p>
            <button>VIEW MORE</button>
        </div></li>
        <li><div class="office-location">
            <img src="img/yarmouth-2.jpg">
            <h3>Great Yarmouth Office</h3>
            <p class="Address">Suite F23,<br>Beacon Innovation Centre,<br>Beacon Park, Gorleston,<br>NR31 7RA</p>
            <p class="Phone-Num">01943 60 32 04</p>
            <button>VIEW MORE</button>
        </div></li>
    </ul>

    <div id="contact-section">
        <form>
            <label for="name" class="required">Your Name</label>
            <input type="text" id="name" name="name" required>
            <label for="company-name">Company Name</label>
            <input type="text" id="company-name" name="company-name">
            <label for="name" class="required">Your Email</label>
            <input type="email" id="email" name="email" required>
            <label for="name" class="required">Your Telephone Number</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="message" class="required">Your Message</label>
            <textarea type="text" id="message" name="message" required></textarea>
        </form>
    </div>

    <?php include 'Partials/footer.php';?>
</body>
</html>