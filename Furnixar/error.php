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
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Página de erro</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li class="text-primary">Erro</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Error Area Start -->
<div class="s-py-100 overflow-hidden">
    <div class="container">
        <div class="flex items-center justify-center gap-5">
            <h2 class="text-6xl sm:text-[100px] md:text-[150px] font-semibold leading-none" data-aos="fade-right">4</h2>
            <img class="w-36 sm:w-44 md:w-auto" src="<?php echo $static_url; ?>/img/thumb/error.png" alt="error" data-aos="zoom-in">
            <h2 class="text-6xl sm:text-[100px] md:text-[150px] font-semibold leading-none" data-aos="fade-left">4</h2>
        </div>
        <div class="max-w-[603px] mx-auto text-center mt-8 md:mt-12">
            <h2 data-aos="fade-up" class="text-4xl font-bold">Ops! Página não encontrada</h2>
            <p class="mt-4 md:mt-6" data-aos="fade-up">Desculpe o inconveniente. Volte para a página inicial ou explore cadeiras, decoração e muito mais.</p>
            <div data-aos="fade-up" data-aos-delay="100">
                <a class="btn btn-outline mt-4 md:mt-6" href="index.php" data-text="Voltar ao início">
                    <span>Voltar ao início</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Error Area End -->

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>