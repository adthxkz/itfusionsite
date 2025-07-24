<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- SEO: Open Graph -->
    <meta property="og:title" content="IT Fusion | Слияние Бизнеса и Технологий для Системного Роста">
    <meta property="og:description" content="Трансформируем IT-хаос в систему. Объединяем CRM, веб-разработку и AI-автоматизацию в единую экосистему на базе Bitrix24 для роста вашего бизнеса в Казахстане.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://itfusion.kz/">
    <meta property="og:image" content="/img/logo_dark.png">
    <meta property="og:locale" content="ru_RU">
    <!-- SEO: Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT Fusion | Слияние Бизнеса и Технологий для Системного Роста">
    <meta name="twitter:description" content="Трансформируем IT-хаос в систему. Объединяем CRM, веб-разработку и AI-автоматизацию в единую экосистему на базе Bitrix24 для роста вашего бизнеса в Казахстане.">
    <meta name="twitter:image" content="/img/logo_dark.png">
    <!-- SEO: Дополнительные -->
    <link rel="canonical" href="https://itfusion.kz/">
    <meta name="robots" content="index, follow">
    <meta name="author" content="IT Fusion">
    <meta name="copyright" content="IT Fusion, 2025">
    <meta http-equiv="Content-Language" content="ru">
    <link rel="icon" type="image/png" href="/img/logo_dark.png">
    
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" href="/img/logo_it.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/aos.min.css">
    
    <!-- Schema.org Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "IT Fusion",
      "url": "https://itfusion.kz/",
      "logo": "https://itfusion.kz/img/logo_dark.png",
      "email": "info@itfusion.kz",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "KZ"
      },
      "sameAs": [
        "https://www.facebook.com/itfusion.kz",
        "https://www.instagram.com/itfusionkz?igsh=MXJyNWNkeDhzcHRscg%3D%3D&utm_source=qr"
      ]
    }
    </script>
    <!-- Schema.org BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Главная",
          "item": "https://itfusion.kz/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "IT-направления",
          "item": "https://itfusion.kz/it-solutions.php"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "CRM + Автоматизация",
          "item": "https://itfusion.kz/crm-implementation.php"
        }
      ]
    }
    </script>
    <!-- Schema.org FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Какие IT-услуги вы предоставляете?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT Fusion предоставляет внедрение Bitrix24, автоматизацию бизнес-процессов, разработку сайтов, интеграцию CRM и AI-ассистентов для компаний в Казахстане."
          }
        },
        {
          "@type": "Question",
          "name": "В каких городах работает IT Fusion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Мы работаем по всему Казахстану: Алматы, Астана, Шымкент и другие города."
          }
        },
        {
          "@type": "Question",
          "name": "Как заказать IT-диагностику?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Оставьте заявку через форму на сайте или напишите на info@itfusion.kz — мы свяжемся с вами для бесплатной консультации."
          }
        }
      ]
    }
    </script>
    <!-- Schema.org ContactPoint -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "IT Fusion",
      "url": "https://itfusion.kz/",
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+7-777-123-4567",
        "contactType": "customer support",
        "email": "info@itfusion.kz",
        "areaServed": "KZ",
        "availableLanguage": ["ru", "en"]
      }]
    }
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(NaN, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/NaN" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    </head>	
  
<body data-page-name="<?php echo $pageName; ?>">
  
<?php
// Определение языка по директории
$langFile = 'lang_ru.php';
if (strpos($_SERVER['REQUEST_URI'], '/kz/') === 0) {
    $langFile = 'lang_kz.php';
} elseif (strpos($_SERVER['REQUEST_URI'], '/en/') === 0) {
    $langFile = 'lang_en.php';
}
include_once __DIR__ . '/' . $langFile;
?>
<div class="page-overlay"></div>
<header class="site-header-new">
    <div class="container header-container-new">
        <div class="logo-new">
            <a href="/index.php">
                <img src="/img/logo_it.png" alt="IT Fusion - Слияние Бизнеса и Технологий">
                <span class="logo-text">IT FUSION</span>
            </a>
        </div>
        <?php
        // Определяем текущий язык по URL
        $langPrefix = '';
        if (strpos($_SERVER['REQUEST_URI'], '/kz/') === 0) {
            $langPrefix = '/kz';
        } elseif (strpos($_SERVER['REQUEST_URI'], '/en/') === 0) {
            $langPrefix = '/en';
        }
        ?>
        <nav class="main-nav-new">
      <ul>
          <li><a href="<?php echo $langPrefix; ?>/about.php"><?php echo $lang['about']; ?></a></li>
          <li><a href="<?php echo $langPrefix; ?>/it-solutions.php"><?php echo $lang['solutions']; ?></a></li>
          <li><a href="<?php echo $langPrefix; ?>/cases.php"><?php echo $lang['cases']; ?></a></li>
          <li><a href="<?php echo $langPrefix; ?>/blog.php"><?php echo $lang['blog']; ?></a></li>
          <li><a href="<?php echo $langPrefix; ?>/contact.php"><?php echo $lang['contact']; ?></a></li>
      </ul>
        </nav>
        <div class="header-cta-new">
            <a href="#" class="button button-primary open-modal-btn"><?php echo $lang['cta']; ?></a>
        </div>
        <div class="lang-switcher" style="display: flex; gap: 8px; align-items: center; margin-left: 16px;">
            <a href="/index.php" class="lang-btn<?php echo strpos($_SERVER['REQUEST_URI'], '/kz/') === 0 || strpos($_SERVER['REQUEST_URI'], '/en/') === 0 ? '' : ' active'; ?>" title="Русский" style="padding: 4px 8px; border-radius: 4px; background: #f5f5f5; border: 1px solid #e0e0e0; display: flex; align-items: center;">
                <img src="/img/flag-ru.png" alt="RU" style="width:18px; height:12px; margin-right:4px;">RU
            </a>
            <a href="/kz/index.php" class="lang-btn<?php echo strpos($_SERVER['REQUEST_URI'], '/kz/') === 0 ? ' active' : ''; ?>" title="Қазақша" style="padding: 4px 8px; border-radius: 4px; background: #f5f5f5; border: 1px solid #e0e0e0; display: flex; align-items: center;">
                <img src="/img/flag-kz.png" alt="KZ" style="width:18px; height:12px; margin-right:4px;">KZ
            </a>
            <a href="/en/index.php" class="lang-btn<?php echo strpos($_SERVER['REQUEST_URI'], '/en/') === 0 ? ' active' : ''; ?>" title="English" style="padding: 4px 8px; border-radius: 4px; background: #f5f5f5; border: 1px solid #e0e0e0; display: flex; align-items: center;">
                <img src="/img/flag-en.png" alt="EN" style="width:18px; height:12px; margin-right:4px;">EN
            </a>
        </div>
        <button class="mobile-menu-toggle" aria-label="Открыть меню">
            <span></span>
            <span></span>
            <span></span>
      <span></span>
        </button>
    </div>
</header>
<script src="/js/aos.min.js"></script>
<script>document.addEventListener('DOMContentLoaded', function(){if(window.AOS){AOS.init({once:true,duration:700,offset:80});}});</script>