<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- SEO: Open Graph -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://itfusion.kz<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://itfusion.kz/img/logo_it.png">
    <meta property="og:site_name" content="IT Fusion">
    <meta property="og:locale" content="ru_RU">
    
    <!-- SEO: Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="https://itfusion.kz/img/logo_it.png">
    <meta name="twitter:site" content="@itfusionkz">
    
    <!-- SEO: Дополнительные теги -->
    <link rel="canonical" href="https://itfusion.kz<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="IT Fusion">
    <meta name="copyright" content="IT Fusion, <?php echo date('Y'); ?>">
    <meta name="keywords" content="CRM внедрение, автоматизация бизнеса, веб-разработка, AI ассистенты, Bitrix24, IT решения Казахстан, системы управления">
    <meta http-equiv="Content-Language" content="ru">
    <meta name="geo.region" content="KZ">
    <meta name="geo.placename" content="Усть-Каменогорск">
    <meta name="geo.position" content="49.948033;82.628175">
    <meta name="ICBM" content="49.948033, 82.628175">
    <link rel="icon" type="image/png" href="/img/logo_it.png">
    <link rel="apple-touch-icon" href="/img/logo_it.png">
    
    <!-- Performance & Security -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#2563EB">
    <meta name="msapplication-TileColor" content="#2563EB">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdn-ru.bitrix24.kz">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" href="/img/logo_it.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/aos.min.css">
    
    <!-- Enhanced Schema.org Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://itfusion.kz/#organization",
          "name": "IT Fusion",
          "url": "https://itfusion.kz/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://itfusion.kz/img/logo_it.png",
            "width": 200,
            "height": 60
          },
          "email": "info@itfusion.kz",
          "telephone": "+7 (776) 429-03-00",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "ул. Казахстана, 92-59",
            "addressLocality": "Усть-Каменогорск",
            "addressCountry": "KZ"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 49.948033,
            "longitude": 82.628175
          },
          "description": "IT Fusion - ведущая IT-компания в Казахстане, специализирующаяся на внедрении CRM систем, автоматизации бизнеса, веб-разработке и AI-решениях.",
          "foundingDate": "2021",
          "sameAs": [
            "https://www.instagram.com/itfusionkz"
          ],
          "knowsAbout": [
            "CRM внедрение",
            "Битрикс24",
            "Автоматизация бизнеса", 
            "Веб-разработка",
            "AI ассистенты",
            "Telegram боты",
            "SEO оптимизация"
          ],
          "serviceArea": {
            "@type": "Country",
            "name": "Казахстан"
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://itfusion.kz/#website",
          "url": "https://itfusion.kz/",
          "name": "IT Fusion",
          "description": "Инновационные IT-решения для бизнеса: CRM, автоматизация, веб-разработка, AI-ассистенты",
          "publisher": {
            "@id": "https://itfusion.kz/#organization"
          },
          "inLanguage": "ru-RU",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://itfusion.kz/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        <?php if ($pageName === 'index'): ?>
        ,{
          "@type": "LocalBusiness",
          "@id": "https://itfusion.kz/#localbusiness",
          "name": "IT Fusion",
          "description": "Профессиональные IT-услуги в Усть-Каменогорске: внедрение CRM, автоматизация, веб-разработка",
          "url": "https://itfusion.kz/",
          "telephone": "+7 (776) 429-03-00",
          "email": "info@itfusion.kz",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "ул. Казахстана, 92-59",
            "addressLocality": "Усть-Каменогорск",
            "addressCountry": "KZ"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 49.948033,
            "longitude": 82.628175
          },
          "openingHours": "Mo-Fr 09:00-18:00",
          "priceRange": "$$",
          "image": "https://itfusion.kz/img/logo_it.png",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "IT Услуги",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Внедрение CRM систем",
                  "description": "Профессиональное внедрение и настройка CRM систем Bitrix24"
                }
              },
              {
                "@type": "Offer", 
                "itemOffered": {
                  "@type": "Service",
                  "name": "Веб-разработка",
                  "description": "Создание современных сайтов и веб-приложений"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service", 
                  "name": "AI-ассистенты",
                  "description": "Внедрение умных помощников и чат-ботов"
                }
              }
            ]
          }
        }
        <?php endif; ?>
        <?php if ($pageName === 'contact'): ?>
        ,{
          "@type": "ContactPage",
          "@id": "https://itfusion.kz/contact.php#contactpage",
          "name": "Контакты IT Fusion",
          "description": "Свяжитесь с IT Fusion для получения консультации по IT-решениям",
          "mainEntity": {
            "@id": "https://itfusion.kz/#organization"
          }
        }
        <?php endif; ?>
      ]
    }
    </script>
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
  
<div class="page-overlay"></div>
<header class="site-header-new">
    <div class="container header-container-new">
        <div class="logo-new">
            <a href="/index.php">
                <img src="/img/logo_it.png" alt="IT Fusion - Слияние Бизнеса и Технологий">
                <span class="logo-text">IT FUSION</span>
            </a>
        </div>
        <nav class="main-nav-new">
      <ul>
          <li><a href="/about.php">О подходе</a></li>
          <li><a href="/it-solutions.php">Направления</a></li>
          <li><a href="/cases.php">Кейсы</a></li>
          <li><a href="/blog.php">Экспертиза</a></li>
          <li><a href="/contact.php">Контакты</a></li>
      </ul>
        </nav>
        <div class="header-cta-new">
            <a href="#" class="button button-primary open-modal-btn">Запросить IT-диагностику</a>
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