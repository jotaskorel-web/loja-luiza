<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path

ob_start();
?>

<!-- Dark Mood -->
<label class="switcher z-[999999] w-12 sm:w-[60px] h-12 sm:h-[60px] fixed bottom-[10px] md:bottom-5 left-[10px] md:left-5 rounded-xl flex items-center justify-center cursor-pointer">
    <input class="hidden" type="checkbox">
        <img class="moon" src="<?php echo $static_url; ?>/img/icon/simple-sun.svg" alt="moon">
        <img class="sun" src="<?php echo $static_url; ?>/img/icon/simple-light.svg" alt="sun">
</label>

<!-- Coming Soom Area Start -->
<div class="pt-8 sm:pt-12 relative z-10">
    <img class="absolute top-0 left-[5%] -z-10 w-[12%]" src="<?php echo $static_url; ?>/img/thumb/coming-soon.png" alt="light">
    <img class="absolute bottom-0 right-0 w-1/4 -z-10" src="<?php echo $static_url; ?>/img/shape/coming-soon-shape.png" alt="shape">
    <div class="container">
        <div class="text-center">
            <a class="cursor-pointer inline-block" href="index.php">
                <span class="font-bold text-2xl sm:text-[28px] tracking-tight whitespace-nowrap dark:text-white text-title">Loja Luiza</span>  
            </a>
        </div>
        <div class="text-center py-16 sm:py-24 lg:py-[150px]">
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl leading-none font-bold" data-aos="fade-up">We are Coming Soon</h1>
            <p class="max-w-[503px] mx-auto mt-3 sm:mt-6 text-base sm:text-lg" data-aos="fade-up" data-aos-delay="100">Our website is under construction.
            We'll be here soon with our new awesome site.</p>
            <div class="countdown-clock flex gap-8 md:gap-12 justify-center items-center mt-10 sm:mt-12" data-aos="fade-up" data-aos-delay="200">
                <div class="countdown-item">
                    <div class="ci-inner font-[300] text-title dark:text-white leading-none text-4xl md:text-5xl">
                        <div class="clock-days ci-value"></div>
                    </div>
                    <p class="text-sm sm:text-lg md:text-xl leading-none mt-[10px]">Days</p>
                </div>
                <div class="hidden sm:block">
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.33261" y1="40.0015" x2="24.2798" y2="0.255847" stroke="#BB976D"/>
                    </svg>
                </div>
                <div class="countdown-item">
                    <div class="ci-inner font-[300] text-title dark:text-white leading-none text-4xl md:text-5xl">
                        <div class="clock-hours ci-value"></div>
                    </div>
                    <p class="text-sm sm:text-lg md:text-xl leading-none mt-[10px]">Hours</p>
                </div>
                <div class="hidden sm:block">
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.33261" y1="40.0015" x2="24.2798" y2="0.255847" stroke="#BB976D"/>
                    </svg>
                </div>
                <div class="countdown-item">
                    <div class="ci-inner font-[300] text-title dark:text-white leading-none text-4xl md:text-5xl">
                        <div class="clock-minutes ci-value"></div>
                    </div>
                    <p class="text-sm sm:text-lg md:text-xl leading-none mt-[10px]">Minutes</p>
                </div>
                <div class="hidden sm:block">
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.33261" y1="40.0015" x2="24.2798" y2="0.255847" stroke="#BB976D"/>
                    </svg>
                </div>
                <div class="countdown-item">
                    <div class="ci-inner font-[300] text-title dark:text-white leading-none text-4xl md:text-5xl">
                        <div class="clock-seconds ci-value"></div>
                    </div>
                    <p class="texttext-sm sm:text-lg md:text-xl leading-none mt-[10px]">Seconds</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Coming Soom Area End -->

<!-- footer7 code  -->
<?php
    include __DIR__ . "/Base/style/footer7.php";
?>

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/no-header.php';
?>