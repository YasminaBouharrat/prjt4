<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        footer {
            background-color: #f8f9fa;
            padding: 30px 0;
            color: #333;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
            color: #ffffff
        }

        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .service {
            flex: 1;
            max-width: 300px;
            margin: 0 15px 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #0a0a0a;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #ffffff;
        }

        p {
            color: #555;
        }

        #contact {
            margin-top: 30px;
            color: #ffffff;
            font-size: 20px;
        }
    </style>
</head>
<body>
   

    <footer  style="background-image: url('back.jpg')" >
        <h1>Nos Services</h1>
        <div class="services">
            <div class="service">
                <h3>Livraison gratuite</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, dolores? Quod, itaque. Iste non pariatur atque excepturi, ducimus quia labore facilis facere cupiditate, quam deleniti veritatis cumque inventore tempora voluptatum!</p>
            </div>
            <div class="service">
                <h3>Paiement en ligne</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex perspiciatis repellat obcaecati eaque veniam, expedita porro. Quae pariatur et praesentium. Voluptas necessitatibus, excepturi officia provident doloribus cum autem accusamus beatae.</p>
            </div>
            <div class="service">
                <h3>Pour plusieurs informations</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ratione eveniet rerum corporis. Dolore velit qui tempore sed soluta aperiam. Iste quia sunt deleniti suscipit, debitis itaque animi iure ducimus.</p>
            </div>
        </div>
        <p id="contact">Contact: 0666665554 | &copy;2024, Clothes</p>
    </footer>
</body>
</html>
