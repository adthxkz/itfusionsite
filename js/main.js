document.addEventListener('DOMContentLoaded', function() {

    // =================================================================
    // БЛОК 1: МОБИЛЬНОЕ МЕНЮ С ОВЕРЛЕЕМ
    // =================================================================
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav-new');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            // Переключаем класс для показа/скрытия меню
            mainNav.classList.toggle('is-open');
            // А также переключаем класс на body для управления оверлеем
            document.body.classList.toggle('menu-is-open');
        });
    }

    // =================================================================
    // БЛОК 2: МОДАЛЬНОЕ ОКНО (POP-UP)
    // =================================================================
    const modal = document.getElementById('contact-modal');
    if (modal) {
        const openModalButtons = document.querySelectorAll('.open-modal-btn');
        const closeModalButton = modal.querySelector('.modal-close-btn');

        const openModal = () => { modal.classList.add('is-active'); };
        const closeModal = () => { modal.classList.remove('is-active'); };

        openModalButtons.forEach(button => {
            button.addEventListener('click', (e) => { e.preventDefault(); openModal(); });
        });

        if (closeModalButton) { closeModalButton.addEventListener('click', closeModal); }
        modal.addEventListener('click', (e) => { if (e.target === modal) { closeModal(); } });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && modal.classList.contains('is-active')) { closeModal(); } });
    }
    
    // =================================================================
    // БЛОК 3: ЛОГИКА ДЛЯ FAQ-АККОРДЕОНА
    // =================================================================
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Закрываем все другие открытые ответы, чтобы был открыт только один
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            // Открываем или закрываем текущий
            item.classList.toggle('active');
        });
    });

}); 