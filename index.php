<?php 
$slug = 'index';
$page_title = 'Ballina';
include 'header.php';

$lang = get_current_lang();

// Fetch 4 featured courses
$featured_courses = $pdo->query("SELECT * FROM courses ORDER BY order_index ASC LIMIT 4")->fetchAll();

// Fetch featured teachers
$featured_teachers = $pdo->query("SELECT * FROM teachers ORDER BY order_index ASC LIMIT 8")->fetchAll();
?>

        <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div style="padding-bottom: 15px;">
                            <img src="<?php echo get_content('index', 'hero_image', $lang); ?>" style="width: 100% !important; min-width: 100% !important; max-height: 450px !important; min-height: 100px !important;">
                        </div>
                        <div class="text-center">
                            <button type="button" onclick="window.location.href='courses.php'" class="thm-btn1">Shiko kurset tona</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="main-slider main-slider-two">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev" }, "autoplay": {"delay": 5000 }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/backgrounds/1.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-two__content text-center">
                                        <h2 class="main-slider-two__tagline"><?php echo get_content('index', 'hero_slide_1_tagline', $lang) ?: 'Mësoni gjuhët e huaja me ne!'; ?></h2>
                                        <h2 class="main-slider__title"><?php echo get_content('index', 'hero_slide_1_title', $lang) ?: 'Aplikoni tani online<br /> tek ne!'; ?></h2>
                                    </div>
                                    <div class="main-slider-two__button-box text-center">
                                        <a href="apply.php" class="thm-btn">Apliko tani</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/backgrounds/2.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-two__content text-center">
                                        <h2 class="main-slider-two__tagline"><?php echo get_content('index', 'hero_slide_2_tagline', $lang) ?: 'Ne jemi të përqëndruar në këto objektiva'; ?></h2>
                                        <h2 class="main-slider__title"><?php echo get_content('index', 'hero_slide_2_title', $lang) ?: 'Sigurojme transparencë dhe <br />përgjegjshmërisë'; ?></h2>
                                    </div>
                                    <div class="main-slider-two__button-box text-center">
                                        <a href="apply.php" class="thm-btn">Apliko tani</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/backgrounds/1.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-two__content text-center">
                                        <h2 class="main-slider-two__tagline"><?php echo get_content('index', 'hero_slide_3_tagline', $lang) ?: 'Ne jemi të përqëndruar në këto objektiva'; ?></h2>
                                        <h2 class="main-slider__title"><?php echo get_content('index', 'hero_slide_3_title', $lang) ?: 'Ne ofrojmë cilësi të lartë në <br />procedurat akademike '; ?></h2>
                                    </div>
                                    <div class="main-slider-two__button-box text-center">
                                        <a href="apply.php" class="thm-btn">Apliko tani</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="main-slider-pagination"></div>
            </div>
        </section>

        <section class="features-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="features-one__single" style="max-width: 100%;">
                            <div class="features-one__single-icon"><span class="icon-empowerment"></span></div>
                            <div class="features-one__single-text">
                                <h4><a href="#"><?php echo get_content('index', 'feature_1_title', $lang) ?: 'Mësoni Aftësitë'; ?></a></h4>
                                <p><?php echo get_content('index', 'feature_1_text', $lang) ?: 'me kurse pa limite'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="features-one__single act" style="max-width: 100%;">
                            <div class="features-one__single-icon"><span class="icon-human-resources-1"></span></div>
                            <div class="features-one__single-text">
                                <h4><a href="#"><?php echo get_content('index', 'feature_2_title', $lang) ?: 'Mësues ekspertë'; ?></a></h4>
                                <p><?php echo get_content('index', 'feature_2_text', $lang) ?: 'të mirë &amp; të kualifikuar'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single" style="max-width: 100%;">
                            <div class="features-one__single-icon"><span class="icon-recruitment"></span></div>
                            <div class="features-one__single-text">
                                <h4><a href="#"><?php echo get_content('index', 'feature_3_title', $lang) ?: 'Certifikatat'; ?></a></h4>
                                <p><?php echo get_content('index', 'feature_3_text', $lang) ?: 'vlera në mbarë botën'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-one__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo get_content('index', 'section_0_tagline', $lang) ?: 'Kursi ynë'; ?></span>
                                <h2 class="section-title__title"><?php echo get_content('index', 'section_0_title', $lang) ?: 'Filloni të mësoni Gjuhët <br>me ne tani...'; ?></h2>
                            </div>
                            <p class="welcome-one__left-text"><?php echo get_content('index', 'welcome_text', $lang) ?: 'Hidhni një sy përreth dhe eksploroni shërbimet e ndryshme që ne ofrojmë për ju.'; ?></p>
                            <ul class="welcome-one__left-features-box list-unstyled">
                                <li class="welcome-one__left-features-box-single">
                                    <div class="welcome-one__left-features-box-single-icon"><span class="icon-professor"></span></div>
                                    <div class="welcome-one__left-features-box-single-title"><h4><?php echo get_content('index', 'welcome_sub_1_title', $lang) ?: 'Filloni të mësoni nga <br>ekspertët tanë'; ?></h4></div>
                                </li>
                                <li class="welcome-one__left-features-box-single">
                                    <div class="welcome-one__left-features-box-single-icon"><span class="icon-knowledge"></span></div>
                                    <div class="welcome-one__left-features-box-single-title"><h4><?php echo get_content('index', 'welcome_sub_2_title', $lang) ?: 'Rritni aftësitë e <br> gjuhës me ne'; ?></h4></div>
                                </li>
                            </ul>
                            <div class="welcome-one__left-btn">
                                <a href="courses.php" class="thm-btn">Shiko kurset tona</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-one__right clearfix">
                            <div class="shape1 rotate-me"><img src="assets/images/shapes/thm-shape1.png" alt="" /></div>
                            <div class="welcome-one__right-img1 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><div class="welcome-one__right-img1-inner"><img src="assets/images/resources/welcome-v1-img1.jpg" alt="" /></div></div>
                            <div class="welcome-one__right-img2 wow zoomIn" data-wow-delay="100ms" data-wow-duration="3500ms"><img src="assets/images/resources/welcome-v1-img2.jpg" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="courses-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo get_content('index', 'section_1_tagline', $lang) ?: 'Kontrollo listën e kurseve'; ?></span>
                    <h2 class="section-title__title"><?php echo get_content('index', 'section_1_title', $lang) ?: 'Kurset Tona'; ?></h2>
                </div>
                <div class="row">
                    <?php foreach ($featured_courses as $course): ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-duration="1000ms">
                        <div class="courses-one__single">
                            <div class="courses-one__single-img" style="max-height: 177px;">
                                <img src="<?php echo htmlspecialchars($course['image']); ?>" style="min-height: 177px; object-fit: cover;">
                                <div class="overlay-text"><p>Intenziv</p></div>
                            </div>
                            <div class="courses-one__single-content">
                                <h4 class="courses-one__single-content-title" style="min-height: 52px;"><a href="course.php?id=<?php echo $course['id']; ?>"><?php echo htmlspecialchars($course['title_sq']); ?></a></h4>
                                <div class="courses-one__single-content-review-box">
                                    <div class="rateing-box" style="min-height: 85px;">
                                        <span><?php echo htmlspecialchars(substr(strip_tags($course['description_sq']), 0, 100)); ?>...</span>
                                    </div>
                                </div>
                                <ul class="courses-one__single-content-courses-info list-unstyled" style="margin-top: 15px;">
                                    <li><i class="far fa-clock" style="color: var(--thm-base);margin-right: 3px;"></i> <?php echo htmlspecialchars($course['duration']); ?> Orë</li>
                                    <li style="float: right;"><i class="fas fa-euro-sign" style="color: var(--thm-base);margin-right: 3px;"></i> <?php echo htmlspecialchars($course['price']); ?> €</li>
                                </ul>
                                <div class="courses-one__single-foot" style="margin-top: 15px;">
                                    <a class="courses-one__single-foot-btn" href="course.php?id=<?php echo $course['id']; ?>"><i class="fas fa-angle-double-right"></i> Shiko më shumë</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="welcome-one__btn text-center">
                    <a href="courses.php" class="thm-btn">Shiko të gjitha</a>
                </div>
            </div>
        </section>

        <section class="video-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(assets/images/backgrounds/video-v3-bg.png)">
                            <div class="video-one__box-title">
                                <h2>Shiko Videon</h2>
                            </div>
                            <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=w_Kwrb_lSeo">
                                    <span class="icon-play"></span>
                                </a>
                                <span class="border-animation border-1"></span>
                                <span class="border-animation border-2"></span>
                                <span class="border-animation border-3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Section -->
        <section class="counter-one jarallax" data-jarallax data-speed="0.2" style="background-image: url(assets/images/backgrounds/Counters-v1-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="counter-one__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo get_content('index', 'section_2_tagline', $lang) ?: 'Fakte Argëtuese'; ?></span>
                                <h2 class="section-title__title"><?php echo get_content('index', 'section_2_title', $lang) ?: 'Disa nga <br>Rekordet tona'; ?></h2>
                            </div>
                            <p class="counter-one__left-text"><?php echo get_content('index', 'counter_text', $lang) ?: 'Me përvojë disa vjeçare dhe ligjëruesit më të mirë të fushave, kursi ynë ju ofron cilësinë ndër më të larta.'; ?></p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="counter-one__right">
                            <ul class="counter-one__right-box list-unstyled">
                                <li class="counter-one__right-single wow slideInUp"><div class="counter-one__right-single-icon"><span class="icon-teacher"></span></div><h3 class="odometer" data-count="15">00</h3><p class="counter-one__right-text"><?php echo get_content('index', 'counter_1_text', $lang) ?: 'Ligjërues'; ?></p></li>
                                <li class="counter-one__right-single wow slideInUp"><div class="counter-one__right-single-icon"><span class="icon-online-course"></span></div><h3 class="odometer" data-count="1980">00</h3><p class="counter-one__right-text"><?php echo get_content('index', 'counter_2_text', $lang) ?: 'Kurse'; ?></p></li>
                                <li class="counter-one__right-single wow slideInUp"><div class="counter-one__right-single-icon"><span class="icon-student"></span></div><h3 class="odometer" data-count="10000">00</h3><p class="counter-one__right-text"><?php echo get_content('index', 'counter_3_text', $lang) ?: 'Studentë'; ?></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="meet-teachers-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo get_content('index', 'section_3_tagline', $lang) ?: 'Ligjërues të kualifikuar'; ?></span>
                    <h2 class="section-title__title"><?php echo get_content('index', 'section_3_title', $lang) ?: 'Njihuni me ligjeruesit'; ?></h2>
                </div>
                <div class="testimonials-two__carousel owl-carousel owl-theme owl-dot-type1 style2">
                    <?php foreach ($featured_teachers as $teacher): ?>
                    <div class="item">
                        <div class="meet-teachers-one__single wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="meet-teachers-one__single-img">
                                <img src="<?php echo htmlspecialchars($teacher['image']); ?>" alt="<?php echo htmlspecialchars($teacher['name']); ?>">
                            </div>
                            <div class="meet-teachers-one__single-content">
                                <div class="meet-teachers-one__single-middle-content">
                                    <div class="title">
                                        <h4><?php echo htmlspecialchars($teacher['name']); ?></h4>
                                        <p><?php echo htmlspecialchars($teacher['position_' . $lang] ?? $teacher['position_sq'] ?? ''); ?></p>
                                    </div>
                                    <p class="meet-teachers-one__single-content-text"><?php echo htmlspecialchars($teacher['bio_' . $lang] ?? $teacher['bio_sq'] ?? ''); ?></p>
                                </div>
                                <div class="meet-teachers-one__single-bottom-content">
                                    <div class="meet-teachers-one__single-content-courses-box">
                                        <div class="text"><p><?php echo get_content('teachers', 'follow_us_text', $lang) ?: 'Na ndiqni në :'; ?></p></div>
                                        <div class="social-icon">
                                            <ul class="list-unstyled">
                                                <li><a target="_blank" href="<?php echo get_setting('facebook'); ?>"><i class="fab fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="<?php echo get_setting('instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
                                                <li><a target="_blank" href="<?php echo get_setting('twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="<?php echo get_setting('youtube'); ?>"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__wrapper wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="shape1"><img src="assets/images/shapes/thm-shape5.png" alt="" /></div>
                            <div class="cta-one__left">
                                <h2 class="cta-one__left-text">Ne kemi ligjëruesit më të mirë në të gjitha lëndët</h2>
                            </div>
                            <div class="cta-one__right">
                                <div class="cta-one__right-btn">
                                    <a href="teachers.php" class="thm-btn">Shiko më shumë</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
