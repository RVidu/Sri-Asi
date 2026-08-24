<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="includes/nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssFiles/ctg.css">
</head>
<body>
    <?php include "includes/nav.php"; ?>

    <div id="ctg_rw_one">
        <div class="ctg_wrapper">
            <div id="ctg_fashion">
                <div class="top_A">A<i class="bi bi-suit-spade-fill sub_ico"></i></div>
                <div class="middle_sym"><i class="bi bi-suit-spade-fill sub_ico"></i></div>
                <div class="bottom_A">A<i class="bi bi-suit-spade-fill sub_ico"></i></div>
            </div>
            <div id="ctg_fashion_txt" class="ctg_txt">Fashon Accessories</div>
        </div>
        <div class="ctg_wrapper">
            <div id="ctg_toys">
                <div class="top_A">A<i class="bi bi-suit-heart-fill sub_ico"></i></div>
                <div class="middle_sym"><i class="bi bi-suit-heart-fill sub_ico"></i></div>
                <div class="bottom_A">A<i class="bi bi-suit-heart-fill sub_ico"></i></div>
            </div>
            <div id="ctg_toys_txt" class="ctg_txt">Toys & Games</div>
        </div>
    </div>
    <div id="ctg_rw_two">
        <div class="ctg_wrapper">
            <div id="ctg_stationery">
                <div class="top_A">A<i class="bi bi-suit-club-fill sub_ico"></i></div>
                <div class="middle_sym"><i class="bi bi-suit-club-fill sub_ico"></i></div>
                <div class="bottom_A">A<i class="bi bi-suit-club-fill sub_ico"></i></div>
            </div>
            <div id="ctg_stationery_txt" class="ctg_txt">Stationery Items</div>
        </div>
        <div class="ctg_wrapper">
            <div id="ctg_sweet">
                <div class="top_A">A<i class="bi bi-suit-diamond-fill sub_ico"></i></div>
                <div class="middle_sym"><i class="bi bi-suit-diamond-fill sub_ico"></i></div>
                <div class="bottom_A">A<i class="bi bi-suit-diamond-fill sub_ico"></i></div>
            </div>
            <div id="ctg_sweet_txt" class="ctg_txt">Sweets & Treats</div>
        </div>
    </div>

<script>
    document.querySelectorAll('.ctg_wrapper').forEach(card => {
        card.addEventListener('click', () => {
            window.location.href = 'unavailable.html'
        })
    })
</script>

</body>
</html>