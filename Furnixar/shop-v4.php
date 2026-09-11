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

<!-- Shop Area Start -->
<div class="s-py-100" data-aos="fade-up">
    <div class="container-fluid">
        <div class="flex items-start justify-between gap-8 max-w-[1720px] mx-auto flex-col-reverse lg:flex-row pb-8 md:pb-[50px]">
            <!-- Escolher categoria -->
            <div>
                <h4 class="font-medium leading-none text-xl sm:text-2xl mb-5 sm:mb-6">Escolher categoria</h4>
                <div class="shop-button flex gap-[15px] flex-wrap">
                    <button class="active btn btn-sm btn-theme-outline" data-filter="*" data-text="Sofá e cadeira">
                        <span>Sofá e cadeira</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Interior" data-text="Interior completo">
                        <span>Interior completo</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Vase" data-text="Luminária e vaso">
                        <span>Luminária e vaso</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Table" data-text="Mesa">
                        <span>Mesa</span>
                    </button>
                    <button class="btn btn-sm btn-theme-outline" data-filter=".Design" data-text="Design artístico">
                        <span>Design artístico</span>
                    </button>
                </div>
            </div>
            <div class="max-w-[562px] w-full grid sm:grid-cols-2 gap-8 md:gap-12">
                <!-- Faixa de preço -->
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
                <!-- Escolher marca -->
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
        <!-- Product -->
        <div class="shop-isotope max-w-[1722px] mx-auto" data-aos="fade-up" data-aos-delay="300">
            <div class="shop-sizer"></div>
            
                <!-- shops-v4 code  -->
                <?php
                    include __DIR__ . "/Base/Components/Shop/shops-v4.php";
                ?>

        </div>
        <div class="text-center mt-7 md:mt-12">
            <a href="shop-v1.php" class="btn btn-outline" data-text="Carregar mais">
                <span>Carregar mais</span>
            </a>
        </div>
    </div>
</div>
<!-- Shop Area End -->

<!-- popup code  -->
<?php
    include __DIR__ . "/Base/Components/Home/popup.php";
?>
    
<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>