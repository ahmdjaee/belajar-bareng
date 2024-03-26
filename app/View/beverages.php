<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverages List</title>
    <link rel="stylesheet" href="Style/beverages.css">
</head>

<body>
    <!-- <h2>List Minuman</h2> -->

    <div class="minuman">

        <?php for ($i = 0; $i < 10; $i++): ?>   
            <div class="container">
                <img src="https://p-id.ipricegroup.com/media/Indira/minuman_keras.png" alt="Minuman keras" width="200px">
                <h4>Rp. 60.000</h4>
                <h4>Anggur Merah</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio nulla non suscipit esse culpa incidunt.
                    Iusto libero enim porro repellendus est ex dicta non numquam? Laborum omnis fuga debitis a.</p>
            
        </div>
        <?php endfor ?>
</body>

</html>