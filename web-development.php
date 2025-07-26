<?php
    $pageTitle = "Разработка Сайтов | Корпоративные Сайты, Лендинги, E-commerce | IT Fusion";
    $pageDescription = "Создаем продающие сайты и лендинги мирового класса. Увеличиваем конверсию на 60%, ускоряем загрузку в 3 раза. Адаптивный дизайн, SEO-оптимизация, интеграция с CRM.";
    $pageKeywords = "разработка сайтов, создание лендингов, корпоративный сайт, веб дизайн, адаптивная верстка, SEO оптимизация";
    $pageName = "web-development";
    $ogImage = "https://itfusion.kz/img/mobile-site-interface.webp";

    include 'header.php';
?>

<main>
    <section class="service-hero premium-hero" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        <div class="hero-particles"></div>
        <div class="hero-background-overlay"></div>
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <div class="hero-badge premium-badge" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-code"></i>
                    <span>Веб-разработка</span>
                </div>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="400">
                    Создаем сайты, которые
                    <span class="gradient-text">продают за вас 24/7</span>
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="600">
                    Разрабатываем корпоративные сайты и лендинги мирового класса, которые конвертируют посетителей в клиентов. Современный дизайн, молниеносная скорость загрузки, полная адаптивность.
                </p>
                <div class="hero-features" data-aos="fade-up" data-aos-delay="700">
                    <div class="feature-item">
                        <i class="fas fa-rocket"></i>
                        <span>Конверсия до 15%</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Загрузка за 2 сек</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>100% адаптивность</span>
                    </div>
                </div>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="800">
                    <a href="#consultation" class="btn btn-premium btn-glow">
                        <i class="fas fa-calendar-check"></i>
                        <span>Получить расчет</span>
                        <div class="btn-shine"></div>
                    </a>
                    <a href="/cases.php" class="btn btn-outline-light">
                        <i class="fas fa-eye"></i>
                        <span>Посмотреть примеры</span>
                    </a>
                </div>
                <div class="hero-proof" data-aos="fade-up" data-aos-delay="1000">
                    <div class="proof-stats">
                        <div class="stat-item">
                            <strong>200+</strong>
                            <span>Сайтов создано</span>
                        </div>
                        <div class="stat-item">
                            <strong>95%</strong>
                            <span>Довольных клиентов</span>
                        </div>
                        <div class="stat-item">
                            <strong>14 дней</strong>
                            <span>Средний срок</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="600">
            <img src="/img/mobile-site-interface.webp" alt="Современный адаптивный сайт" class="hero-image">
        </div>
    </section>

    <section class="web-services-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-label">Наши решения</span>
                <h2>Создаем сайты под любые задачи бизнеса</h2>
                <p>От простых лендингов до сложных корпоративных порталов</p>
            </div>
            
            <div class="web-services-grid">
                <div class="web-service-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Лендинг-страницы</h3>
                    <p>Одностраничные сайты для максимальной конверсии товаров и услуг</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Продающий дизайн</li>
                        <li><i class="fas fa-check"></i> A/B тестирование</li>
                        <li><i class="fas fa-check"></i> Интеграция с рекламой</li>
                        <li><i class="fas fa-check"></i> Аналитика конверсий</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-label">От</span>
                        <span class="price-value">150 000 ₸</span>
                    </div>
                </div>

                <div class="web-service-card featured" data-aos="zoom-in" data-aos-delay="200">
                    <div class="featured-badge">Популярно</div>
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Корпоративные сайты</h3>
                    <p>Многостраничные сайты-визитки с каталогом услуг и блогом</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Адаптивный дизайн</li>
                        <li><i class="fas fa-check"></i> CMS для управления</li>
                        <li><i class="fas fa-check"></i> SEO-оптимизация</li>
                        <li><i class="fas fa-check"></i> Интеграция с CRM</li>
                        <li><i class="fas fa-check"></i> Форма обратной связи</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-label">От</span>
                        <span class="price-value">400 000 ₸</span>
                    </div>
                </div>

                <div class="web-service-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Интернет-магазины</h3>
                    <p>E-commerce решения с системой заказов и онлайн-оплатой</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Каталог товаров</li>
                        <li><i class="fas fa-check"></i> Корзина и заказы</li>
                        <li><i class="fas fa-check"></i> Онлайн-платежи</li>
                        <li><i class="fas fa-check"></i> Управление складом</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-label">От</span>
                        <span class="price-value">800 000 ₸</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="web-advantages-section">
        <div class="container">
            <div class="advantages-grid">
                <div class="advantages-content" data-aos="fade-right">
                    <div class="section-header">
                        <span class="section-label">Наши преимущества</span>
                        <h2>Почему клиенты выбирают именно нас</h2>
                        <p>7 лет опыта в веб-разработке, современный стек технологий и фокус на результат</p>
                    </div>
                    
                    <div class="advantages-list">
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="advantage-content">
                                <h4>Высокая скорость загрузки</h4>
                                <p>Оптимизируем код и изображения. Ваш сайт загружается за 2-3 секунды</p>
                            </div>
                        </div>
                        
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="advantage-content">
                                <h4>100% адаптивность</h4>
                                <p>Идеальное отображение на всех устройствах: смартфоны, планшеты, десктопы</p>
                            </div>
                        </div>
                        
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="advantage-content">
                                <h4>SEO-готовность</h4>
                                <p>Семантичная верстка, метатеги, микроразметка для высоких позиций в поиске</p>
                            </div>
                        </div>
                        
                        <div class="advantage-item">
                            <div class="advantage-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="advantage-content">
                                <h4>Безопасность</h4>
                                <p>SSL-сертификаты, защита от взлома, регулярные обновления безопасности</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="advantages-visual" data-aos="fade-left">
                    <div class="visual-stats">
                        <div class="stat-circle" data-aos="fade-up" data-aos-delay="100">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Скорость<br>PageSpeed</div>
                        </div>
                        <div class="stat-circle" data-aos="fade-up" data-aos-delay="200">
                            <div class="stat-number">2.1s</div>
                            <div class="stat-label">Время<br>загрузки</div>
                        </div>
                        <div class="stat-circle" data-aos="fade-up" data-aos-delay="300">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Адаптив<br>всех экранов</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="web-process-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-label">Процесс работы</span>
                <h2>Как мы создаем ваш сайт за 14 дней</h2>
                <p>Прозрачный процесс разработки с постоянной обратной связью</p>
            </div>
            
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Анализ и стратегия</h3>
                        <p>Изучаем ваш бизнес, конкурентов и аудиторию. Определяем цели сайта и KPI</p>
                        <div class="step-duration">2-3 дня</div>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Дизайн и прототип</h3>
                        <p>Создаем wireframes и дизайн-макеты. Согласовываем каждую страницу</p>
                        <div class="step-duration">4-5 дней</div>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Разработка и верстка</h3>
                        <p>Программируем функционал, делаем адаптивную верстку, интегрируем CMS</p>
                        <div class="step-duration">6-7 дней</div>
                    </div>
                </div>

                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Тестирование и запуск</h3>
                        <p>Проверяем на всех устройствах, оптимизируем скорость, запускаем сайт</p>
                        <div class="step-duration">2 дня</div>
                    </div>
                </div>
            </div>

            <div class="process-guarantee" data-aos="fade-up" data-aos-delay="500">
                <div class="guarantee-content">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Гарантия качества</h3>
                    <p>30 дней бесплатной технической поддержки после запуска сайта</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-consultation" id="consultation">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="cta-left" data-aos="fade-right">
                    <div class="cta-badge">
                        <i class="fas fa-gift"></i>
                        <span>Бесплатно</span>
                    </div>
                    <h2>Получите персональный расчет стоимости сайта</h2>
                    <p>Проанализируем ваши задачи и предложим оптимальное решение с точной стоимостью</p>
                    
                    <div class="cta-benefits-list">
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Анализ ваших потребностей</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Техническое задание</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Примеры работ в вашей нише</span>
                        </div>
                        <div class="benefit-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Точная стоимость и сроки</span>
                        </div>
                    </div>

                    <div class="cta-urgency">
                        <i class="fas fa-clock"></i>
                        <span>Консультация длится 45 минут. Вы получите готовый план создания сайта.</span>
                    </div>
                </div>
                
                <div class="cta-right" data-aos="fade-left">
                    <div class="consultation-card">
                        <h3>Заказать расчет</h3>
                        <p>Свяжитесь с нами удобным способом</p>
                        
                        <div class="contact-options">
                            <a href="tel:+77764290300" class="contact-option">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>+7 (776) 429-03-00</strong>
                                    <span>Позвонить сейчас</span>
                                </div>
                            </a>
                            
                            <a href="https://wa.me/77764290300" class="contact-option" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <div>
                                    <strong>WhatsApp</strong>
                                    <span>Написать в мессенджер</span>
                                </div>
                            </a>
                            
                            <a href="/contact.php" class="contact-option">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Оставить заявку</strong>
                                    <span>Форма на сайте</span>
                                </div>
                            </a>
                        </div>
                        
                        <div class="consultation-guarantee">
                            <i class="fas fa-shield-alt"></i>
                            <p>Расчет и консультация предоставляются бесплатно</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>