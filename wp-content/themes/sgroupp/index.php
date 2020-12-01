<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sgroupp
 */

get_header();
?>
<main>
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
    <div class="first-block" style="display: none">
        <div class="container">
            <div class="first-wrapper">
                <div class="left-text">
                    <div class="left-text_item">
                        <h3 class=" left-text-title">Целевой инструктаж ПОД/ФТ - 2 300 р.</h3>
                        <h3 class="left-text-title">Повышение уровня знаний - 2 300 р..</h3>
                        <p class="text-sale">(предусмотрены скидки для групп 2 и более участников)</p>
                    </div>

                    <div class="left-text_item text-education">
                        Обучение с выдачей свидетельства гос. образца для организаций поднадзорных Росфинмониторингу, ЦБ, Пробирной палате, Минкомсвязи.
                    </div>
                    <div class="left-text_item text-official">
                        *Официальный партнер АНО «МУМЦФМ» (Международный учебно-методический центр финансового<br>
                        мониторинга)
                    </div>
                    <div class="left-text_item">
                        <button class="button popmake-13"><a href="#">Отправить заявку </a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h3 >Почему стоит пройти обучение у нас:</h3>
            </div>
            <div class="features_wrapper">
                <div class="feature-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/1.png" alt="1">
                    <p class="feature-item_title">Вебинар</p>
                    <p class="feature-item_text">8-ми часовой онлайн-курс с преподавателем, с перерывами, с любого удобного для вас места и устройства. Записи вебинара так же будут доступны и после занятия. </p>
                </div>
                <div class="feature-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/2.png" alt="1">
                    <p class="feature-item_title">Раздаточные материалы</p>
                    <p class="feature-item_text">Для применения Инструктажа для ежедневной работы</p>
                </div>
                <div class="feature-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/3.png" alt="1">
                    <p class="feature-item_title">Сертификат</p>
                    <p class="feature-item_text">Выдача сертификатов государственного образца</p>
                </div>
                <div class="feature-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/4.png" alt="1">
                    <p class="feature-item_title">Внесение в реестр</p>
                    <p class="feature-item_text">Бесплатное внесение в реестр</p>
                </div>
            </div>
        </div>
    </div>
    <div class="calendar" id="calendar">
        <div class="container">
            <div class="section-title">
                <h3>Календарь занятий</h3>
            </div>
            <div class="calendar-wrapper">
                <div class="november">
                    <img src="<?php bloginfo('template_url'); ?>/img/november.png" alt="november">
                </div>
                <div class="december">
                    <img src="<?php bloginfo('template_url'); ?>/img/december.png" alt="december">
                </div>
            </div>
        </div>
    </div>
    <div class="speakers" id="speakers">
        <div class="container">
            <div class="section-title">
                <h3>Спикеры</h3>
            </div>
            <div class="speakers-wrapper">
                <div class="speaker">
                    <img class="speaker-img-first speaker-img" src="<?php bloginfo('template_url'); ?>/img/speaker1.png" alt="1">
                    <div class="speaker-text">
                        <div class="speaker-title">
                            Дмитрий Щеголихин
                        </div>
                        <div class="speaker-desc">

                            <ul class="speaker-ul">
                                <li>Ведущий лектор направления финансового мониторинга и ПОД/ФТ учебного центра, имеющего многолетнюю аккредитацию МУМФЦМ Росфинмониторинга;</li>
                                <li>Разработчик авторской программы обучения по ПОД/ФТ;</li>
                                <li>Специальное должностное лицо по ПОД/ФТ группы микрофинансовых организаций;</li>
                                <li>Автор десятков научных публикаций по наиболее актуальным вопросам правоприменения, в т.ч. в сфере финансового мониторинга и ПОД/ФТ.</li>
                                <li>Учредитель общероссийского образовательного проекта «Академия финансового мониторинга».</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="speaker">
                    <div class="speaker-text speaker-text_left">
                        <div class="speaker-title">
                            Илья Клеткин
                        </div>
                        <div class="speaker-desc">
                            <ul class="speaker-ul">
                                <li>Старший юрисконсульт UPTRADER LLP (London, UK)</li>
                                <li>Специалист в области Due diligence, compliance и business-law.</li>
                                <li>Член исследовательской группы E.L.S.A. и СОВЕТА ЕВРОПЫ</li>
                                <li>Организатор Петербургского Международного Юридического Форума</li>
                                <li>Магистр юриспруденции (НИУ «ВШЭ», СПбГУ)</li>
                            </ul>
                        </div>

                    </div>
                    <div class="speaker-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/speaker2.png" alt="2">
                    </div>
                </div>
                <div class="speaker">
                    <div class="speaker-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/speaker3.png" alt="3">
                    </div>
                    <div class="speaker-text">
                        <div class="speaker-title">
                            Мария Кононова
                        </div>
                        <div class="speaker-desc">
                            <ul class="speaker-ul">
                                <li>Юрисконсульт UPTRADER LLP (London, UK)</li>
                                <li>Юрист-литигатор, специалист в области Government relations.</li>
                                <li>Участник международных конференций, автор рецензируемых научных публикаций.</li>
                                <li>Магистр юриспруденции (РПА Минюста РФ)</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="steps" id ="steps">
        <div class="container">
            <div class="section-title">
                <h3>Получи свидетельство в 4 этапа:</h3>
            </div>
            <div class="steps-wrapper">
                <div class="steps-column">
                    <div class="step">
                        <b>1 этап.<br>
                        Отправьте заполненную<br> форму заявки на наш email</b>
                        (скачать форму заявки)
                    </div>
                    <div class="step">
                        <b>4 этап.<br>
                            Получите свидетельство<br></b>
                        Вышлем скан свидетельства на email и отправим оригинал почтой
                    </div>
                </div>
                <img class="steps-img" src="<?php bloginfo('template_url'); ?>/img/steps-bg.png" alt="">
                <div class="steps-column">
                    <div class="step">
                        <b>2 этап.<br>
                        Оплатите счет<br></b>
                        Счет мы вышлем на ваш email
                    </div>
                    <div class="step">
                        <b>3 этап.<br>
                        Учавствуйте в вебинаре онлайн<br></b>
                        Запись вебинара предоставляется
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

    <div class="pvk" id="pvk">
        <div class="container">
            <div class="section-title">
                <h3>Правила внутреннего контроля</h3>
            </div>
            <div class="pvk-first">
                <div class="pvk-first_item">
                    <img src="<?php bloginfo('template_url'); ?>/img/pvk1.png" alt="3">
                    <p class="pvk-first_text">для индивидуальных предпринимателей (риэлторов и ювелиров)</p>
                </div>
                <div class="pvk-first_item">
                    <img src="<?php bloginfo('template_url'); ?>/img/pvk2.png" alt="3">
                    <p class="pvk-first_text">для юридических лиц</p>
                </div>
                <div class="pvk-first_item">
                    <img src="<?php bloginfo('template_url'); ?>/img/pvk3.png" alt="3">
                    <p class="pvk-first_text">для «крупных» НФО</p>
                </div>
            </div>
            <p class="pvk-middle">
                Мы учитываем все требования и пожелания надзорных органов, в частности:
            </p>
            <div class="pvk-six">
                <div class="pvk-six_item">
                    <div class="pvk-six_number">1.</div>
                    <div class="pvk-six_text">
                        точное соблюдение структуры, предусмотренной нормативными актами (что особенно важно для НФО, поднадзорных Банку России)
                    </div>
                </div>
                <div class="pvk-six_item">
                    <div class="pvk-six_number">2.</div>
                    <div class="pvk-six_text">
                        максимально подробное описание всех процедур внутреннего контроля
                    </div>
                </div>
                <div class="pvk-six_item">
                    <div class="pvk-six_number">3.</div>
                    <div class="pvk-six_text">
                        обязательный учет вида деятельности конкретного субъекта ПОД/ФТ (исключение «лишних» положений Федерального закона 115-ФЗ и иных нормативно-правовых актов)
                    </div>
                </div>
            </div>
            <div class="pvk-six">
                <div class="pvk-six_item">
                    <div class="pvk-six_number">4.</div>
                    <div class="pvk-six_text">
                        учет разъяснений и рекомендаций из информационных писем и сообщений Росфинмониторинга и Банка России
                    </div>
                </div>
                <div class="pvk-six_item">
                    <div class="pvk-six_number">5.</div>
                    <div class="pvk-six_text">
                        отражение специфики конкретного субъекта ПОД/ФТ
                    </div>
                </div>
                <div class="pvk-six_item">
                    <div class="pvk-six_number">6.</div>
                    <div class="pvk-six_text">
                        включение в состав ПВК по ПОД/ФТ стандартизированных форм и шаблонов: внутреннего сообщения (сообщения об операции), актов, внутренних распоряжений, журналов учета и др.
                    </div>
                </div>
            </div>
            <div class="bottom-button">
                <button class="button popmake-13"><a href="#">Обсудить разработку ПВК</a></button>

            </div>
        </div>
    </div>
</main>

<?php
get_sidebar();
get_footer();
