<?php get_header(); ?>

 
    <!-- О компании -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">О нашей компании</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>АгроФерм - лидер в сельскохозяйственном секторе</h3>
                    <p>Наша компания работает на рынке сельского хозяйства более 15 лет, предлагая широкий спектр услуг и продукции для агропромышленного комплекса. Мы сочетаем традиционные методы ведения сельского хозяйства с современными технологиями.</p>
                    <p>Наши специалисты - это команда профессионалов с многолетним опытом работы в различных направлениях агропромышленного комплекса. Мы постоянно инвестируем в исследования и разработки, чтобы предлагать нашим клиентам самые передовые решения.</p>
                </div>
                <div class="about-image">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/4.jpg'); ?> " alt="Агрофирма">
                </div>
            </div>
        </div>
    </section>
	
    <!-- Услуги -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Наши услуги</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/1.jpg'); ?>" alt="Консультации">
                    </div>
                    <div class="service-content">
                        <h3>Агрономические консультации</h3>
                        <p>Профессиональные консультации по выбору культур, технологиям выращивания, защите растений и повышению урожайности.</p>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/2.jpg'); ?>" alt="Техника">
                    </div>
                    <div class="service-content">
                        <h3>Аренда сельхозтехники</h3>
                        <p>Предоставляем в аренду современную сельскохозяйственную технику с операторами и без.</p>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/3.jpg'); ?>" alt="Анализ">
                    </div>
                    <div class="service-content">
                        <h3>Анализ почвы</h3>
                        <p>Проводим комплексный анализ почвы с рекомендациями по улучшению ее качества и повышению плодородия.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Продукция -->
    <section id="products" class="products">
        <div class="container">
            <h2 class="section-title">Наша продукция</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Семена</h3>
                    <p>Высококачественные семена различных сельскохозяйственных культур с высокой всхожестью.</p>
                </div>
                
                <div class="product-card">
                    <div class="product-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Удобрения</h3>
                    <p>Органические и минеральные удобрения для всех видов культур и почв.</p>
                </div>
                
                <div class="product-card">
                    <div class="product-icon">
                        <i class="fas fa-spray-can"></i>
                    </div>
                    <h3>СЗР</h3>
                    <p>Средства защиты растений от вредителей и болезней.</p>
                </div>
                
                <div class="product-card">
                    <div class="product-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h3>Техника</h3>
                    <p>Продажа и сервисное обслуживание сельскохозяйственной техники.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Преимущества -->
    <section id="advantages" class="advantages">
        <div class="container">
            <h2 class="section-title">Наши преимущества</h2>
            <div class="advantages-list">
                <div class="advantage-item">
                    <div class="advantage-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div>
                        <h3>15 лет опыта</h3>
                        <p>Многолетний опыт работы в сельскохозяйственной сфере позволяет нам предлагать оптимальные решения.</p>
                    </div>
                </div>
                
                <div class="advantage-item">
                    <div class="advantage-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h3>Профессиональная команда</h3>
                        <p>Наши специалисты регулярно проходят обучение и повышение квалификации.</p>
                    </div>
                </div>
                
                <div class="advantage-item">
                    <div class="advantage-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div>
                        <h3>Экологичность</h3>
                        <p>Мы используем экологически безопасные технологии и материалы.</p>
                    </div>
                </div>
                
                <div class="advantage-item">
                    <div class="advantage-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div>
                        <h3>Гибкие условия сотрудничества</h3>
                        <p>Индивидуальный подход к каждому клиенту и гибкая система скидок.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Контакты -->
    <section id="contacts" class="contacts">
        <div class="container">
            <h2 class="section-title">Контакты</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Наши контактные данные</h3>
                    <p><i class="fas fa-map-marker-alt"></i> г. Москва, ул. Сельскохозяйственная, 123</p>
                    <p><i class="fas fa-phone"></i> +7 (495) 123-45-67</p>
                    <p><i class="fas fa-envelope"></i> info@agrofarm.ru</p>
                    <p><i class="fas fa-clock"></i> Пн-Пт: 9:00 - 18:00</p>
                </div>
                
                <div class="contact-form">
                    <h3>Оставьте заявку</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>