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
                        <div id="map-container" style="width: 100%; height: 350px; border-radius: 12px; overflow: hidden;"></div>
                        <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                        <script charset="utf-8">
                            new DGWidgetLoader({
                                "width": "100%",
                                "height": 350,
                                "borderColor": "#a3a3a3",
                                "pos": {
                                    "lat": 49.948033,
                                    "lon": 82.628175,
                                    "zoom": 16
                                },
                                "opt": {
                                    "city": "ust_kamenogorsk"
                                },
                                "org": [
                                    {
                                        "id": "70030076166440751"
                                    }
                                ]
                            });
                        </script>
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