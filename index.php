<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="includes/nav.css">
    <link rel="stylesheet" href="includes/footer.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "includes/nav.php"; ?>

    <div id="all_items">
        <div id="fashion" class="ctg_names">
            <div id="fashion_tg" class="ctg_names_tg">Fashion Accessories ></div>
            <div id="fashion_items" class="ctg_items_wrapper">
                <div id="fashion_item_0" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="fashion_item_1" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="fashion_item_2" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="fashion_item_3" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="fashion_item_4" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
            </div>
        </div>
        <div id="toys" class="ctg_names">
            <div id="toys_tg" class="ctg_names_tg">Toys & Games ></div>
            <div id="toys_items" class="ctg_items_wrapper">
                <div id="toy_item_0" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="toy_item_1" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="toy_item_2" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="toy_item_3" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="toy_item_4" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
            </div>
        </div>
        <div id="stationery" class="ctg_names">
            <div id="stationery_tg" class="ctg_names_tg">Stationary Items ></div>
            <div id="stationary_items" class="ctg_items_wrapper">
                <div id="stationery_item_0" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="stationery_item_1" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="stationery_item_2" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="stationery_item_3" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="stationery_item_4" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
            </div>
        </div>
        <div id="sweets" class="ctg_names">
            <div id="sweets_tg" class="ctg_names_tg">Sweets & Treats ></div>
            <div id="sweets_items" class="ctg_items_wrapper">
                <div id="sweet_item_0" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="sweet_item_1" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="sweet_item_2" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="sweet_item_3" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
                <div id="sweet_item_4" class="ctg_items"><span class="item_ico"><i class="bi bi-ban"></i></span><span class="price">Rs. 0</span></div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.ctg_items').forEach(item => {item.addEventListener('click', () => {
            alert('This page is not available.\n This site is still under development.');
        })})
    </script>
</body>
</html>