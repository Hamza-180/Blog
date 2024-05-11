<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .faq-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            margin-bottom: 40px;
        }

        .question {
            color: #333;
            font-size: 20px;
        }

        .answer {
            color: #666;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-btn {
            display: block;
            margin-top: 20px;
            color: #000;
            text-decoration: none;
            font-size: 16px;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="faq-container">

    <div class="faq-item">
        <h3 class="question">Wie heeft deze blog gemaakt?</h3>
        <p class="answer">Amghar Hamza, who is a student at Erasmushogeschool Brussel, and his teacher is Kevin Felix.</p>
    </div>

    <div class="faq-item">
        <h3 class="question">Profiel bijwerken</h3>
        <p class="answer">Als je je profiel wilt bijwerken, ga dan naar de 'Profiel' sectie. Daar kun je aanvullende informatie invoeren, zoals je geboortedatum, een korte biografie en meer.</p>
    </div>

    <div class="faq-item">
        <h3 class="question">Hoe kan ik een post toevoegen?</h3>
        <p class="answer">Als je op de knop drukt onderaan ga je terechtkomen op een pagina waar je jouw post kunt toevoegen.</p>
        <p class="answer"><strong style="color:red;">Let op:</strong> Voordat je op deze knop drukt, moet je eerst inloggen.</p>
        <p class="answer">Als deze link niet werkt, zelfs als je ingelogd bent, ga terug naar de homepagina en bovenaan kun je daar een post toevoegen bij 'Create a post', maar je moet wel ingelogd zijn.</p>
        <a href="create_post" class="btn">Post toevoegen</a>
    </div>

    <div class="faq-item">
        <h3 class="question">Hoe kan ik contact opnemen?</h3>
        <p class="answer">Als je ons wilt contacteren, klik dan op de onderstaande knop. Je wordt dan doorverwezen naar een pagina waar je ons kunt bereiken.</p>
        <a href="contact" class="btn">Neem contact op</a>
    </div>

    <a href="/" class="back-btn">Terug naar Home</a>
</div>

</body>
</html>
