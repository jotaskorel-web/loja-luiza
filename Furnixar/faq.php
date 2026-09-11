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
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">FAQs</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li class="text-primary">FAQS</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Faq Area Start -->
<div class="s-py-100">
    <div class="container-fluid max-w-[1720px]">
        <div class="faq-wrapper grid lg:grid-cols-2 gap-12 2xl:gap-20">
            
            <!-- faqs code  -->
            <?php
                include __DIR__ . "/Base/Components/Pages/faqs.php";
            ?>

        </div>
    </div>
</div>
<!-- Faq Area End -->
   
<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>