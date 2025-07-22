<?php
    $pageTitle = "Экспертиза IT Fusion | Трансформация Бизнеса через Технологии";
    $pageDescription = "Делимся опытом слияния бизнеса и технологий. Практические кейсы по Bitrix24, AI-автоматизации и системному росту для малого и среднего бизнеса в Казахстане.";
    $pageName = "blog";

    include 'header.php';
?>

<main>
    <section class="section page-hero text-center bg-light-gray">
        <div class="container">
            <h1>Экспертиза IT Fusion</h1>
            <p class="subtitle">Делимся практическим опытом трансформации хаоса в систему. Реальные кейсы, инсайты и методики слияния бизнеса с технологиями для роста.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="blog-grid">

                <a href="posts/chaos-to-system.php" class="post-card">
                    <div class="post-card-image" style="background-image: url('/img/blog/post_system.jpg');"></div>
                    <div class="post-card-content">
                        <span class="post-category">Трансформация бизнеса</span>
                        <h3>От Хаоса к Системе: Как понять, что пора интегрировать технологии</h3>
                        <p class="post-excerpt">5 главных признаков, что ваши отделы работают разрозненно и теряют эффективность. Практический чек-лист для диагностики операционного хаоса.</p>
                        <span class="card-link">Скоро...</span>
                    </div>
                </a>

                <a href="posts/bitrix24-superpower.php" class="post-card">
                    <div class="post-card-image" style="background-image: url('/img/blog/post_bitrix.jpg');"></div>
                    <div class="post-card-content">
                        <span class="post-category">Bitrix24 Экспертиза</span>
                        <h3>Как Bitrix24 даёт суперсилу отделу продаж</h3>
                        <p class="post-excerpt">Реальный кейс трансформации хаотичного отдела продаж в высокотехнологичную машину. От потерянных лидов к 40% росту конверсии.</p>
                        <span class="card-link">Скоро...</span>
                    </div>
                </a>

                <a href="posts/ai-integration-guide.php" class="post-card">
                    <div class="post-card-image" style="background-image: url('/img/blog/post_ai.jpg');"></div>
                    <div class="post-card-content">
                        <span class="post-category">AI-Автоматизация</span>
                        <h3>AI-ассистенты: Не замена людям, а усиление бизнеса</h3>
                        <p class="post-excerpt">Развенчиваем мифы об ИИ и показываем, как правильно интегрировать AI-помощников для решения рутинных задач и роста эффективности.</p>
                        <span class="card-link">Скоро...</span>
                    </div>
                </a>
                
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>