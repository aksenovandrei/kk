(function ($) {
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors:['main-section', 'about-section', 'services-section', 'reviews-section', 'portfolio-section', 'contact-section'],
            menu: '#menu',
            navigationTooltips: ['main-section', 'about-section', 'services-section', 'reviews-section', 'portfolio-section', 'contact-section'],
            scrollOverflow: true,
            scrollingSpeed: 700,
            afterLoad: function change_bg() {
                var $section = $('.main-content .section.active');
                var image = $section.attr('data-custom-background-img');
                $('body').css('background-image', 'url(' + image + ')');
            }
        });
    });

    //Collecting all modal data into array
    var modalContent = [];
    $(document).ready(function () {
        modalContent.push('<div id="modal-content-0">\n' +
            '                            <img src="http://kk/img/megatraining.jpg" class="lazy full-width"\n' +
            '                                 alt="megatraining">\n' +
            '                        </div>');

        modalContent.push('<div id="modal-content-1">\n' +
            '                            <h3 class="no-shadow">Личный блог эксперта по\n' +
            '                                Фейсбук-продвижению из США\n' +
            '                                Давида Колесникова</h3>\n' +
            '                            <h5 class="no-shadow">Краткое описание проекта</h5>\n' +
            '                            <p>Давид Колесников – эксперт по продвижению бизнеса в Facebook, интернет-маркетолог,\n' +
            '                                предприниматель из Америки, который только выходит на рынок СНГ и не является узнаваемой\n' +
            '                                для аудитории личностью.</p>\n' +
            '                            <h5 class="no-shadow">Цели</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Формирование образа эксперта в своей нише (продвижение бизнеса через Facebook);</li>\n' +
            '                                <li>Повышение уровня доверия у аудитории, которая привлекается на события.</li>\n' +
            '                                <li>Активность по имени в сети.</li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <h5 class="no-shadow">Инструмент</h5>\n' +
            '                            <p>Блог.</p>\n' +
            '                            <h5 class="no-shadow">Вложения: точечное продвижение постов.</h5>\n' +
            '                            <p>При минимальных вложениях, за счет качества предоставляемой информации, уже на 3-м месяце\n' +
            '                                ведения блога (на первом запуске) клиент сделал продажи своего авторского онлайн-курса\n' +
            '                                по продвижению в Facebook при стоимости пакета участия от $200.</p>\n' +
            '\n' +
            '                            <div class="owl-carousel popup-alt-image-gallery modalSlider">\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/6-prostyh-shagov-kak-zanyat-vysokuyu-pozitsiyu-v-poiskovoj-vydache-google/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="http://kk/img/kolesnikov-link1.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/8-proverennyh-sovetov-po-raskrutke-biznesa-v-instagram-chast-1/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="http://kk/img/kolesnikov-link2.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/kak-sozdavat-ubeditelnyj-kontent-chtoby-rasshiryat-klientskuyu-bazu/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="http://kk/img/kolesnikov-link3.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/zachem-vnedryat-programmu-loyalnosti-klientov/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="http://kk/img/kolesnikov-link4.jpg"></a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');

        modalContent.push('<div id="modal-content-2">\n' +
            '                            <h3 class="no-shadow">Проект “Чай Гайван”</h3>\n' +
            '                            <h5 class="no-shadow">Описание проекта</h5>\n' +
            '                            <p>Клиент - ТМ, занимающаяся продажей элитных сортов чая в Германии и Англии.</p>\n' +
            '                            <h5 class="no-shadow">Цели</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Повысить узнаваемость бренда</li>\n' +
            '                                <li>Собрать аудиторию ценителей чая в одном месте</li>\n' +
            '                                <li>Активность по имени в сети.</li>\n' +
            '                                <li>Сформировать образ места, где истинные ценители чая могут найти напиток\n' +
            '                                    индивидуально под свои вкусы и требования\n' +
            '                                </li>\n' +
            '                                <li>Сформировать образ владельца ТМ как эксперта в чае</li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <h5 class="no-shadow">Инструмент: Instagram</h5>\n' +
            '                            <p>*аккаунт велся на английском языке</p>\n' +
            '                            <h5 class="no-shadow">Первый этап работы</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Создание контент-плана и внедрение разнообразных рубрик постов вместо однообразных\n' +
            '                                    продающих публикаций;\n' +
            '                                </li>\n' +
            '                                <li>Смена внешнего вида аккаунта.</li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Так аккаунт выглядел до начала работы</h6>\n' +
            '                                <img src="http://kk/img/gayvan1.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Так - через пару недель после старта</h6>\n' +
            '                                <img src="http://kk/img/gayvan2.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Мы меняли внешний вид аккаунта <br>в зависимости от сезона</h6>\n' +
            '                                <img src="http://kk/img/gayvan3.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Наилучшим образом аудитория реагировала именно на фото в таких\n' +
            '                                    теплых тонах</h6>\n' +
            '                                <img src="http://kk/img/gayvan4.jpg">\n' +
            '                            </div>\n' +
            '                            <h5 class="no-shadow">Второй этап</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Продвижение. Мы использовали продвижение публикаций на разные группы потенциально\n' +
            '                                    заинтересованной аудитории в Инстаграм.\n' +
            '                                </li>\n' +
            '                                <br>\n' +
            '                                <li>Сложность задачи - продвижение осуществлялось на рынок Англии и Германии. Контент\n' +
            '                                    там воспринимается иначе, нежели на русскоязычном рынке. К примеру, аудиторию сложно\n' +
            '                                    зацепить всевозможными розыгрышами и бесплатностями.\n' +
            '                                </li>\n' +
            '                                <br>\n' +
            '                                <li>Однако нам удалось выйти на стоимость уникального клика 0,23-0,63 евро (в 2,5 раза\n' +
            '                                    дешевле изначальной цены), что для европейского рынка считается отличным\n' +
            '                                    показателем.\n' +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <p>Исходя их общей затраченной на продвижение суммы и количества новых подписчиков в месяц,\n' +
            '                                стоимость подписчика выходила 1,2 евро, а через месяц была снижена до 1,1 евро (при\n' +
            '                                среднем показателе цены подписчика по Европе в 2,5-3,5 евро). </p>\n' +
            '                            <p>Кроме того, бонусом удалось увеличить количество переходов в магазин клиента на Амазоне\n' +
            '                                из Инстаграм, хотя такой цели рекламная кампания вообще не преследовала.</p>\n' +
            '\n' +
            '                        </div>');


    });

    //Show modal window with context content
        $(document).on('click', '.modal-button', function () {
        //disabling fullpage scroll when modal is open
        $.fn.fullpage.setAllowScrolling(false);
        $.fn.fullpage.setKeyboardScrolling(false);

        var $modalInner = $('#common-modal .modal-body');
        $modalInner.empty();
        var $modalId = $(this).attr('data');
        var number = parseInt($modalId.split("-").pop());
        $modalInner.append(modalContent[number]);
    });

    //enabling fullpage scroll
    $(document).on('click', '.close, #common-modal', function () {
        $.fn.fullpage.setAllowScrolling(true);
        $.fn.fullpage.setKeyboardScrolling(true);
    });

})(jQuery);