<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav';
$fpage = 'foot6';

ob_start();
?>

<!-- Banner Start -->
<div class="flex items-center gap-4 flex-wrap bg-overlay p-14 sm:p-16 before:bg-title before:bg-opacity-70" style="background-image:url('<?php echo $static_url; ?>/img/shortcode/breadcumb.jpg');">
    <div class="text-center w-full">
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Decoração de ambientes</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li><a href="shop-v1.php">Loja</a></li>
            <li>/</li>
            <li class="text-primary">Decoração de ambientes</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Shop Start -->
<div class="s-py-100" >
    <div class="container-fluid">
        <!-- Shopping Card -->
        <div data-aos="fade-up" data-aos-delay="200">
            <div class="max-w-[1720px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                
                <!-- room-interior code  -->
                <?php
                    include __DIR__ . "/Base/Components/Shop/room-interior.php";
                ?>

            </div>
            <!-- Paginação -->
            <div class="mt-10 md:mt-12 flex items-center justify-center gap-[10px]">
                <a href="#" class="text-title dark:text-white text-xl"><span class="lnr lnr-arrow-left"></span></a>         
                <a href="#" class="w-8 sm:w-10 h-8 sm:h-10 bg-title bg-opacity-5 flex items-center justify-center leading-none text-base sm:text-lg font-medium text-title transition-all duration-300 hover:bg-opacity-100 hover:text-white dark:bg-white dark:bg-opacity-5 dark:text-white dark:hover:bg-opacity-100 dark:hover:text-title">01</a>        
                <a href="#" class="w-8 sm:w-10 h-8 sm:h-10 bg-title bg-opacity-5 flex items-center justify-center leading-none text-base sm:text-lg font-medium text-title transition-all duration-300 hover:bg-opacity-100 hover:text-white dark:bg-white dark:bg-opacity-5 dark:text-white dark:hover:bg-opacity-100 dark:hover:text-title">02</a>        
                <a href="#" class="text-title dark:text-white text-3xl sm:text-4xl transform">...</a>          
                <a href="#" class="w-8 sm:w-10 h-8 sm:h-10 bg-title bg-opacity-5 flex items-center justify-center leading-none text-base sm:text-lg font-medium text-title transition-all duration-300 hover:bg-opacity-100 hover:text-white dark:bg-white dark:bg-opacity-5 dark:text-white dark:hover:bg-opacity-100 dark:hover:text-title">09</a>        
                <a href="#" class="w-8 sm:w-10 h-8 sm:h-10 bg-title bg-opacity-5 flex items-center justify-center leading-none text-base sm:text-lg font-medium text-title transition-all duration-300 hover:bg-opacity-100 hover:text-white dark:bg-white dark:bg-opacity-5 dark:text-white dark:hover:bg-opacity-100 dark:hover:text-title">10</a>        
                        
                <a href="#" class="text-title dark:text-white text-xl"><span class="lnr lnr-arrow-right"></span></a>         
            </div>
        </div>
    </div>
</div>
<!-- Shop End -->

<!-- popup code  -->
<?php
    include __DIR__ . "/Base/Components/Home/popup.php";
?>

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>