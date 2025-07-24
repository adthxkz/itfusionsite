<?php
    $pageTitle = "Тестовое FAQ ядро";
    $pageDescription = "Визуализация ядра FAQ для тестирования.";
    $pageName = "faq-core-test";
    include 'header.php';
?>
<main>
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
          width: 480px;
          height: 480px;
          margin: 0 auto;
        }
        .faq-core {
          position: absolute;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
        }
        .faq-core span {
          position: absolute;
          font-size: 1.1rem;
          color: #222;
          font-weight: 500;
          white-space: nowrap;
          opacity: 0.85;
          filter: blur(0.2px);
          transition: opacity 0.3s, filter 0.3s;
          cursor: pointer;
        }
        .faq-core span:hover {
          opacity: 1;
          filter: none;
        }
      </style>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const spans = document.querySelectorAll('.faq-core span');
          const centerX = 240, centerY = 240, baseRadius = 140;
          const total = spans.length;
          let t = 0;
          let pausedIndex = null;
          // Для каждой строки своя орбита и скорость
          const orbits = Array.from({length: total}, (_, i) => baseRadius + 30 * Math.sin(i * 1.2));
          const speeds = Array.from({length: total}, (_, i) => 0.12 + 0.04 * Math.sin(i * 2.1));
          function setPositions(time) {
            for (let i = 0; i < total; i++) {
              let angle;
              if (pausedIndex === i) {
                // Остановить вращение на наведённом вопросе
                angle = ((360 / total) * i + time * speeds[i]);
              } else if (pausedIndex !== null) {
                // Остальные вопросы замедляются
                angle = ((360 / total) * i + time * speeds[i] * 0.2);
              } else {
                // Обычное вращение
                angle = ((360 / total) * i + time * speeds[i]);
              }
              const rad = angle * Math.PI / 180;
              const r = orbits[i];
              const x = centerX + r * Math.cos(rad) - 80;
              const y = centerY + r * Math.sin(rad) - 12;
              spans[i].style.left = x + 'px';
              spans[i].style.top = y + 'px';
            }
          }
          function animate() {
            setPositions(t);
            t += 0.7; // Медленное вращение
            requestAnimationFrame(animate);
          }
          animate();
          // Остановка вращения при наведении
          spans.forEach((span, idx) => {
            span.addEventListener('mouseenter', () => {
              pausedIndex = idx;
            });
            span.addEventListener('mouseleave', () => {
              pausedIndex = null;
            });
          });
        });
      </script>
    </section>
<?php include 'footer.php'; ?>
