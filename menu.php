<?php
$dishes = require __DIR__ . '/data/menu.php';
$categoryLabels = ['signature' => 'اختيار الشيف', 'classic' => 'كلاسيك', 'vegetarian' => 'نباتي'];
$featuredDish = $dishes[0];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنيو — مكروناته</title>
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <header class="site-header"><a class="brand" href="index.php"><span>م</span> مكروناته</a><button class="menu-toggle" aria-label="فتح القائمة">☰</button>
        <nav class="nav"><a href="index.php">الرئيسية</a><a class="active" href="menu.php">المنيو</a><a href="about.php">حكايتنا</a><a href="contact.php">تواصل معنا</a></nav><a class="nav-cta" href="menu.php">كل الأطباق ↗</a>
    </header>
    <main>
        <section class="menu-hero">
            <p class="eyebrow">المطبخ / ٢٠٢٦</p>
            <h1>منيو صغيرة.<br><em>شخصية كبيرة.</em></h1>
            <p>كل حاجة بتبدأ بالعجين وتنتهي على ترابيزتك. اختار اللي على مزاجك.</p>
        </section>
        <section class="menu-feature">
            <div class="feature-photo"><img src="<?= htmlspecialchars($featuredDish['image']) ?>" alt="<?= htmlspecialchars($featuredDish['name']) ?>"><span>الأكثر طلبًا</span></div>
            <div class="feature-copy">
                <p class="eyebrow">اختيار مكروناته</p>
                <h2><?= htmlspecialchars($featuredDish['name']) ?></h2>
                <p><?= htmlspecialchars($featuredDish['description']) ?></p>
                <div class="feature-bottom"><strong><?= number_format($featuredDish['price'], 0) ?> <small>جنيه</small></strong><span>طبق يتعمل بحب كل يوم</span></div>
            </div>
        </section>
        <section class="filters"><button class="filter active" data-filter="all">الكل</button><button class="filter" data-filter="signature">أطباقنا</button><button class="filter" data-filter="classic">كلاسيكيات</button><button class="filter" data-filter="vegetarian">نباتي</button></section>
        <section class="menu-list">
            <div class="list-heading">
                <div>
                    <p class="eyebrow">كل الأطباق</p>
                    <h2>اختار طبقك المفضل</h2>
                </div><span>٠٦ أطباق / مكونات موسمية</span>
            </div>
            <div class="menu-grid">
                <?php foreach ($dishes as $dish): ?><article class="menu-item" data-category="<?= htmlspecialchars($dish['category']) ?>">
                        <div class="menu-art"><img src="<?= htmlspecialchars($dish['image']) ?>" alt="<?= htmlspecialchars($dish['name']) ?>"></div>
                        <div class="menu-content">
                            <div class="meta">٠<?= $dish['id'] ?> / <?= $categoryLabels[$dish['category']] ?></div>
                            <h2><?= htmlspecialchars($dish['name']) ?></h2>
                            <p><?= htmlspecialchars($dish['description']) ?></p>
                            <div class="card-bottom">
                                <div class="price"><?= number_format($dish['price'], 0) ?><small> جنيه</small></div><span>طازة يوميًّا</span>
                            </div>
                        </div>
                    </article><?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="brand"><span>م</span> مكروناته</div>
        <p>مكرونة طازة، من غير تعقيد.</p>
        <p>© ٢٠٢٦</p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>
