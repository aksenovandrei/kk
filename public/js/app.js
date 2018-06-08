(function ($) {
    $(document).ready(function() {
        $('#fullpage').fullpage({
            /*anchors:['main-section', 'about-section', 'services-section', 'reviews-section', 'portfolio-section', 'contact-section'],*/
            menu: '#menu',
            /*navigationTooltips: ['main-section', 'about-section', 'services-section', 'reviews-section', 'portfolio-section', 'contact-section'],*/
            scrollOverflow: true,
            scrollingSpeed: 700,
            afterLoad: function change_bg() {
                var $section = $('.main-content .section.active');
                var image = $section.attr('data-custom-background-img');
                $('body').css('background-image', 'url(' + image + ')');
                var menuList = $section.attr('id');
                $('.main-menu li').removeClass('active');
                $('.main-menu .' + menuList).closest('li').addClass('active');
            }
        });
    });

    /*Smooth scroll menu*/
    $('.main-menu li a').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var section = e.target.getAttribute('data-number');
        $.fn.fullpage.moveTo(section);
    });

    /*Smooth scroll main*/
    $('#main .btn-inrow:last-of-type').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $.fn.fullpage.moveTo(2);
    });



    //Collecting all modal data into array
    var modalContent = [];
    var imgPath = 'http://kk/';
    $(document).ready(function () {
        modalContent.push('<div id="modal-content-0">\n' +
            '                            <img src="' + imgPath + 'img/megatraining.jpg" class="lazy full-width"\n' +
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
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/kolesnikov-link1.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/8-proverennyh-sovetov-po-raskrutke-biznesa-v-instagram-chast-1/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/kolesnikov-link2.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/kak-sozdavat-ubeditelnyj-kontent-chtoby-rasshiryat-klientskuyu-bazu/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/kolesnikov-link3.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://www.davidkolesnikov.com/blog/zachem-vnedryat-programmu-loyalnosti-klientov/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/kolesnikov-link4.jpg"></a>\n' +
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
            '                                <img src="' + imgPath + 'img/gayvan1.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Так - через пару недель после старта</h6>\n' +
            '                                <img src="' + imgPath + 'img/gayvan2.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Мы меняли внешний вид аккаунта <br>в зависимости от сезона</h6>\n' +
            '                                <img src="' + imgPath + 'img/gayvan3.jpg">\n' +
            '                            </div>\n' +
            '                            <div class="block-item">\n' +
            '                                <h6 class="no-shadow">Наилучшим образом аудитория реагировала именно на фото в таких\n' +
            '                                    теплых тонах</h6>\n' +
            '                                <img src="' + imgPath + 'img/gayvan4.jpg">\n' +
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
        modalContent.push('<div id="modal-content-3">\n' +
            '                            <h3 class="no-shadow">Блог проекта “Границ.нет”</h3>\n' +
            '                            <h5 class="no-shadow">Первый этап</h5>\n' +
            '                            <p>Изначально блог создавался как источник информации о том, как можно зарабатывать на\n' +
            '                                рукоделии и продвигать себя и свои изделия через интернет, для всех, кто хочет перевести\n' +
            '                                hand made из хобби в дело, приносящее прибыль.\n' +
            '                            </p>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Формирование образа авторов проекта как экспертов в своей нише - построении бизнеса\n' +
            '                                    на рукоделии\n' +
            '                                </li>\n' +
            '                                <li>Привлечение и удержание подписчиков (в блоге и соцсетях) и дальнейший перевод их в\n' +
            '                                    потенциальных клиентов и клиентов\n' +
            '                                </li>\n' +
            '                                <li>Создание сообщества творческих людей, заинтересованных в развитии своего бизнеса на\n' +
            '                                    рукоделии\n' +
            '                                </li>\n' +
            '                                <li>Увеличение количества повторных заходов и переходов на сайт - удержание аудитории\n' +
            '                                </li>\n' +
            '                                <li>Повышение лояльности + создание круга постоянных читателей за счет пользы и качества\n' +
            '                                    контента\n' +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <p>Мы <span>ориентировались на аудиторию</span>, которая ничего не знает об онлайн-бизнесе\n' +
            '                                либо имеет только поверхностные, минимальные знания, но хочет найти способ продавать\n' +
            '                                свои изделия в интернете.</p>\n' +
            '                            <p>Соответственно, к поставленным целям мы шли посредством публикации простых пошаговых\n' +
            '                                рекомендаций для новичков. Были созданы рубрики “Начнем с нуля”, “Для вдохновения” и\n' +
            '                                пр.</p>\n' +
            '                            <p><span>Примеры первых тем, опубликованных в блоге:</span><br>\n' +
            '                                “Как создать личный бренд и заставить ваше имя работать на вас”<br>\n' +
            '                                “21 надежный способ поймать вдохновение и не отпускать его”<br>\n' +
            '                                “25 мощных слов, которые привлекают читателей в соцсетях”</p>\n' +
            '                            <img src="\' + imgPath + \'img/granyts-prev1.png">\n' +
            '                            <p>Т.е. то, что:<br>\n' +
            '                                1) формирует картину, как можно продвигать себя и свои изделия в интернете легко,\n' +
            '                                воспользовавшись простыми формулами, не требующими специальных знания и привлечения\n' +
            '                                специалистов; 2) вдохновляет и мотивирует пробовать и получать результаты, т.к.\n' +
            '                                творческим людям нужен “вдохновляющий пинок”, чтобы поверить в свои силы и действовать.\n' +
            '                            </p>\n' +
            '                            <h5 class="no-shadow">Второй этап</h5>\n' +
            '                            <p>Через 6 месяцев регулярной публикации статей мы вместе с клиентом проанализировали\n' +
            '                                обратную связь, которую давала аудитория. И отметили, что активнее всего на контент\n' +
            '                                реагируют люди, которым в целом интересно развивать бизнес на любимом деле. Не только\n' +
            '                                рукоделии, но и других занятиях (йога, курсы кулинарного мастерства и т.д.).</p>\n' +
            '                            <p>И в основном это была аудитория, которая уже немного интересовалась продвижением через\n' +
            '                                интернет, поэтому нуждалась в более узкой и специализированной информации: фишках,\n' +
            '                                секретах, нюансах.</p>\n' +
            '                            <p>В соответствии с этим были скорректированы цели.</p>\n' +
            '                            <p><span>Цели через 6 месяцев работы над проектом:</span><br>\n' +
            '                                Теперь с помощью контента нужно было сформировать сообщество людей, которые хотят\n' +
            '                                развивать свой бизнес на любимом занятии и продвигать его через интернет.</p>\n' +
            '                            <p>Остальные цели остались без изменений.</p>\n' +
            '                            <p>Для достижения новой цели мы немного изменили позиционирование.</p>\n' +
            '                            <p>Теперь авторы разделили сферы экспертности: 1) продвижение в Фейсбук, чат-боты и\n' +
            '                                мессенджеры; 2) привлечение, удержание, возвращение клиентов. Статьи стали публиковаться\n' +
            '                                от имени одного из авторов, в зависимости от тематики.</p>\n' +
            '                            <p>Сами темы статей стали более узко специализированные, предлагающие решение конкретной\n' +
            '                                задачи. Мы ориентируемся на аудиторию, которая уже “в теме” и ищет более углубленную\n' +
            '                                информацию, а не простые советы для новичков.</p>\n' +
            '                            <p>Примеры тем статей после корректировки целей: “Магия копирайтинга для чат-бота” “Как\n' +
            '                                получать больше от рекламы на Facebook, анализируя конкурентов” “5 важных трендов 2018:\n' +
            '                                что делать бизнесу, чтобы достичь большего”</p>\n' +
            '                            <img src="' + imgPath + 'img/granyts-prev2.png">\n' +
            '                            <h5 class="no-shadow">Динамика показателей</h5>\n' +
            '                            <p>На момент начала работы с блогом, в нем уже было опубликовано 20 статей. Мы написали\n' +
            '                                109.</p>\n' +
            '                            <p>Актуальная статистика просмотров статей в сутки:</p>\n' +
            '                            <img src="' + imgPath + 'img/granyts-prev3.png">\n' +
            '                            <p class="text-center">Статья - рекордсмен по просмотрам</p>\n' +
            '                            <img src="' + imgPath + 'img/granyts-prev4.png">\n' +
            '                            <p class="text-center">Также эта статья в ТОПе гугл</p>\n' +
            '                        </div><!-- #modal-content-7 -->');
        modalContent.push('<div id="modal-content-4">\n' +
            '                            <h3 class="no-shadow">Блог для интернет-магазина женской одежды ДХМД</h3>\n' +
            '                            <h5 class="no-shadow">Краткое описание проекта</h5>\n' +
            '                            <p>ДХМД - интернет-магазин женской одежды премиум-класса, в котором представлены европейские\n' +
            '                                бренды. Аудитория магазина - деловые женщины, возраст 35+, - руководители, бизнес-вумен.\n' +
            '                                Однако в ассортименте представлены и молодежные модели, в связи с чем была задача\n' +
            '                                привлечь и девушек от 20 лет.</p>\n' +
            '                            <h5 class="no-shadow">Цели</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Выражение экспертного мнения компании для повышения доверия и лояльности клиентов;\n' +
            '                                </li>\n' +
            '                                <li>Закрытие возражений и помощи потенциальным клиентам в качестве дожима тех, кто\n' +
            '                                    сомневается в покупке;\n' +
            '                                </li>\n' +
            '                                <li>Привлечение еще одного сегмента аудитории (женщины от 20 лет) на сайт и, как\n' +
            '                                    следствие, в магазин.\n' +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <h5 class="no-shadow">Инструмент</h5>\n' +
            '                            <p>По заказу клиента для данного проекта был создан блог в качестве имиджевой\n' +
            '                                составляющей.</p>\n' +
            '                            <h5 class="no-shadow">Вложения: компания не вкладывается в продвижение.</h5>\n' +
            '                            <p>Сотрудничество завершилось 20.08.2017</p>\n' +
            '\n' +
            '                            <div class="owl-carousel popup-alt-image-gallery modalSlider">\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://dhmd.ru/blog/14-neozhidannyih-obrazov-s-sumkoy-poyasom/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/14-neozhidannyih-obrazov-s-sumkoy-poyasom.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://dhmd.ru/blog/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/delovoy-obraz-v-stile-militari-vzryivnaya-elegantnost.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://dhmd.ru/blog/zagadochnaya-istoriya-zhenskogo-trencha/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/zagadochnaya-istoriya-zhenskogo-trencha.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://dhmd.ru/blog/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/v-moem-vozraste-takoe-ne-nosyat-chto-delat-s-etoy-myislyu.jpg"></a>\n' +
            '                                </div>\n' +
            '                                <div class="item">\n' +
            '                                    <a href="https://dhmd.ru/blog/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy/"\n' +
            '                                       target="_blank"><img class="lazyOwl" src="' + imgPath + 'img/idealnyiy-naryad-dlya-ledi-boss-7-besproigryishnyih-resheniy.jpg"></a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-5">\n' +
            '                            <h3 class="no-shadow">Проект экспертов по развитию отделочного бизнеса Rotach Training</h3>\n' +
            '                            <h5 class="no-shadow">Описание проекта</h5>\n' +
            '                            <p>Образовательный проект для владельцев отделочного бизнеса. Специализируется на построении\n' +
            '                                системы бизнеса, работе с сотрудниками, привлечении потенциальных клиентов и дальнейших\n' +
            '                                продажах, увеличении среднего чека и роста прибыли компаний отделочного сегмента в\n' +
            '                                целом.</p>\n' +
            '                            <h5 class="no-shadow">Цели</h5>\n' +
            '                            <p>\n' +
            '                            <ul>\n' +
            '                                <li>Повысить узнаваемость проекта и его тренеров.</li>\n' +
            '                                <li>Сформировать образ тренеров проекта как экспертов в развитии отделочного бизнеса,\n' +
            '                                    лидеров по обучению в этой нише, которые знают, о чем говорят, имеют много\n' +
            '                                    практического опыта именно в отделочном сегменте, и которым можно доверять.\n' +
            '                                </li>\n' +
            '                                <li>Привлечь и удержать подписчиков с целью дальнейшего перевода их в потенциальных\n' +
            '                                    клиентов и клиентов, сформировать ядро целевой аудитории (ЦА) в соцсетях.\n' +
            '                                </li>\n' +
            '                                <li>Создать в сообществах атмосферу, располагающую аудиторию к активному взаимодействию\n' +
            '                                    с сообществом, общению между собой, то есть сформировать открытую платформу для\n' +
            '                                    владельцев отделочного бизнеса.\n' +
            '                                </li>\n' +
            '                            </ul>\n' +
            '                            </p>\n' +
            '                            <h5 class="no-shadow">Инструмент: группа ВКонтакте</h5>\n' +
            '                            <p>Результат первых 2-х месяцев работы (май-июнь) без платного продвижения публикаций. Охват\n' +
            '                                вырос более, чем в 2 раза. Обратная связь - почти в 2 раза. За счет регулярности\n' +
            '                                публикаций, их уникальности (на странице много авторской информации и информации,\n' +
            '                                адаптированной под особенности сегмента бизнеса ЦА), полезности для аудитории, а также\n' +
            '                                за счет внедрения активностей в соцсетях. Аудитория страницы открыта к общению, им нужно\n' +
            '                                было только дать для этого повод и возможность. </p>\n' +
            '                            <p>+ Обратная связь, которую клиент получил от аудитории, “увеличилось количество\n' +
            '                                положительных отзывов “Мы вас читаем, спасибо за полезную информацию”.</p>\n' +
            '                            <h5 class="no-shadow">Инфографика</h5>\n' +
            '                            <img src="' + imgPath + 'img/rotach-prev1.png">\n' +
            '                            <p></p>\n' +
            '                            <img src="' + imgPath + 'img/rotach-prev2.png">\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-6">\n' +
            '                            <img src="' + imgPath + 'img/shurina.jpg" class="lazy full-width"\n' +
            '                                 alt="shurina">\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-7">\n' +
            '                            <h5 class="no-shadow">Лендинги с нашим текстом</h5>\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://truemanbox.ru/" target="_blank">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/trueman-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Нестандартные подарки для мужчин</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://pintosevich.com/megatraining/"\n' +
            '                                       target="_blank"><img class="lazyOwl"\n' +
            '                                                            src="' + imgPath + 'img/mega-preview-small.jpg"></a>\n' +
            '                                    <p>Мегатренинг Ицхака Пинтосевича 2018</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://bestgiftformen.ru/ "\n' +
            '                                       target="_blank"><img class="lazyOwl"\n' +
            '                                                            src="' + imgPath + 'img/gifts-preview.jpg"></a>\n' +
            '                                    <p>Подарочные сертификаты на дегустацию виски</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://chuprova-tanya.ru/instagram/"\n' +
            '                                       target="_blank"><img class="lazyOwl"\n' +
            '                                                            src="' + imgPath + 'img/chuprova-preview.jpg"></a>\n' +
            '                                    <p>Курс “Самый красивый Инстаграм”</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://pg.deks.ua/"\n' +
            '                                       target="_blank"><img class="lazyOwl"\n' +
            '                                                            src="' + imgPath + 'img/deks-preview.jpg"></a>\n' +
            '                                    <p>Фотопанели из стекла</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-8">\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="https://valery.fm/antichaos4" target="_blank">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/morozovlead-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Анти Хаос в Интернет Продюсировании</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="http://www.kosmetologiya-kazan.ru/"\n' +
            '                                       target="_blank"><img class="lazyOwl"\n' +
            '                                                            src="' + imgPath + 'img/kosmetologiya-preview.jpg"></a>\n' +
            '                                    <p>Косметоллгия Казань</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-9" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl"\n' +
            '                                                src="' + imgPath + 'img/pishiprosto-preview.jpg"></a>\n' +
            '                                    <p>Контент-спринт от Пиши просто</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-9">\n' +
            '                                        <img src="' + imgPath + 'img/pishiprosto.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="pishiprosto">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-10">\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="https://valery.fm/morozov_million" target="_blank">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/morozov-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Курс “Продюсер-миллионер”</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-11" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl"\n' +
            '                                                src="' + imgPath + 'img/sprint-preview.jpg"></a>\n' +
            '                                    <p>Контент-спринт от Пиши Просто</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-11">\n' +
            '                                        <img src="' + imgPath + 'img/sprint.jpg" class="lazy full-width"\n' +
            '                                             alt="pishiprosto">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-12">\n' +
            '                            <h4 class="no-shadow">Группа строительных компаний Delmar</h4>\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-13" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/delmar1-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-14" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/delmar2-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-15" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/delmar3-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                            <h4 class="no-shadow">Проект Rotach Training </h4>\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-16" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/rotach1-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-17" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/rotach2-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-18" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/rotach3-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-13">\n' +
            '                                        <img src="' + imgPath + 'img/delmar1.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="delmar1">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-14">\n' +
            '                                        <img src="' + imgPath + 'img/delmar2.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="delmar2">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-15">\n' +
            '                                        <img src="' + imgPath + 'img/delmar3.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="delmar3">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-16">\n' +
            '                                        <img src="' + imgPath + 'img/rotach1.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="rotach1">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-17">\n' +
            '                                        <img src="' + imgPath + 'img/rotach2.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="rotach2">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-18">\n' +
            '                                        <img src="' + imgPath + 'img/rotach3.jpg" class="lazy item-thumbnail"\n' +
            '                                             alt="rotach3">\n' +
            '                                    </div>');
        modalContent.push('<div id="modal-content-19">\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item">\n' +
            '                                    <a href="' + imgPath + 'img/Kom_pred.pdf" target="_blank">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/kostenko-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Юридическая компания Костенко и партнеры</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-20">\n' +
            '                            <h4 class="no-shadow">Письмо 1 – информация о проекте, особенности</h4>\n' +
            '                            <h6 class="no-shadow">Тема: Похудеть и получить за это призы – возможно</h6>\n' +
            '                            <h6 class="no-shadow">Тема 2: 100 000 грн в обмен на твой лишний вес</h6>\n' +
            '                            <p>Приветствую!<br><br>\n' +
            '\n' +
            '                                Давай знакомиться. Я Игорь Обуховский, мастер по утилизации жира и Босс проекта\n' +
            '                                «ЖирКиллер».<br><br>\n' +
            '\n' +
            '                                Что такое «ЖирКиллер»? Это первая в Украине онлайн фитнес-игра. А еще, это твой шанс\n' +
            '                                вырваться из диванного плена, привести свое тело в порядок и выиграть крутые\n' +
            '                                призы.<br><br>\n' +
            '\n' +
            '                                Да, да, да. Я знаю, что у тебя уже были попытки повоевать ордой пирожков, и знаю, как\n' +
            '                                бесславно эта битва завершилась. Почему же тогда я уверен, что «ЖирКиллер» поможет тебе\n' +
            '                                распрощаться с лишним весом? Есть несколько причин:<br>\n' +
            '                                1. Тебе придется делать. Тут не прокатит «сегодня среда, а я начну со следующего\n' +
            '                                понедельника», «у меня просто генетика такая и кость широкая», «может, в другой раз» и\n' +
            '                                тому подобное. 24/7 за тобой будет следить твой Агент и я лично. И если ты решишь\n' +
            '                                халявить, нам придется попрощаться.<br><br>\n' +
            '\n' +
            '                                2. У тебя будет все, чтобы привести себя в порядок. Во 2 сезоне «ЖирКиллера» мы\n' +
            '                                подготовили для тебя закрытый Личный кабинет. Там ты получишь всю необходимую\n' +
            '                                информацию: рационы питания, тренировки, видео с пинками советами. Помимо этого у тебя\n' +
            '                                будет постоянная поддержка твоего Агента, диетолога и психолога. Тебе останется просто\n' +
            '                                выполнять все эти задания и соблюдать рекомендации.<br><br>\n' +
            '\n' +
            '                                3. Кстати, об Агентах. На время игры Агент - это твой лучший друг, соратник и помощник.\n' +
            '                                Ежедневно он будет работать с тобой, поддерживать советом и добрым словом, а иногда и\n' +
            '                                вытирать твои слезы (хотя не факт:)). Свои отчеты о выполненных заданиях ты тоже будешь\n' +
            '                                отправлять Агенту. И если протупишь, тут слезы уже не помогут.<br><br>\n' +
            '\n' +
            '                                4. А главное, ты уже не сможешь сказать, что тебе не хватает мотивации. Ведь за лучшие\n' +
            '                                результаты я подготовил призы. И думаю, отказаться от них в пользу жира просто\n' +
            '                                глупо.<br><br>\n' +
            '\n' +
            '                                В таких условиях единственное, что может тебе помешать, - это лень. Но это же не про\n' +
            '                                тебя, ведь так?<br><br>\n' +
            '\n' +
            '\n' +
            '                                Считай, что это был первый волшебный пинок:)<br>\n' +
            '                                Не прощаюсь<br>\n' +
            '                                - Босс проекта Игорь Обуховский\n' +
            '                            </p>\n' +
            '                            <h4 class="no-shadow">Письмо 2 – правила участия, ответы на часто задаваемые вопросы</h4>\n' +
            '                            <h6 class="no-shadow">Тема: Давай я отвечу на твои вопросы</h6>\n' +
            '                            <h6 class="no-shadow">Тема 2: Босс всегда прав и другие правила игры</h6>\n' +
            '                            <p>Привет!<br><br>\n' +
            '\n' +
            '                                Ох и засыпали меня письмами с вопросами об игре. Что же, спрашивали - отвечаю.<br><br>\n' +
            '\n' +
            '                                <span>1. Сколько будет длиться игра?</span><br>\n' +
            '                                Мы начнем 7 ноября и будем сжигать твои лишние килограммы в течение 5 недель.<br><br>\n' +
            '\n' +
            '                                <span>2. Когда я могу оплатить участие в проекте?</span><br>\n' +
            '                                Немного терпения:) Я обязательно тебе сообщу заранее. Так что регулярно проверяй\n' +
            '                                почту.<br><br>\n' +
            '\n' +
            '                                <span>3. Как найти время на тренировки?</span><br>\n' +
            '                                Все тренировки разработаны для занятий дома. И каждая из них займет у тебя не более\n' +
            '                                30-40 минут в день. Уверен, если отбросить отмазки, ты легко найдешь это время в своем\n' +
            '                                расписании.<br><br>\n' +
            '\n' +
            '                                <span>4. Есть ли какие-то ограничения для участия?</span><br>\n' +
            '                                Участвовать в игре могут все, кто достиг 18 лет. Но если у тебя есть какие-то проблемы\n' +
            '                                со здоровьем, лучше проконсультируйся у врача о возможности участия в проекте.<br><br>\n' +
            '\n' +
            '                                <span>5. Откуда ты будешь знать, как я выполняю задания?</span><br>\n' +
            '                                У меня есть Всевидящее око:) Шутка. Во 2 сезоне ты будешь получать всю информацию через\n' +
            '                                удобный Личный кабинет. Туда же будешь отправлять отчеты о выполнении заданий. Твой\n' +
            '                                Агент и я лично будем проверять их и раздавать волшебные ускоряющие пинки. Но надеюсь, с\n' +
            '                                тобой до этого не дойдет:)<br><br>\n' +
            '\n' +
            '                                <span>6. Я могу вылететь из игры?</span><br>\n' +
            '                                Да, если будешь халявить и халтурить. Этого я не терплю. Так что настройся на серьезную\n' +
            '                                работу.<br><br>\n' +
            '\n' +
            '                                И еще, предупреждаю сразу. <span>У нас есть несколько правил:</span><br>\n' +
            '                                1. Босс всегда прав.<br>\n' +
            '                                2. Если Босс не прав, то смотри пункт 1.<br>\n' +
            '                                3. Твой возраст, пол, место проживания, нынешний вес, объемы, физическая подготовка не\n' +
            '                                имеют значения. Важны только твое желание победить лишний вес и готовность что-то делать\n' +
            '                                для этого. Во всем остальном я тебе помогу.<br>\n' +
            '                                4. Если во время игры тебе покажется, что жизнь – боль, ты на правильном пути. Просто\n' +
            '                                продолжай движение.<br><br>\n' +
            '\n' +
            '                                На связи,<br>\n' +
            '                                - Босс проекта Игорь Обуховский<br><br>\n' +
            '\n' +
            '                                <span>P.S.</span> В следующем письме я расскажу, что же ждет тебя во время игры. Следи\n' +
            '                                за почтой;)</p>\n' +
            '                            <h4 class="no-shadow">Письмо 3 – что будет во время игры</h4>\n' +
            '                            <h6 class="no-shadow">Тема: Пора рассказать, что тебя ждет на самом деле</h6>\n' +
            '                            <p>Приветствую!<br><br>\n' +
            '\n' +
            '                                Ты наверняка уже ждешь, когда можно будет оплатить участие во 2 сезоне «ЖирКиллера».<br><br>\n' +
            '\n' +
            '                                И хотя время еще не пришло, это не мешает мне уже сейчас немного рассказать, что же тебя\n' +
            '                                ждет после подключения к игре.<br>\n' +
            '                                Итак…<br><br>\n' +
            '\n' +
            '                                1. Еще до старта ты получишь доступ к Личному кабинету. Там тебя ждут 4 подготовительных\n' +
            '                                задания (достаточно простых, но ты на это не ведись): изучить правила участия,\n' +
            '                                познакомиться с другими жиркиллерами, рассчитать свою суточную норму калорий (я\n' +
            '                                расскажу, как), а также сделать фото «До» и необходимые замеры.<br><br>\n' +
            '\n' +
            '                                2. В это же время тебе придется мысленно распрощаться с привычными отмазками, прогулами\n' +
            '                                тренировок, пирожками на ночь и прочими вещами, которые и привели тебя в состояние «До».<br><br>\n' +
            '\n' +
            '                                3. С 7 ноября начнется жара Игра. И в течение 5 недель ты ежедневно будешь получать в\n' +
            '                                своем Личном кабинете задания. Там будет информация о тренировках и питании, а также\n' +
            '                                видеосоветы. Что-что? В твоей голове уже мелькают “гениальные” мысли, что у тебя\n' +
            '                                получится подзабить на что-то? Смею тебя огорчить. В ответ на задания мы с Агентами ждем\n' +
            '                                от тебя подробные отчеты о их выполнении (да, прямо как твой начальник). И никаких\n' +
            '                                отговорок.<br><br>\n' +
            '\n' +
            '                                4. В конце каждой недели ты получаешь задание на вылет. И тут все просто. Либо\n' +
            '                                выполняешь его в течение 2-х дней, либо вылетаешь из игры. Сразу предостерегу тех, кто\n' +
            '                                думает, что можно выполнять задание «на отвали». Если твой результат будет слабее, чем у\n' +
            '                                других участников, ты тоже вылетишь. Так что придется постараться.<br><br>\n' +
            '\n' +
            '                                5. Те, кто не будут халявить, успешно доберутся до финала. И смогут побороться за\n' +
            '                                о-о-очень крутые призы!<br><br>\n' +
            '\n' +
            '                                Кстати, пункт 2 можешь начать выполнять уже сейчас. И не забывай читать почту.<br><br>\n' +
            '\n' +
            '                                На связи,<br>\n' +
            '                                - Босс проекта Игорь Обуховский\n' +
            '                            </p>\n' +
            '\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-21">\n' +
            '                            <h4 class="no-shadow">Письмо 1 - приветствие и призыв присоединиться в соцсетя</h4>\n' +
            '                            <h6 class="no-shadow">Тема: [Имя], получите Вашу скидку</h6>\n' +
            '                            <p>[Имя], приветствую!<br>\n' +
            '                                На связи Владислав, руководитель интернет-магазина Vinzer Home.<br><br>\n' +
            '\n' +
            '                                Возможно, Вы удивлены, что я пишу Вам такое письмо. Скорее всего, от интернет-магазинов\n' +
            '                                Вы привыкли получать совсем другие сообщения. Я тоже привык. Поэтому в Vinzer Home мне\n' +
            '                                хотелось все сделать иначе.<br><br>\n' +
            '\n' +
            '                                Мы создавали этот магазин, чтобы помогать Вам делать Ваш дом уютнее, деталь за деталью\n' +
            '                                окутывать его атмосферой тепла и комфорта. Такое же настроение я хочу сохранить в нашем\n' +
            '                                общении. И буду очень рад, если по Вашей обратной связи пойму, что у меня\n' +
            '                                получилось.<br><br>\n' +
            '\n' +
            '                                А пока...<br><br>\n' +
            '\n' +
            '                                У нас в Vinzer Home есть одна традиция, которая мне очень нравится. Каждому, кто\n' +
            '                                присоединяется к нам, мы дарим скидку в 100 грн на любой товар. Она сохраняется за Вами\n' +
            '                                в течение 6 месяцев.<br><br>\n' +
            '\n' +
            '                                Чтобы ею воспользоваться, Вам достаточно при заказе указать этот email. Скидка будет\n' +
            '                                использована автоматически.\n' +
            '                                <span>Кстати, могу предложить несколько вариантов товаров, которые точно будут Вам интересны:</span>\n' +
            '                                <br>\n' +
            '                                <br>\n' +
            '                                <span>Хотите просмотреть другие варианты? Переходите в Vinzer Home</span>\n' +
            '                                <br>\n' +
            '                                <br>\n' +
            '                                Надеюсь, эта покупка принесет Вам удовольствие и хорошее настроение.<br><br>\n' +
            '\n' +
            '                                С пожеланиями тепла и уюта,\n' +
            '                                руководитель интернет-магазина Vinzer Home Владислав<br><br>\n' +
            '\n' +
            '                                <span>P.S.</span> В ближайшие дни я пришлю Вам сообщение, где расскажу кое-что очень\n' +
            '                                важное. Так что оставайтесь на связи!<br><br>\n' +
            '\n' +
            '                                <span>P.P.S.</span> Вы уже присоединились к нам в соцсетях? Предупреждаю сразу, это НЕ\n' +
            '                                типичные страницы интернет-магазинов. Прежде всего, Вы найдете там массу полезной\n' +
            '                                информации по оформлению интерьера, выбору предметов декора, посуды, текстиля.\n' +
            '                                Присоединяйтесь\n' +
            '                            </p>\n' +
            '                            <h4 class="no-shadow">Письмо 2 - Акция только для подписчиков на 7 дней</h4>\n' +
            '                            <h6 class="no-shadow">Тема: Делюсь только с Вами [Подробности внутри]</h6>\n' +
            '                            <p>Приветствую!<br><br>\n' +
            '\n' +
            '                                Если Вы внимательно читали мое прошлое сообщение, то помните, что я обещал написать Вам\n' +
            '                                нечто очень важное.<br><br>\n' +
            '\n' +
            '                                Время пришло:)<br><br>\n' +
            '\n' +
            '                                С этого дня я буду лично сообщать Вам обо всех акциях, скидках и интересных предложениях\n' +
            '                                в Vinzer Home. Причем еще до того, как о них узнают все остальные.<br><br>\n' +
            '\n' +
            '                                Почему я принял такое решение? Я хочу дать Вам больше возможностей сделать Ваш дом лучше\n' +
            '                                и уютнее. А еще показать, что для меня очень важно Ваше доверие. Ведь Вы оставили нам\n' +
            '                                свой email-адрес, хотя и не могли знать, как мы будем его использовать.<br><br>\n' +
            '\n' +
            '                                И в качестве первой благодарности я дарю Вам вот этот промокод на скидку 10%.<br><br>\n' +
            '\n' +
            '                                <span>ПРОМОКОД/ИЗОБРАЖЕНИЕ СЕРТИФИКАТА</span><br><br>\n' +
            '\n' +
            '                                В течение 7-ми дней Вы можете использовать его при заказе абсолютно любого товара из\n' +
            '                                интернет-магазина Vinzer Home.<br><br>\n' +
            '                                <span>Можете воспользоваться им прямо сейчас, заказав что-то из наших ТОПовых предложений (качество этих товаров гарантируют мои жена и мама)</span>\n' +
            '                                <br>\n' +
            '                                <br>\n' +
            '                                <span>Ищете что-то другое? Переходите в Vinzer Hom</span>\n' +
            '                                <br>\n' +
            '                                <br>\n' +
            '                                Приятных Вам покупок и теплого настроения,<br>\n' +
            '                                руководитель интернет-магазина Vinzer Home Владислав\n' +
            '                            </p>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-22">\n' +
            '                        <div class="owl-carousel popup-alt-image-gallery modalSlider">\n' +
            '                            <div class="item">\n' +
            '                                <a href="https://valery.fm/morozov_million" target="_blank">\n' +
            '                                    <img class="lazyOwl" src="' + imgPath + 'img/morozov-preview.jpg">\n' +
            '                                </a>\n' +
            '                                <p>Лендинг</p>\n' +
            '                            </div>\n' +
            '                            <div class="item">\n' +
            '                                <a href="https://valery.fm/antichaos4" target="_blank">\n' +
            '                                    <img class="lazyOwl" src="' + imgPath + 'img/morozovlead-preview.jpg">\n' +
            '                                </a>\n' +
            '                                <p>Лид-магнит</p>\n' +
            '                            </div>\n' +
            '                            <div class="item">\n' +
            '                                <a href="https://valery.fm/antichaos2" target="_blank">\n' +
            '                                    <img class="lazyOwl" src="' + imgPath + 'img/morozovoto-preview.jpg">\n' +
            '                                </a>\n' +
            '                                <p>Лид-магнит</p>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                    </div>');
        modalContent.push('<div  id="modal-content-23">\n' +
            '                            <div class="slider">\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-11" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/sprint-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Лендинг</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-9" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/pishiprosto-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Лид-магнит</p>\n' +
            '                                </div>\n' +
            '                                <div class="slider-item no-link">\n' +
            '                                    <a href="" data="modal-content-24" class="modal-button thumbnail linked"\n' +
            '                                       data-dismiss="modal"\n' +
            '                                       data-toggle="modal"\n' +
            '                                       data-target="#common-modal2">\n' +
            '                                        <img class="lazyOwl" src="' + imgPath + 'img/sprintlessons-preview.jpg">\n' +
            '                                    </a>\n' +
            '                                    <p>Страницы уроков</p>\n' +
            '                                </div>\n' +
            '                            </div>\n' +
            '                        </div>');
        modalContent.push('<div id="modal-content-24">\n' +
            '                                        <img src="' + imgPath + 'img/sprintlessons.jpg"\n' +
            '                                             class="lazy item-thumbnail"\n' +
            '                                             alt="sprintlessons">\n' +
            '                                    </div>');







    });

    //Show modal window with context content
        $(document).on('click', '.modal-button', function () {
        //disabling fullpage scroll when modal is open
        $.fn.fullpage.setAllowScrolling(false);
        $.fn.fullpage.setKeyboardScrolling(false);

        var $modalInner = $('.modal .modal-body');
        $modalInner.empty();
        var $modalId = $(this).attr('data');
        var number = parseInt($modalId.split("-").pop());
        $modalInner.append(modalContent[number]);
    });

    //enabling fullpage scroll
    $('.modal').on('click', function (e) {
        var a = e.target.getAttribute('class');
        if (a === 'close' || a === 'modal fade in') {
            $.fn.fullpage.setAllowScrolling(true);
            $.fn.fullpage.setKeyboardScrolling(true);
        }
    });

    var $content = $('ul.content');
    $('.chart').on('click', function () {
        $content.empty();
        var result = {};
        var $activeInputs = $("input:checkbox:checked");
        $activeInputs.each(function(item, i) {
            var $element = $(i);
            var groupName = $element.closest('.tab-pane').find('h4:first').text();
            var currentCheckbox = $element.closest('label').find('input');
            result[groupName] = result[groupName] || [];
            result[groupName].push(currentCheckbox);
        });

        jQuery.each(result, function (i, val) {
            $content.append('<h5 class="no-shadow" id="title1">' + i + '</h5>');
            jQuery.each(val, function () {
                $content.append('<li>' +
                    '<label>' +
                    '<input name="service[]" type="checkbox" id="' + this[0].id + '" value="' + this[0].value + '">' +
                    '<span class="checkmark"></span>'
                    + this[0].value + '' +
                    '</label>' +
                    '</li>');
            });
        });
    });

    $content.on('click', 'li', function (e) {
        var $thisId = $(this).find("input").attr("id");
        var $curInput = $('input#'+ $thisId);
        $curInput.closest('label').toggleClass('active-row');

        if ( $(e.target).closest('li').prev('h5').nextUntil('h5', 'li').length === 1) {
            $(e.target).closest('li').prev('h5').hide();
        }

        $(e.target).closest('li').remove();
        $curInput.prop( "checked", false);
    });

})(jQuery);