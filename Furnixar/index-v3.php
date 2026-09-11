<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav2';
$fpage = 'foot2';

ob_start();
?>

<!-- Banner Area Start -->
<div class="home-v3-banner-slider owl-carousel pb-12 lg:pb-0" data-carousel-dots="true" data-carousel-items="1" data-carousel-margin="0">
    <!-- Single Banner Slide -->
    <div class="lg:flex items-center gap-8 xl:gap-16 2xl:gap-24">
        <div class="lg:w-[55%] relative before:absolute before:w-1/2 before:h-full before:top-0 before:right-0 slider-gradient-overlay crsl-slider-thumb max-h-[500px] lg:max-h-full before:hidden lg:before:block">
            <img class="w-full" src="<?php echo $static_url; ?>/img/shortcode/carousel/carousel-04.jpg" alt="banner-slider">
        </div>
        <div class="lg:w-[45%] lg:pr-5">
            <div class="lg:max-w-[617px] w-full mt-8 xl:mt-0 crsl-slider-content px-5 lg:px-0">
                <h4 class="leading-none font-medium dark:text-white text-2xl">Conforto e estilo para cada cômodo</h4>
                <h2 class="leading-none text-4xl sm:text-5xl xl:text-6xl 2xl:text-7xl font-bold mt-6 dark:text-white">Garantir <span class="text-secondary">25%</span> Off</h2>
                <p class="mt-4 md:mt-5 dark:text-white-light">Create a home that reflects your unique style with our premium furniture collection. Each piece is thoughtfully designed for elegance, functionality, and lasting comfort, making your space truly unforgettable.</p>
                <div class="button">
                    <a class="btn btn-outline mt-4 md:mt-6" href="shop-v1.php" data-text="Comprar agora"><span>Comprar agora</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Banner Slide -->
    <div class="lg:flex items-center gap-8 xl:gap-16 2xl:gap-24">
        <div class="lg:w-[55%] relative before:absolute before:w-1/2 before:h-full before:top-0 before:right-0 slider-gradient-overlay crsl-slider-thumb max-h-[500px] lg:max-h-full before:hidden lg:before:block">
            <img class="w-full" src="<?php echo $static_url; ?>/img/shortcode/carousel/carousel-05.jpg" alt="banner-slider">
        </div>
        <div class="lg:w-[45%] lg:pr-5">
            <div class="lg:max-w-[617px] w-full mt-8 xl:mt-0 crsl-slider-content px-5 lg:px-0">
                <h4 class="leading-none font-medium dark:text-white text-2xl">Móveis elegantes para o dia a dia moderno</h4>
                <h2 class="leading-none text-4xl sm:text-5xl xl:text-6xl 2xl:text-7xl font-bold mt-6 dark:text-white">Garantir <span class="text-secondary">35%</span> Off</h2>
                <p class="mt-4 md:mt-5 dark:text-white-light">Discover sleek and modern designs that redefine sophistication and functionality. From minimalist styles to bold statement pieces, our collection is crafted to elevate your living space effortlessly.</p>
                <div class="button">
                    <a class="btn btn-outline mt-4 md:mt-6" href="shop-v1.php" data-text="Comprar agora"><span>Comprar agora</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Banner Slide -->
    <div class="lg:flex items-center gap-8 xl:gap-16 2xl:gap-24">
        <div class="lg:w-[55%] relative before:absolute before:w-1/2 before:h-full before:top-0 before:right-0 slider-gradient-overlay crsl-slider-thumb max-h-[500px] lg:max-h-full before:hidden lg:before:block">
            <img class="w-full" src="<?php echo $static_url; ?>/img/shortcode/carousel/carousel-06.jpg" alt="banner-slider">
        </div>
        <div class="lg:w-[45%] lg:pr-5">
            <div class="lg:max-w-[617px] w-full mt-8 xl:mt-0 crsl-slider-content px-5 lg:px-0">
                <h4 class="leading-none font-medium dark:text-white text-2xl">Conforto e estilo para cada cômodo</h4>
                <h2 class="leading-none text-4xl sm:text-5xl xl:text-6xl 2xl:text-7xl font-bold mt-6 dark:text-white">Garantir <span class="text-secondary">55%</span> Off</h2>
                <p class="mt-4 md:mt-5 dark:text-white-light">  De sofás aconchegantes e camas sofisticadas a conjuntos de jantar elegantes, nossos móveis unem conforto e design. Transforme cada canto da sua casa em um refúgio de estilo e bem-estar.</p>
                <div class="button">
                    <a class="btn btn-outline mt-4 md:mt-6" href="shop-v1.php" data-text="Comprar agora"><span>Comprar agora</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Service Area Start -->
<div class="s-py-100 bg-[#F5F5F5] dark:bg-dark-secondary relative z-10 overflow-hidden">
    <div class="absolute -z-[1] right-0 bottom-0 hidden 2xl:block w-[28%]" data-aos="fade-left">
        <img class="w-full" src="<?php echo $static_url; ?>/img/home-v3/service.png" alt="service">
    </div>
    <div class="container-fluid max-w-[1720px] mx-auto">
        <div class="max-w-[1326px] grid sm:grid-cols-2 lg:grid-cols-4 gap-[30px] xl:gap-12">
            
            <!-- services1 code  -->
            <?php
                include __DIR__ . "/Base/Components/Home/services1.php";
            ?>

        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- New Product Area Start Here -->
<div class="s-py-100-50">
    <div class="container-fluid max-w-[1720px] mx-auto">
        <!-- Section Title -->
        <div class="flex justify-center items-center mb-[40px] md:mb-12" data-aos="fade-up">
            <div>
                <span class="text-secondary font-normal text-6xl sm:text-7xl font-secondary block -ml-5 -mb-3 sm:-mb-[30px] leading-normal sm:leading-normal">Novo</span>
                <h6 class="font-normal leading-none tracking-[.5em] sm:tracking-[1em] uppercase text-lg">PRODUTOS</h6>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-8" data-aos="fade-up" data-aos-delay="100">
            
            <!-- new-products1 code  -->
            <?php
                include __DIR__ . "/Base/Components/Home/new-products1.php";
            ?>

        </div>
        <div class="text-center mt-7 md:mt-12" data-aos="fade-up" data-aos-delay="200">
            <a href="shop-v1.php" class="btn btn-outline" data-text="Ver todos os produtos">
                <span>Ver todos os produtos</span>
            </a>
        </div>
    </div>
</div>
<!-- New Product Area Start End -->

<!-- Product Area Start -->
<div class="s-py-50" data-aos="fade-up">
    <div class="container-fluid max-w-[1720px] mx-auto">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Prodcut -->
            <div class="relative">
                <img class="w-full object-cover" src="<?php echo $static_url; ?>/img/home-v3/pdct-01.jpg" alt="product">
                <div class="absolute w-[90%] h-[90%] flex items-center justify-center top-[95%] left-[95%] transform -translate-x-1/2 -translate-y-1/2 z-10">
                    <div class="bg-white dark:bg-title bg-opacity-90 dark:bg-opacity-90 p-5 sm:p-8 xl:p-12 flex items-start flex-col">
                        <h4 class="font-normal leading-none text-2xl">Até <span class="text-secondary">20% off</span> todos os móveis da loja</h4>
                        <h2 class="text-3xl md:text-4xl xl:text-5xl leading-none mt-[15px] font-bold">Casa e escritório</h2>
                        <a href="shop-v2.php" class="btn btn-outline btn-sm mt-4 sm:mt-6" data-text="Comprar agora">
                            <span>Comprar agora</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Prodcut -->
            <div class="relative">
                <img class="w-full object-cover" src="<?php echo $static_url; ?>/img/home-v3/pdct-02.jpg" alt="product">
                <div class="absolute w-[90%] h-[90%] flex items-center justify-center top-[95%] left-[95%] transform -translate-x-1/2 -translate-y-1/2 z-10">
                    <div class="bg-white dark:bg-title bg-opacity-90 dark:bg-opacity-90 p-5 sm:p-8 xl:p-12 flex items-start flex-col">
                        <h4 class="font-normal leading-none text-2xl">Até <span class="text-secondary">35% off</span> todos os itens de interior</h4>
                        <h2 class="text-3xl md:text-4xl xl:text-5xl leading-none mt-[15px] font-bold">Ambiente completo</h2>
                        <a href="shop-v1.php" class="btn btn-outline btn-sm mt-4 sm:mt-6" data-text="Comprar agora">
                            <span>Comprar agora</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Blog Area Start -->
<div class="s-py-50-100">
    <div class="container-fluid max-w-[1720px] mx-auto">
        <!-- Section Title -->
        <div class="flex justify-center items-center mb-[40px] md:mb-12" data-aos="fade-up">
            <div>
                <span class="text-secondary font-normal text-6xl sm:text-7xl font-secondary block -ml-5 leading-normal sm:leading-normal">Blog</span>
                <h6 class="font-normal leading-none tracking-[.5em] sm:tracking-[1em] uppercase text-lg">ÚLTIMAS DO BLOG</h6>
            </div>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-7 md:gap-9" data-aos="fade-up" data-aos-delay="100">
            
            <!-- blog2 code  -->
            <?php
                include __DIR__ . "/Base/Components/Home/blog2.php";
            ?>

        </div>
    </div>
</div>
<!-- Blog Area End -->

<!-- Partner Area Start -->
<div class="bg-title dark:bg-dark-secondary py-9 md:py-12">
    <div class="container-fluid max-w-[1720px] mx-auto">
        <div class="2xl:flex items-center gap-10">
            <div class="max-w-[273px] w-full hidden 2xl:block">
                <h4 class="text-white leading-none text-xl md:text-2xl font-bold">Marcas em destaque</h4>
                <p class="text-white mt-[10px]">Descubra as melhores coleções de móveis selecionados. </p> 
            </div>
            <div class="w-[2px] h-12 bg-primary relative hidden 2xl:block"></div>
            <div class="2xl:max-w-[1340px] w-full relative">
                
                <!-- trusted-partner2 code  -->
                <?php
                    include __DIR__ . "/Base/Components/Home/trusted-partner2.php";
                ?>

                <div class="md:absolute md:top-2/4 md:right-0 transform md:-translate-y-2/4 mt-6 md:mt-0 hidden">
                    <div class="flex gap-4">
                        <button class="icon ptnrSlider01_prev w-9 h-9 border border-white flex items-center justify-center text-white">
                            <span class="lnr lnr-arrow-left"></span>
                        </button>
                        <button class="icon ptnrSlider01_next w-9 h-9 border border-white flex items-center justify-center text-white">
                            <span class="lnr lnr-arrow-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Area End -->

<!-- popup code  -->
<?php
    include __DIR__ . "/Base/Components/Home/popup.php";
?>

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>