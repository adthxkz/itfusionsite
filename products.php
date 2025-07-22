<?php
    $pageTitle = "Наши продукты: Готовые решения для вашего бизнеса - QazaQ Core";
    $pageDescription = "Мы создаем не просто сайты и приложения, а полноценные экосистемы для автоматизации и роста вашего бизнеса в сфере услуг.";
    $pageName = "products";

    include 'header.php';
?>

<main>
    <section class="section page-hero text-center bg-light-gray">
        <div class="container">
            <h1>Наши продукты: Готовые решения для вашего бизнеса</h1>
            <p class="subtitle">Мы создаем не просто сайты и приложения, а полноценные экосистемы для автоматизации и роста вашего бизнеса в сфере услуг.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="service-step">
                <div class="service-step-image">
                    <img src="/img/mobile-app-img.jpg" alt="Мобильное приложение для клиник и салонов" class="img-responsive">
                </div>
                <div class="service-step-content">
                    <h2>Мобильное приложение для клиник и салонов</h2>
                    <p>Готовое white-label решение, которое мы брендируем под вашу клинику и запускаем в App Store и Google Play. Дайте вашим клиентам удобный инструмент для онлайн-записи и управления визитами, который всегда под рукой.</p>
                    
                    <div class="feature-grid mt-20" style="text-align: left; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="feature-card" style="padding: 20px; text-align: left;">
                            <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
                            <h4>Удобная онлайн-запись 24/7</h4>
                        </div>
                        <div class="feature-card" style="padding: 20px; text-align: left;">
                            <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                            <h4>Управление визитами</h4>
                        </div>
                        <div class="feature-card" style="padding: 20px; text-align: left;">
                            <div class="feature-icon"><i class="fas fa-star"></i></div>
                            <h4>Программа лояльности</h4>
                        </div>
                        <div class="feature-card" style="padding: 20px; text-align: left;">
                            <div class="feature-icon"><i class="fas fa-shopping-cart"></i></div>
                            <h4>Встроенный магазин</h4>
                        </div>
                        <div class="feature-card" style="padding: 20px; text-align: left; opacity: 0.6;">
                            <div class="feature-icon"><i class="fas fa-bell"></i></div>
                            <h4>Push-уведомления (в разработке)</h4>
                        </div>
                    </div>

                    <a href="https://brilliant-baklava-28dadb.netlify.app/" target="_blank" class="button button-primary mt-20" style="margin-top: 30px;">Получить демо-доступ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light-gray">
        <div class="container">
            <div class="service-step alt-layout">
                <div class="service-step-image">
                    <img src="/img/crm-img.jpg" alt="Концепция и аналитика в CRM-системе" class="img-responsive">
                </div>
                <div class="service-step-content">
                    <h2>CRM-система для управления клиникой</h2>
                    <p>Мощная и интуитивно понятная CRM-система, разработанная специально для сферы услуг. Управляйте расписанием, ведите клиентскую базу и анализируйте эффективность вашего бизнеса в едином окне.</p>
                    <p style="font-weight: 500; color: var(--color-text-secondary);">Ключевые функции (в разработке):</p>
                    <ul>
                        <li>Визуальный календарь записей</li>
                        <li>База клиентов с полной историей</li>
                        <li>Управление каталогом услуг и товаров</li>
                        <li>Аналитика и финансовые отчеты</li>
                        <li>Бесшовная интеграция с мобильным приложением</li>
                    </ul>
                    <a href="#" class="button button-secondary open-modal-btn mt-20">Узнать больше о CRM</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section text-center">
        <div class="container" style="max-width: 900px;">
            <h2>Единая экосистема для вашего роста</h2>
            <p>Наши продукты — мобильное приложение и CRM — работают как единый организм. Пока ваши клиенты наслаждаются удобством записи через приложение, ваши администраторы получают мощный инструмент для управления всеми процессами. Это комплексное решение, которое снижает издержки, увеличивает лояльность клиентов и способствует росту вашего дохода.</p>
            <a href="#" class="button button-primary open-modal-btn mt-20">Заказать консультацию</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>