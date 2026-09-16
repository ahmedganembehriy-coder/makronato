<?php $dishes = require __DIR__ . '/data/menu.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="مكروناته — مكرونة طازة تتعمل كل يوم بحب.">
    <title>مكروناته | مكرونة طازة تتعمل بحب</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="site-header"><a class="brand" href="index.php"><span>م</span> مكروناته</a><button class="menu-toggle" aria-label="فتح القائمة">☰</button>
        <nav class="nav"><a class="active" href="index.php">الرئيسية</a><a href="menu.php">المنيو</a><a href="about.php">حكايتنا</a><a href="contact.php">تواصل معنا</a></nav><a class="nav-cta" href="menu.php">اكتشف المنيو ↗</a>
    </header>
    <main>
        <section class="hero">
            <div class="hero-copy">
                <div class="hero-kicker"><span>01</span><i></i><span>مكرونة تتعمل كل يوم</span></div>
                <h1>اللقمة اللي<br><em>بتفضلها.</em></h1>
                <p class="hero-text">من العجين الطازة للسوس اللي بيتسوى على مهل، كل طبق في مكروناته له شخصية.</p>
                <div class="hero-actions"><a class="button" href="menu.php">شوف المنيو</a><a class="text-link" href="#story">ليه مكروناته؟ ←</a></div>
                <div class="hero-note"><strong>١٠٠٪</strong><span>عجين تازه<br>وصوص معمولة هنا</span></div>
            </div>
            <div class="hero-visual"><img src="assets/pasta-hero.jpg" alt="طبق مكرونة طازة">
                <div class="visual-label"><span>مكروناته</span><b>اختر اللقمة اللي على مزاجك</b></div>
                <div class="visual-stamp">طازة<br>يوميًّا</div>
            </div>
        </section>
        <section class="proof-bar"><span>عجين يومي</span><i></i><span>صوص من الصفر</span><i></i><span>مكونات موسمية</span><i></i><span>طعم يفضل في اكل</span></section>
        <section class="story" id="story">
            <div class="story-index">02<br><span>الفكرة</span></div>
            <div class="story-copy">
                <p class="eyebrow">مكروناته من الأول</p>
                <h2>مش مجرد وجبة.<br><em>دي لقمة تتفكر.</em></h2>
                <p>بنعمل العجين كل يوم، وبنسيب المكونات تتكلم في الطبق. مكان بسيط، تفاصيل صغيرة، وطعم كبير.</p><a class="text-link" href="about.php">اقرأ حكايتنا ←</a>
            </div>
            <div class="story-card"><span>م</span><b>01</b>
                <p>أكل بهدوء<br>والمسافة حقها تطول</p>
            </div>
        </section>
        <section class="featured-menu">
            <div class="section-head">
                <div>
                    <p class="eyebrow">03 / اختيارات الشيف</p>
                    <h2>المنيو اللي مستنيك.</h2>
                </div><a class="text-link" href="menu.php">شوف كل الأطباق ←</a>
            </div>
            <div class="home-dishes"><?php foreach (array_slice($dishes, 0, 3) as $dish): ?><article class="home-dish">
                        <div class="home-dish-image"><img src="<?= htmlspecialchars($dish['image']) ?>" alt="<?= htmlspecialchars($dish['name']) ?>"><span>٠<?= $dish['id'] ?></span></div>
                        <div class="home-dish-info">
                            <h3><?= htmlspecialchars($dish['name']) ?></h3>
                            <p><?= htmlspecialchars($dish['description']) ?></p><strong><?= number_format($dish['price'], 0) ?> <small>جنيه</small></strong>
                        </div>
                    </article><?php endforeach; ?></div>
        </section>
        <section class="closing">
            <div>
                <p class="eyebrow">المنيو مستنياك</p>
                <h2>اختار لقمتك.<br><em>وسيب الباقي علينا.</em></h2><a class="button light" href="menu.php">افتح المنيو</a>
            </div>
            <div class="closing-mark">م<br><small>مكرونة تتعمل بحب</small></div>
        </section>
    </main>
    <footer class="footer">
        <div><a class="brand" href="index.php"><span>م</span> مكروناته</a>
            <p>مكرونة طازة. ليالي القاهرة.</p>
        </div>
        <div>
            <p>السبت — الخميس · ١٢ ظهرًا — ١٢ منتصف الليل</p>
            <p>hello@makronato.test</p>
        </div>
        <div>
            <p>© ٢٠٢٦ مكروناته</p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>
