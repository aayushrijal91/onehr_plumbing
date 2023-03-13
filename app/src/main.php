<header>
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-6 col-md-auto">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="./">
                            <?= renderImg("logo.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="time_wrapper font-roboto fs-20 row justify-content-center text-primary">
                            <div class="col-auto"><span class="time">3:39:40pm</span></div>
                            <div class="col-auto">We're Open!</div>
                            <div class="col-auto position-relative">
                                <div class="pulse pulsating-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto fs-20 font-roboto text-grey d-none d-xl-block">We'll be there in 1 hour or we pay you $100*</div>
            <div class="col-auto d-none d-md-block">
                <a href="tel:<?= $phone_number ?>" class="btn btn-primary rounded-0 text-white py-3 px-4 gap-3">
                    <div>
                        <div class="fs-20 fw-600 lh-0_8">24/7</div>
                        <div class="fs-12 fw-600 lh-0_8">service</div>
                    </div>
                    <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                    <div class="fs-27 fw-600"><?= $phone_number ?></div>
                </a>
            </div>
            <div class="col-auto d-md-none">
                <div class="time_wrapper font-roboto lh-1 fw-500 row text-primary justify-content-center">
                    <div class="col-auto position-relative">
                        <div class="pulse pulsating-circle"></div>
                    </div>
                    <div class="col">
                        <div class="time">3:39:40pm</div>
                        <div class="">We're Open!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="banner_wrapper">
    <section class="banner">
        <div class="container">
            <div class="text-center font-roboto text-quinary fw-300 fs-14 pb-5 d-lg-none">Melbourne wide local and reliable Plumbing Services.</div>
            <div class="text-center">
                <?= renderImg('clock.png', 'icons') ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <h1 class="heading fs-96 lh-1 fw-700 text-center py-3 py-md-4">
                        <div id="bannerHeadingSlider">
                            <div class="text-primary my-2">Drains fixed</div>
                            <div class="text-orange my-2">Hot water fixed</div>
                            <div class="text-pink my-2">Gas fixed</div>
                            <div class="text-light-blue my-2">General plumbing</div>
                        </div>
                        <div>with 1 Hour Plumbing</div>
                    </h1>
                </div>
                <div class="col-12">
                    <div class="select_service_text text-center fs-24 font-roboto">Select your service to get started:</div>
                </div>
                <div class="col-12 py-6 d-md-none"><?= renderImg('plumbing-guy.png', 'lib') ?></div>
                <div class="col-md-9 py-md-6">
                    <div class="choices row" id="service_choices">
                        <div class="col">
                            <div class="choice_card">
                                <div><?= renderImg('drains.png', 'icons') ?></div>
                                <div class="title">Drains</div>
                                <div class="input">
                                    <input type="radio" class="serviceSelector" value="drains" id="test1" name="serviceSelector" checked>
                                    <label for="test1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="choice_card">
                                <div><?= renderImg('hot-water.png', 'icons') ?></div>
                                <div class="title">Hot Water</div>
                                <div class="input">
                                    <input type="radio" class="serviceSelector" value="hot_water" id="test2" name="serviceSelector">
                                    <label for="test2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="choice_card">
                                <div><?= renderImg('gas.png', 'icons') ?></div>
                                <div class="title">Gas</div>
                                <div class="input">
                                    <input type="radio" class="serviceSelector" value="gas" id="test3" name="serviceSelector">
                                    <label for="test3"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="choice_card">
                                <div><?= renderImg('general-plumbing.png', 'icons') ?></div>
                                <div class="title">General Plumbing</div>
                                <div class="input">
                                    <input type="radio" class="serviceSelector" value="general_plumbing" id="test4" name="serviceSelector">
                                    <label for="test4"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="choice_card">
                                <div><?= renderImg('other.png', 'icons') ?></div>
                                <div class="title">Other</div>
                                <div class="input">
                                    <input type="radio" class="serviceSelector" value="other" id="test5" name="serviceSelector">
                                    <label for="test5"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center d-none d-md-block">
                    <?= renderImg('awards-banner.png', 'lib') ?>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="text-center pb-5 d-none d-md-block"><?= renderImg('animated-arrow.png', 'icons') ?></div>
<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <hr class="d-md-none" />
                <div class="text-center fs-18 pt-4 pb-5 text-uppercase text-primary font-dmsans fw-700 lh-1 d-md-none">on time or we pay you $100*</div>
                <div class="text-center fs-20 text-uppercase text-primary font-dmsans fw-700 lh-1 d-none d-md-block">Melbourne wide local and reliable plumbing services</div>
                <div id="service_title" class="text-center fw-700 text-dark-grey fs-64 lh-1">Issues with your drains?</div>
                <div class="service_image" id="service_image">
                    <?= renderImg('service_drains.jpg', 'lib') ?>
                </div>

                <div class="row gx-xxl-5 gy-4 gy-md-0">
                    <div class="col-lg-4">
                        <div class="service_card">
                            <?= renderImg('service_clock.png', 'icons') ?>
                            <div class="text-dark fs-32 fw-700 pt-4 pb-2">All major blockages</div>
                            <div class="font-roboto fs-18 text-tertiary">
                                Lorem ipsum dolor sit amet consecte turole adipiscing elit semper dalaracc lacus velolte facilisis volutpat est velitolm.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_card">
                            <?= renderImg('service_clock.png', 'icons') ?>
                            <div class="text-dark fs-32 fw-700 pt-4 pb-2">Same day fix </div>
                            <div class="font-roboto fs-18 text-tertiary">
                                Lorem ipsum dolor sit amet consecte turole adipiscing elit semper dalaracc lacus velolte facilisis volutpat est velitolm.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service_card">
                            <?= renderImg('service_clock.png', 'icons') ?>
                            <div class="text-dark fs-32 fw-700 pt-4 pb-2">Effective drain cleaning</div>
                            <div class="font-roboto fs-18 text-tertiary">
                                Lorem ipsum dolor sit amet consecte turole adipiscing elit semper dalaracc lacus velolte facilisis volutpat est velitolm.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-7 d-none d-md-block">
                    <a href="tel:<?= $phone_number ?>" class="service-call-btn btn btn-primary rounded-0 text-white py-3 px-4 px-xl-5 gap-3 d-inline-flex">
                        <div>
                            <div class="fs-20 fw-600 lh-0_8">24/7</div>
                            <div class="fs-12 fw-600 lh-0_8">service</div>
                        </div>
                        <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                        <div class="fs-27 fw-600"><?= $phone_number ?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customers pt-md-5 position-relative mt-xxl-5 overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <div class="row justify-content-between crow">
                    <div class="col-lg-5">
                        <h3 class="text-white fs-72 fw-700 lh-1 mb-5 d-none d-lg-block">4500+ loved their 1hr plumbing experience</h3>
                        <div class="cta card rounded-0 border-0 mb-4 mb-md-5 bg-transparent ">
                            <div class="card-body p-0 position-relative">
                                <span class="tag fw-700 fs-36 lh-1 bg-primary-dark text-white d-inline-block py-1 ms-4 ps-2 pe-3 position-relative"><?= date('Y') ?> Product Review Winner</span>
                            </div>
                        </div>
                        <h3 class="text-dark fs-72 fw-700 lh-1 text-center d-lg-none">4500+ loved their<br> 1hr plumbing experience</h3>
                        <div class="text-center d-lg-none pt-4 pb-5">
                            <?= renderImg("cpr2.png", 'lib') ?>

                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="fs-96 fw-700 lh-1">4.5</div>
                                        <div>
                                            <svg width="42" height="33" viewBox="0 0 42 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.2477 0.739624H41.2477L30.6506 32.7396H0.650635L11.2477 0.739624Z" fill="#1F6CF0" />
                                                <path d="M22.979 14.1572L20.7104 7.42618L18.4417 14.1572H11.6357L17.1826 18.6429L15.0024 25.5754L20.7104 21.2912L26.4183 25.5754L24.2381 18.6429L29.785 14.1572H22.979Z" fill="#FFF200" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fs-12 fw-800">Customer Rating</div>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-96 lh-1 fw-700 mb-0"><?= $reviewn ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto text-white d-none d-lg-block">
                        <div class="d-flex reviews h-100 cover">
                            <div class="me-2 left position-relative review">
                                <div class="position-relative z-1 p-4">
                                    <?= renderImg("cpr1.png", 'lib', 'mb-5') ?>
                                    <div class="ms-n4">
                                        <div class="d-flex align-items-center">
                                            <p class="fs-96 fw-700 lh-1 mb-0">4.5</p>
                                            <svg width="82" height="65" viewBox="0 0 82 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.194 0.7948H81.194L60 64.7948H0L21.194 0.7948Z" fill="#1F6CF0" />
                                                <path d="M44.6567 27.6299L40.1194 14.1679L35.5821 27.6299H21.9702L33.0639 36.6014L28.7035 50.4664L40.1194 41.898L51.5353 50.4664L47.1749 36.6014L58.2687 27.6299H44.6567Z" fill="#FFF200" />
                                            </svg>
                                        </div>
                                        <p class="fs-24 fw-600">Customer Rating</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right position-relative review">
                                <div class="position-relative z-1 p-4">
                                    <?= renderImg("cpr1.png", 'lib', 'mb-5') ?>
                                    <div class="ms-n4">
                                        <p class="fs-96 lh-1 fw-700 mb-0"><?= $reviewn ?></p>
                                        <p class="fs-24 fw-600">Client Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container-fluid px-0">
        <div class="slidert">
            <?php $testi = [
                [
                    'name' => 'Randy',
                    'heading' => 'Perfect plumbing job',
                    'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
                ],
                [
                    'name' => 'Phil',
                    'heading' => 'Gas Line replacement',
                    'content' => 'Alex K and his crew were on time, accurate and their attention to detail was strong. Wouldn’t hesitate to use Plumb a first again.<br>Albeit they’re not the cheapest, definitely trustworthy and you’ll know the job will be done to the highest quality.',
                ],
                [
                    'name' => 'Kevin',
                    'heading' => 'Excellent',
                    'content' => 'Dear Sir/Madam <br>Liam did a terrific job installing two cisterns and new pipes for the bathroom. He was cordial and polite on arrival and throughout the day, and I would not hesitate to recommend to friends, family and even enemies! Regards Satisfied Customer',
                ],
                [
                    'name' => 'Missy',
                    'heading' => 'Hot water system installed - Thanks Tai',
                    'content' => 'Tai finalised the installation of the new hot water system this morning. Clearly explained the duration of the work, professionally installed the system, and communicated with the team to follow up a few points to be followed up. Thanks!',
                ],
                [
                    'name' => 'Qball R.',
                    'heading' => 'Kitchen sink & water mains fixed quick. Thanks Blaine',
                    'content' => "After the first tradesman was not able to make it they sent out a second. He called to let us know what time he would be here and was spot on time. Blaine was very professional and quick having it all sorted in just over an hour. His attitude was great and I'd recommend him for anyone wanting the job done quickly and professionally.",
                ],
                [
                    'name' => 'Randy',
                    'heading' => 'Perfect plumbing job',
                    'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
                ],
            ];
            $n = 0;
            foreach ($testi as $key => $value) {
                $n++;
            ?>
                <div>
                    <div class="<?= ($n % 2 ? 'mt-md-5 pt-md-5' : '') ?>">
                        <div class="card-o card rounded-0 mx-2 ">
                            <div class="card-header bg-white p-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <?php
                                    $ti = dirname(dirname(__FILE__));
                                    if (file_exists($ti . "/assets/images/lib/t" . $n . ".png")) {
                                        echo renderImg("t$n.png", 'lib', 'me-2');
                                    } else {
                                    ?>
                                        <p class="mb-0 h3 me-2"><span class="badge rounded-circle bg-primary text-white"><?= $value['name'][0] ?></span></p>
                                    <?php
                                    }
                                    ?>
                                    <p class="mb-0 h5 text-dark"><?= $value['name'] ?></p>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="fw-700 fs-14 text-tertiary text-center">User Score</div>
                                <div class="d-flex justify-content-center pt-2 pb-4"><?= renderImg("tstars.png", "icons") ?></div>
                                <div class="text-dark fs-24 text-center mb-4 fw-700">“<?= $value['heading'] ?>”</div>
                                <div class="font-roboto text-tertiary"><?= $value['content'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<div class="deals_wrapper">
    <section class="deals">
        <div class="container">
            <div class="fs-96 fw-700 text-center pb-5 pb-md-6 lh-1">You won't find better deals!</div>
            <div class="row justify-content-center justify-content-xl-between gy-5 gy-xl-0 gx-xxl-8">
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-32 fw-700 lh-1">Blocked Drains</div>
                                        <div class="fs-86 fw-700 lh-1 text-primary">$77*</div>
                                        <div class="fs-22 fw-700 lh-1 pt-2">We do all types of drains</div>
                                    </div>
                                    <?= renderImg('blocked-pipe.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-600 rounded-15 text-white text-center">Unblock your drains today!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-32 fw-700 text-uppercase lh-1">
                                            <span class="text-primary">Easily</span> Save
                                        </div>
                                        <div class="fs-86 fw-700 lh-1 text-primary">$100</div>
                                        <div class="fs-32 fw-700 lh-1 pt-2">On All New<br> Water Heaters*</div>
                                    </div>
                                    <?= renderImg('metro-heaters.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-600 rounded-15 text-white text-center">All Water Heater Brands!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-86 fw-700 text-uppercase text-primary lh-1">Zero</div>
                                        <div class="fs-32 fw-700 lh-1 pt-2">Interest Payment<br> Plans Available<br> (no interest ever!)</div>
                                    </div>
                                    <?= renderImg('humm.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-600 rounded-15 text-white text-center">0% Interest Payment Plans</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container-fluid">
    <footer>
        <div class="container pt-5 pt-md-7 pt-lg-9 pb-2 text-center">
            <div class="row justify-content-center">
                <div class="col-9 col-md-6 col-lg-5 col-xl-12">
                    <a href="./" class="text-center">
                        <?= renderImg("footer-hero-logo.png", "logo") ?>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-xl-10 text-center heading fs-72 fw-700 lh-1 d-none d-md-block">We'll be there in 1 hour or we pay you $100*</div>
                <div class="col-xl-10 text-center heading fs-72 fw-700 lh-1 d-md-none">Experience First Class Plumbing Services
                    with PlumbFirst Melbourne</div>
            </div>
            <div class="text-center py-4 d-none d-md-block">
                <a href="tel:<?= $phone_number ?>" class="btn btn-dark text-white rounded-0 px-4 px-xl-5 gap-3 d-inline-flex">
                    <div><?= renderImg('phone_btn.png', 'icons', 'h-100') ?></div>
                    <div>
                        <div class="fs-24 fw-600"><?= $phone_number ?></div>
                        <div class="text-start fs-18 font-roboto">Available 24/7</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="accreditation">
            <div class="container">
                <div class="row align-items-center gy-5 gy-xl-0">
                    <div class="col-xl-6 heading fs-36 fw-700 text-center text-xl-start lh-1">
                        Accredited &amp; Fully Licensed Plumbers
                    </div>
                    <div class="col">
                        <div class="row justify-content-between align-items-center" id="license_slider">
                            <div class="col-auto"><?= renderImg('ausstandard.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('strata.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('best-handyman.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('ebix.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('master-plumber.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('seniors-card.png', 'logo') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-3 pb-4">
            <div class="row justify-content-between align-items-center gy-3 gy-xl-0">
                <div class="col-auto col-lg-12 col-xl-auto">
                    <div class="row justify-content-center align-items-center gy-3 gy-md-0">
                        <div class="col-5 col-md-auto">
                            <a href="./" class="text-center">
                                <?= renderImg("footer-sub-logo.png", "logo") ?>
                            </a>
                        </div>
                        <div class="col-12 col-xl-auto tagline fs-24 fw-600 text-center">On-time Melbourne Plumbers or We Pay You $100!*</div>
                    </div>
                </div>

                <div class="col-xl-auto font-roboto d-lg-none">
                    <div class="row align-items-center justify-content-between justify-content-md-center">
                        <div class="col-auto d-flex gap-2 align-items-center">
                            <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.02293 16.5031L3 9.50305H0V6.50305H3V4.50305C3 1.80385 4.67151 0.503052 7.07938 0.503052C8.23277 0.503052 9.22406 0.588922 9.51294 0.627302V3.44812L7.84296 3.44888C6.53343 3.44888 6.27987 4.07115 6.27987 4.98429V6.50305H10L9 9.50305H6.27986V16.5031H3.02293Z" fill="#FFF200" />
                            </svg>
                            @plumbfirst
                        </div>
                        <div class="col-auto d-flex gap-2 align-items-center">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8 3.30305C15.6 2.00305 15 1.10305 13.6 0.903052C11.4 0.503052 8 0.503052 8 0.503052C8 0.503052 4.6 0.503052 2.4 0.903052C1 1.10305 0.3 2.00305 0.2 3.30305C0 4.60305 0 6.50305 0 6.50305C0 6.50305 0 8.40305 0.2 9.70305C0.4 11.0031 1 11.9031 2.4 12.1031C4.6 12.5031 8 12.5031 8 12.5031C8 12.5031 11.4 12.5031 13.6 12.1031C15 11.8031 15.6 11.0031 15.8 9.70305C16 8.40305 16 6.50305 16 6.50305C16 6.50305 16 4.60305 15.8 3.30305ZM6 9.50305V3.50305L11 6.50305L6 9.50305Z" fill="#FFF200" />
                            </svg>
                            @plumberfirstmelbourne
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-between align-items-center pt-5 pt-xl-4 gy-3 gy-md-0">
                <div class="col-auto font-roboto text-light-blue copyright">
                    <span>Copyright <?= date('Y') ?></span>
                    <span class="text-secondary px-2 px-xl-5">/</span>
                    <span><?= $site ?></span>
                    <span class="text-secondary px-2 px-xl-5">/</span>
                    <span>All Rights Reserved</span>
                </div>
                <div class="col-auto">
                    <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                        <?= renderImg("aiims.png", "logo") ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>