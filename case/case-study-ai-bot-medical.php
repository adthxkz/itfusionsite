<?php
    $pageTitle = "Кейс: Трансформация хаоса в медцентре через AI - IT Fusion";
    $pageDescription = "Как мы превратили операционный хаос в медицинском центре в отлаженную систему с AI-ассистентом и получили 28.7% конверсию записей.";
    $pageName = "case-study-ai-bot-medical";

    // Универсальное определение языка
    $langCode = 'ru';
    if (strpos($_SERVER['REQUEST_URI'], '/kz/') === 0) {
        $langCode = 'kz';
    } elseif (strpos($_SERVER['REQUEST_URI'], '/en/') === 0) {
        $langCode = 'en';
    }
    include dirname(__DIR__) . "/lang_{$langCode}.php";
    include dirname(__DIR__) . '/header.php'; // Универсальный путь
?>

<main>
    <section class="section page-hero text-center" style="background-color: #f5f7fa;">
        <div class="container">
            <p class="subtitle" style="color: var(--color-accent-gold); font-weight: 700;">КЕЙС: ТРАНСФОРМАЦИЯ ХАОСА</p>
            <h1>От Операционного Хаоса к Системе: AI-Интеграция в Медцентре</h1>
        </div>
    </section>

    <section class="section">
        <div class="container case-study-container">
            <div class="case-details-grid">
                <div><h4>Клиент</h4><p>Медицинский центр</p></div>
                <div><h4>Сфера</h4><p>Медицинские услуги</p></div>
                <div><h4>Задача</h4><p>Трансформировать операционный хаос в отлаженную систему обработки обращений.</p></div>
            </div>
            <hr class="case-hr">
            <div class="post-content">
                <h2>Диагностика Хаоса</h2>
                <p>К нам обратился медицинский центр с классической проблемой операционного хаоса: администраторы физически не справлялись с потоком входящих сообщений, терялись заявки, клиенты уходили к конкурентам из-за долгого ожидания ответа. Разрозненные процессы приводили к потере до 40% потенциальных клиентов.</p>
                
                <h2 style="margin-top: 40px;">Слияние Человека и AI</h2>
                <p>Мы спроектировали систему, где AI-ассистент "Тамара" стал первой линией обработки обращений, интегрированной с существующими процессами клиники:</p>
                <ul>
                    <li><strong>Автоматическая квалификация:</strong> AI определяет тип обращения и направляет в нужное русло</li>
                    <li><strong>Интеграция с календарем:</strong> Прямая запись клиентов без участия администратора</li>
                    <li><strong>Эскалация в нужный момент:</strong> Передача сложных случаев живому специалисту</li>
                    <li><strong>24/7 доступность:</strong> Обработка обращений даже в нерабочее время</li>
                </ul>

                <h2 style="margin-top: 40px;">Системная Трансформация: Результаты</h2>
                <div class="results-grid">
                    <div class="result-card">
                        <div class="result-number">891</div>
                        <div class="result-label">Проведено диалогов</div>
                    </div>
                    <div class="result-card">
                        <div class="result-number">31</div>
                        <div class="result-label">Успешная запись на диагностику</div>
                    </div>
                    <div class="result-card">
                        <div class="result-number">28,7%</div>
                        <div class="result-label">Конверсия в запись (для первичного касания)</div>
                    </div>
                    <div class="result-card">
                        <div class="result-number">~70%</div>
                        <div class="result-label">Снято нагрузки с администраторов</div>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 60px;">
                <a href="#" class="button button-primary open-modal-btn">Запросить диагностику хаоса</a>
            </div>
        </div>
    </section>
</main>

<?php include dirname(__DIR__) . '/footer.php'; ?> // Универсальный путь