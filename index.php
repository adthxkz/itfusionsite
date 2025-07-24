<?php
    $pageTitle = "IT Fusion — Инновационные IT-решения для бизнеса";
    $pageDescription = "IT Fusion: Внедрение AI, CRM, автоматизация, мобильные приложения, веб-разработка. Повышаем эффективность бизнеса!";
    $pageName = "index";

    include 'header.php';
?>

<main>
    <section class="section hero-section text-center" data-aos="fade-up">
        <div class="container">
            <h1>IT Fusion — Инновационные IT-решения для бизнеса</h1>
            <p class="subtitle">Внедрение AI, CRM, автоматизация, мобильные приложения, веб-разработка</p>
            <a href="/about.php" class="button button-primary">Узнать о нашем подходе</a>
        </div>
    </section>

    <section class="section competencies-section" data-aos="fade-up">
        <div class="container text-center">
            <h2>Наши IT-направления</h2>
            <p class="subtitle" style="max-width: 800px; margin-bottom: 50px;">Мы предоставляем комплексные IT-решения для автоматизации и роста вашего бизнеса.</p>
            <div class="feature-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="feature-card" style="padding: 30px;" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-chart-line" aria-hidden="true"></i></div>
                    <h4><a href="/crm-implementation.php" style="color:inherit;text-decoration:none;">CRM + Автоматизация</a></h4>
                    <p>Превращаем хаотичные продажи в систему с полной автоматизацией воронки на базе CRM и AI-помощниками.</p>
                </div>
                <div class="feature-card" style="padding: 30px;" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-code" aria-hidden="true"></i></div>
                    <h4><a href="/web-development.php" style="color:inherit;text-decoration:none;">Веб-разработка</a></h4>
                    <p>Создаем сайты и веб-приложения, которые интегрируются с вашими бизнес-процессами и CRM.</p>
                </div>
                <div class="feature-card" style="padding: 30px;" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-robot" aria-hidden="true"></i></div>
                    <h4><a href="/ai-assistants.php" style="color:inherit;text-decoration:none;">AI-Ассистенты</a></h4>
                    <p>Внедряем умных помощников для автоматизации рутинных задач и повышения эффективности.</p>
                </div>
            </div>
            <a href="/it-solutions.php" class="button button-secondary" style="margin-top: 40px;">Все IT-направления</a>
        </div>
    </section>

    <section class="section approach-section" style="background-color: #f5f7fa;" data-aos="fade-up">
        <div class="container text-center">
            <h2>Наш подход к решению IT-задач</h2>
            <div class="approach-steps">
                <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <h4>Анализ</h4>
                    <p>Изучаем ваши бизнес-процессы и определяем точки для оптимизации.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <h4>Проектирование</h4>
                    <p>Создаем архитектуру IT-решения под ваши конкретные задачи.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <h4>Внедрение</h4>
                    <p>Разрабатываем и интегрируем решение в ваши рабочие процессы.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <h4>Поддержка</h4>
                    <p>Обеспечиваем техническую поддержку и развитие системы.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section cta-section text-center">
        <div class="container">
            <h2>Готовы автоматизировать ваш бизнес?</h2>
            <p class="subtitle">Получите консультацию по внедрению IT-решений для роста вашей компании.</p>
            <a href="/contact.php" class="button button-primary open-modal-btn">Запросить консультацию</a>
        </div>
    </section>
</main>

<?php
    include 'footer.php';
?>