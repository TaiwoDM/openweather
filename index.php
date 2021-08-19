<?php

    //API URL for the restcountries api
    $rc_api_url = "https://restcountries.eu/rest/v2/all";   
    
    $country_data = json_decode(file_get_contents($rc_api_url), true);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Fetch Data From Rest Countries API</title>
</head>
<body>
    <header id="showcase">
        <h1>Welcome to the Weather App</h1>
        <p>Simple PHP Fetch Data From API Projeect</p>
        
        <form class="form" action="process.php" method="POST">
            <select name="country" id="">
            
                
                <?php

                    for($i=0; $i<sizeof($country_data); $i++){
                        echo "<option value='{$country_data[$i]['name']}'>{$country_data[$i]['name']}</option>";
                    }

                    ?>
            </select>
            <input type="submit" name="submit" class="button" value="Check Weather">
        </form>
        
    </header>
    <section id="section-a">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem corrupti quia minus totam iure veritatis neque nostrum aspernatur hic iusto consequuntur cumque similique alias vel quos iste, inventore earum. Repudiandae laudantium qui placeat, hic consequatur cumque omnis vel ab deserunt molestias corporis, error, accusamus nobis odit nostrum eos aliquam deleniti voluptatem repellat dolore. Ipsum accusamus numquam sunt voluptatum illum aut, error quasi deleniti officiis vitae reprehenderit atque at repudiandae, quam nisi voluptatem vero ad modi qui animi ea maiores harum eum facilis! Magni impedit ab quas. Quae laboriosam quibusdam vel id excepturi maiores magnam neque, cum, minus sapiente facilis doloribus.
        </p>
    </section>
    <section id="section-b">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem corrupti quia minus totam iure veritatis neque nostrum aspernatur hic iusto consequuntur cumque similique alias vel quos iste, inventore earum. Repudiandae laudantium qui placeat, hic consequatur cumque omnis vel ab deserunt molestias corporis, error, accusamus nobis odit nostrum eos aliquam deleniti voluptatem repellat dolore. Ipsum accusamus numquam sunt voluptatum illum aut, error quasi deleniti officiis vitae reprehenderit atque at repudiandae, quam nisi voluptatem vero ad modi qui animi ea maiores harum eum facilis! Magni impedit ab quas. Quae laboriosam quibusdam vel id excepturi maiores magnam neque, cum, minus sapiente facilis doloribus.
        </p>
    </section>
    <section id="section-c">
        <div class="box-1">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum delectus minima consectetur libero labore aliquam doloribus dolorum neque doloremque aperiam.
        </div>
        <div class="box-2">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum delectus minima consectetur libero labore aliquam doloribus dolorum neque doloremque aperiam.
        </div>
        <div class="box-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum delectus minima consectetur libero labore aliquam doloribus dolorum neque doloremque aperiam.
        </div>
    </section>
</body>
</html>