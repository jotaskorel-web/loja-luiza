<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav';
$fpage = 'foot6';

ob_start();
?>

<!-- Obrigado Area Start -->
<div class="py-16 sm:py-24">
    <div class="container">
        <div class="max-w-[710px] mx-auto text-center p-7 sm:p-10 lg:p-12">
            <div class="div">
                <img src="<?php echo $static_url; ?>/img/thank-you.png" alt="thank-you">
            </div>
            <h3 class="leading-[1.2] mt-4 md:mt-6 text-2xl md:text-[32px] font-bold text-title dark:text-white">
            Por comprar na Loja Luiza
            </h3>
            <p class="mt-3 text-base sm:text-lg text-paragraph dark:text-white">
                Confira seu e-mail para baixar a fatura. Ou <a href="index.php" class="text-primary underline">Clique aqui </a>
            </p>
            <a href="index.php" class='btn btn-solid mt-4 md:mt-6' data-text="Voltar ao início">
                <span>Voltar ao início</span>
            </a>
        </div>
    </div>
</div>
<!-- Obrigado Area End -->

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>