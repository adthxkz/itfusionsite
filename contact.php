<?php
    $pageTitle = "Контакты IT Fusion | Запросить Диагностику Бизнес-Процессов";
    $pageDescription = "Свяжитесь с IT Fusion в Усть-Каменогорске для диагностики ваших бизнес-процессов. Трансформируем хаос в систему через слияние бизнеса и технологий.";
    $pageName = "contact";

    include 'header.php';
?>

<main>
    <section class="section page-hero text-center" style="background-color: #f5f7fa;">
        <div class="container">
            <h1>Начнем трансформацию вместе</h1>
            <p class="subtitle">Устали от операционного хаоса? Готовы превратить разрозненные процессы в единую систему роста? Запросите бесплатную диагностику ваших бизнес-процессов.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="contact-page-grid">
                
                <div class="contact-info-col">
                    <h3>Контактная информация</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Адрес:</strong>
                            <p>г. Усть-Каменогорск, ул. Казахстана, 92-59</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>Телефон:</strong>
                            <p><a href="tel:+77764290300">+7 (776) 429-03-00</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong>
                            <p><a href="mailto:info@itfusion.kz">info@itfusion.kz</a></p>
                        </div>
                    </div>

                    <div class="contact-map">
                        <div class="map-container">
                            <iframe src="https://2gis.kz/ust_kamenogorsk/geo/82.628175%2C49.948033%2F16?queryState=center%2F82.628175%2C49.948033%2Fzoom%2F16" width="100%" height="300" frameborder="0" style="border-radius: 12px; border: 1px solid #e2e8f0;"></iframe>
                        </div>
                        <div class="map-link">
                            <a href="https://2gis.kz/ust_kamenogorsk/search/%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD%D0%B0%2092" target="_blank" class="button button-secondary" style="margin-top: 15px; display: inline-block;">
                                <i class="fas fa-map-marker-alt"></i> Открыть в 2ГИС
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-col">
                    <h3>Отправьте нам сообщение</h3>
                    <script data-b24-form="inline/1/u9dnit" data-skip-moving="true">
						(function(w,d,u)
						 {var s=d.createElement('script');
						  s.async=true;s.src=u+'?'+(Date.now()/180000|0);
						  var h=d.getElementsByTagName('script')[0];
						  h.parentNode.insertBefore(s,h);})
						(window,document,'https://cdn-ru.bitrix24.kz/b34233884/crm/form/loader_1.js');
					</script>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>