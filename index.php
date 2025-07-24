<?php
    $pageTitle = "IT Fusion | Bitrix24, IT-аутсорсинг, Автоматизация, CRM, AI — Слияние Бизнеса и Технологий для Системного Роста в Казахстане";
    $pageDescription = "Трансформируем IT-хаос в систему. Bitrix24, IT-аутсорсинг, CRM, веб-разработка и AI-автоматизация — единая экосистема для роста вашего бизнеса в Казахстане.";
    $pageName = "index";

    include 'header.php';
?>

<main>
    <section class="section hero-section text-center" data-aos="fade-up">
        <div class="container">
            <h1>Bitrix24, IT-аутсорсинг и AI: от хаоса к технологической системе</h1>
            <p class="subtitle">Мы не просто IT-подрядчики. Мы ваш <a href="/about.php">технологический партнер</a> в Казахстане, который превращает разрозненные IT-решения (<a href="/crm-implementation.php">CRM</a>, <a href="/it-solutions.php">Bitrix24</a>, <a href="/ai-assistants.php">AI</a>, <a href="/it-solutions.php">автоматизация</a>) в единую, управляемую экосистему для роста.</p>
            <a href="/about.php" class="button button-primary">Узнать о нашем подходе</a>
<main>
    <section class="section page-hero text-center" style="background-color: #f5f7fa;">
        <div class="container">
            <h1>IT Fusion — Инновационные IT-решения для бизнеса</h1>
            <p class="subtitle">Внедрение AI, CRM, автоматизация, мобильные приложения, веб-разработка</p>
        </div>
    </section>

    <!-- Ядро FAQ -->
    <section class="section faq-core-section">
      <div class="faq-core-wrapper">
        <div class="faq-core">
          <span>Что такое Qazaq Core / Clinic App?</span>
          <span>Для какого типа бизнеса подходит платформа?</span>
          <span>Зачем мобильное приложение, если есть сайт и Instagram?</span>
          <span>Будет ли приложение оформлено в стиле моей клиники?</span>
          <span>Как работает онлайн-запись?</span>
          <span>Смогут ли администраторы управлять расписанием?</span>
          <span>Есть ли функция онлайн-оплаты?</span>
          <span>Как работает программа лояльности?</span>
          <span>Насколько сложен процесс внедрения?</span>
          <span>Где будут храниться данные клиентов?</span>
          <span>Можно ли интегрировать с моей CRM?</span>
          <span>Из чего складывается стоимость?</span>
          <span>Что входит в техподдержку?</span>
          <span>Как начать работу с вами?</span>
        </div>
        <div class="faq-core-center"></div>
      </div>
      <style>
        .faq-core-section {
          background: radial-gradient(circle at center, #f5f7fa 60%, #e0e6ef 100%);
          padding: 80px 0 60px 0;
          position: relative;
          z-index: 1;
        }
        .faq-core-wrapper {
          position: relative;
          width: 420px;
          height: 420px;
          margin: 0 auto;
        }
        .faq-core-center {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          width: 120px;
          height: 120px;
          background: linear-gradient(135deg, #ffd700 60%, #fffbe6 100%);
          border-radius: 50%;
          box-shadow: 0 0 40px 10px #ffd70044;
          z-index: 2;
        }
        .faq-core {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          width: 380px;
          height: 380px;
          pointer-events: none;
        }
        .faq-core span {
          position: absolute;
          left: 50%;
          top: 50%;
          font-size: 1.1rem;
          color: #222;
          font-weight: 500;
          white-space: nowrap;
          opacity: 0.8;
          filter: blur(0.5px);
          transition: opacity 0.3s;
        }
        .faq-core span:hover {
          opacity: 1;
          filter: none;
        }
      </style>
      <script>
        // Анимация вращения ядра FAQ
        document.addEventListener('DOMContentLoaded', function() {
          const spans = document.querySelectorAll('.faq-core span');
          const centerX = 190, centerY = 190, radius = 120;
          const total = spans.length;
          function setPositions(time) {
            for (let i = 0; i < total; i++) {
              // Каждый вопрос движется по своей орбите с разной скоростью и фазой
              const angle = ((360 / total) * i + time * (0.5 + i * 0.07)) % 360;
              const rad = angle * Math.PI / 180;
              const r = radius + 18 * Math.sin(time/40 + i);
              const x = centerX + r * Math.cos(rad);
              const y = centerY + r * Math.sin(rad);
              spans[i].style.left = x + 'px';
              spans[i].style.top = y + 'px';
              spans[i].style.opacity = 0.7 + 0.3 * Math.cos(time/30 + i);
            }
          }
          let t = 0;
          function animate() {
            setPositions(t);
            t += 1;
            requestAnimationFrame(animate);
          }
          animate();
        });
      </script>
    </section>
                    <div class="feature-icon"><i class="fas fa-chart-line" aria-hidden="true"></i></div>
                    <h4><a href="/crm-implementation.php" style="color:inherit;text-decoration:none;">CRM + Автоматизация (Bitrix24, AI)</a></h4>
                    <p>Превращаем хаотичные продажи в высокотехнологичную систему с полной автоматизацией воронки на базе <strong>Bitrix24</strong> и AI-помощниками. 
<picture>
  <source srcset="/img/bitrix24-interface2.webp" type="image/webp">
  <img src="/img/bitrix24-interface2.png" alt="Bitrix24 автоматизация CRM Казахстан, интерфейс CRM системы" style="display:none;">
</picture>
</p>
                </div>
                <div class="feature-card" style="padding: 30px;" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-code" aria-hidden="true"></i></div>
                    <h4><a href="/web-development.php" style="color:inherit;text-decoration:none;">Веб-разработка + Интеграции</a></h4>
                    <p>Создаем сайты и веб-приложения, которые интегрируются с вашими бизнес-процессами, CRM и Bitrix24, работают как единая экосистема. 
<picture>
  <source srcset="/img/app-img.webp" type="image/webp">
  <img src="/img/app-img.png" alt="Веб-разработка, интеграция Bitrix24, корпоративный сайт Казахстан" style="display:none;">
</picture>
</p>
                </div>
                <div class="feature-card" style="padding: 30px;" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-robot" aria-hidden="true"></i></div>
                    <h4><a href="/ai-assistants.php" style="color:inherit;text-decoration:none;">AI-Ассистенты + Автоматизация</a></h4>
                    <p>Внедряем умных помощников для автоматизации рутинных задач, обработки заявок и повышения эффективности бизнес-процессов. 
<picture>
  <source srcset="/img/ai-interface.webp" type="image/webp">
  <img src="/img/ai-interface.png" alt="AI автоматизация бизнес-процессов, искусственный интеллект Казахстан" style="display:none;">
</picture>
</p>
                </div>
            </div>
            <a href="/it-solutions.php" class="button button-secondary" style="margin-top: 40px;">Все IT-направления</a>
        </div>
    </section>

    <section class="section approach-section" style="background-color: #f5f7fa;" data-aos="fade-up">
        <div class="container text-center">
            <h2>Ваши IT-решения как единый, отлаженный механизм: Bitrix24, CRM, AI, автоматизация</h2>
            <div class="approach-steps">
                <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <h4>IT-Диагностика</h4>
                    <p>Анализируем вашу текущую IT-инфраструктуру, находим точки разрыва между системами (Bitrix24, CRM, AI) и определяем узкие места роста.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <h4>Архитектура IT-Системы</h4>
                    <p>Проектируем единую технологическую экосистему, где все IT-решения (Bitrix24, CRM, AI) работают синхронно и дополняют друг друга.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <h4>Технологическая Интеграция</h4>
                    <p>Внедряем Bitrix24, разрабатываем веб-решения, настраиваем AI-ассистентов и обеспечиваем полноценное сопровождение новой IT-системы.</p>
                </div>
                <div class="step-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <h4>Масштабирование и Рост</h4>
                    <p>Мониторим IT-показатели, оптимизируем технологические процессы и развиваем систему вместе с ростом вашего бизнеса в Казахстане.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section cta-section text-center">
        <div class="container">
            <h2>Готовы трансформировать IT-хаос в систему с Bitrix24, AI и CRM?</h2>
            <p class="subtitle">Перестаньте использовать разрозненные IT-решения. Получите единую технологическую экосистему для выхода на новый уровень роста в Казахстане.</p>
            <a href="/contact.php" class="button button-primary open-modal-btn">Запросить IT-диагностику</a>
        </div>
    </section>
</main>

<?php
    include 'footer.php';
?>