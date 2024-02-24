<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food List</title>
    <link rel="stylesheet" href="Style/food-list.css">
</head>

<body>
    <h2>List Makanan</h2>

    <div class="food-content">

        <?php for ($i = 0; $i < 10; $i++) : ?>
            <div class="card">
                <img src="https://images.prestigeonline.com/wp-content/uploads/sites/4/2021/12/28134738/sam-moqadam-yxZSAjyToP4-unsplash-scaled-1-1275x900.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Rp. 10.000</b></h4>
                    <h4><b>Bakso Malang</b></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, voluptate neque at possimus saepe laboriosam</p>
                </div>
            </div>
        <?php endfor; ?>
    </div>


</body>

</html>