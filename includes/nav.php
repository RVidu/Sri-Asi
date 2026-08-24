<!--Desktop layout-->
<div id="card_wrapper">
    <div id="card_bods">
        <div id="home_body" class="card_body"><i class="bi bi-suit-spade-fill main_ico"></i></div>
        <div id="ctg_body" class="card_body"><i class="bi bi-suit-heart-fill main_ico"></i></div>
        <div id="cart_body" class="card_body"><i class="bi bi-suit-club-fill main_ico"></i></div>
        <div id="contact_body" class="card_body"><i class="bi bi-suit-diamond-fill main_ico"></i></div>
    </div>
    <img src="img/SriAsi_ico.svg" alt="Sri Asi title" id="SriAsi_title">
</div>
<nav>
    <div id="card_hds">
        <div id="home" class="nav_tg">
            <div class="ico"> <span class="sym_let">A</span>
                <i class="bi bi-suit-spade-fill sub_ico"></i></div>
            <div class="tg">Home</div>
        </div>
        <div id="ctg" class="nav_tg">
            <div class="ico"> <span class="sym_let">A</span>
            <i class="bi bi-suit-heart-fill sub_ico"></i></div>
            <div class="tg">Category</div>
        </div>
        <div id="cart" class="nav_tg">
            <div class="ico"> <span class="sym_let">A</span>
            <i class="bi bi-suit-club-fill sub_ico"></i></div>
            <div class="tg">Cart</div>
        </div>
        <div id="contact" class="nav_tg">
            <div class="ico"> <span class="sym_let">A</span>
            <i class="bi bi-suit-diamond-fill sub_ico"></i></div>
            <div class="tg">Contact Us</div>
        </div>
    </div>
</nav>

<!--Mobile Layout-->
<div id="nav_mobile">
    <img src="img/SriAsi_ico_mobile.svg" alt="Sri Asi title" id="title_mobile">
    <div id="toggle"><i class="bi bi-list"></i></div>
</div>

<div id="home_mobile" class="tg_mobile">
    <div class="ico_mobile"> <span class="sym_let_mobile">A</span>
        <i class="bi bi-suit-spade-fill sub_ico_mobile"></i></div>
    <div class="tgName_mobile">Home</div>
</div>
<div id="ctg_mobile" class="tg_mobile">
        <div class="ico_mobile"> <span class="sym_let_mobile">A</span>
            <i class="bi bi-suit-heart-fill sub_ico"></i></div>
        <div class="tgName_mobile">Category</div>
</div>
<div id="cart_mobile" class="tg_mobile">
    <div class="ico_mobile"> <span class="sym_let_mobile">A</span>
        <i class="bi bi-suit-club-fill sub_ico"></i></div>
    <div class="tgName_mobile">Cart</div>
</div>
<div id="contact_mobile" class="tg_mobile">
    <div class="ico_mobile"> <span class="sym_let_mobile">A</span>
        <i class="bi bi-suit-diamond-fill sub_ico"></i></div>
    <div class="tgName_mobile">Contact Us</div>
</div>

<script>
    const card = document.querySelectorAll('.tg_mobile');
    const Toggle = document.getElementById('toggle');
    Toggle.addEventListener('click', () => {
        Toggle.classList.toggle('toggle_active');
        card.forEach((card, i) => {
            if(Toggle.classList.contains('toggle_active')) {
                card.style.transform = `translateY(${i * 9 + 9}vh)`;
            } else {
                card.style.transform = `translateY(0)`;
            }
        })
    })
    
    document.querySelectorAll('#home, #home_mobile').forEach(Tag => {
        Tag.addEventListener('click', () => {
            window.location.href = '../index.php';
        })
    })

    document.querySelectorAll('#ctg, #ctg_mobile').forEach(Tag => {
        Tag.addEventListener('click', () => {
            window.location.href = '../ctg.php';
        })
    })

    
</script>