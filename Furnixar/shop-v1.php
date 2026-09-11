<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav';
$fpage = 'foot';

ob_start();
?>

<!-- Banner Start -->
<div class="flex items-center gap-4 flex-wrap bg-overlay p-14 sm:p-16 before:bg-title before:bg-opacity-70" style="background-image:url('<?php echo $static_url; ?>/img/shortcode/breadcumb.jpg');">
    <div class="text-center w-full">
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Loja</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li class="text-primary">Loja</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Shop Start -->
<div class="s-py-100">
    <div class="container-fluid">
        <!-- Shop Header -->
        <div class="flex items-start justify-between gap-8 max-w-[1720px] mx-auto flex-col lg:flex-row border-b border-bdr-clr dark:border-bdr-clr-drk pb-8 md:pb-[50px]" >
            <div>
                <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Escolher categoria</h4>
                <div class="flex flex-wrap gap-[10px] md:gap-[15px]">
                    <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Sofá e cadeira"><span>Sofá e cadeira</span></a>
                    <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Interior completo"><span>Interior completo</span></a>
                    <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Luminária e vaso"><span>Luminária e vaso</span></a>
                    <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Mesa"><span>Mesa</span></a>
                    <a class="btn btn-theme-outline btn-sm shop1-button" href="product-category.php" data-text="Design em madeira"><span>Design em madeira</span></a>
                </div>
            </div>
            <div class="max-w-[562px] w-full grid sm:grid-cols-2 gap-8 md:gap-12">
                <div>
                    <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Faixa de preço</h4>
                    <div class="grid grid-cols-2 gap-[15px]">
                        <div class="py-[10px] px-5 border border-title dark:border-white-light flex items-center justify-center gap-[5px]">
                            <span class="text-title dark:text-white font-medium leading-none whitespace-nowrap">Mín. R$</span>
                            <input class="w-12 appearance-none bg-transparent text-title dark:text-white font-medium leading-none placeholder:text-title dark:placeholder:text-white outline-none" type="number" placeholder="0" value="0">
                        </div>
                        <div class="py-[10px] px-5 border border-title dark:border-white-light flex items-center justify-center gap-[5px]">
                            <span class="text-title dark:text-white font-medium leading-none whitespace-nowrap">Máx. R$</span>
                            <input class="w-12 appearance-none bg-transparent text-title dark:text-white font-medium leading-none placeholder:text-title dark:placeholder:text-white outline-none" type="number" placeholder="100" value="100">
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Escolher marca</h4>
                    <select class="outline-select small-select">
                        <option value="1">Navana Furniture</option>
                        <option value="2">RFL Furniture</option>
                        <option value="2">Gazi Furniture</option>
                        <option value="2">Móveis de plástico</option>
                        <option value="2">Móveis de luxo</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="max-w-[1720px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-8 pt-8 md:pt-[50px]" data-aos="fade-up" data-aos-delay="200">
            
            <!-- shops-v1 code  -->
            <?php
                include __DIR__ . "/Base/Components/Shop/shops-v1.php";
            ?>

        </div>
        <div class="text-center mt-7 md:mt-12">
            <a href="shop-v1.php" class="btn btn-outline" data-text="Carregar mais">
                <span>Carregar mais</span>
            </a>
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