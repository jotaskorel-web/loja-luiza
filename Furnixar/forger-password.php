<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav';
$fpage = 'foot6';

ob_start();
?>

<div class="flex">
    <div class="w-1/2 hidden md:block lg:flex-1">
        <img class="h-full object-cover" src="<?php echo $static_url; ?>/img/bg/forget-pass.jpg" alt="forget password">
    </div>
    <div class="w-full md:w-1/2 lg:max-w-lg xl:max-w-3xl lg:w-full py-16 px-[20px] sm:px-8 lg:p-16 xl:p-24 relative z-10 flex items-center overflow-hidden">
        <div class="mx-auto md:mx-0 max-w-md">
            <h2 class="leading-none text-4xl font-bold" data-aos="fade-up">Esqueci a senha</h2>
            <p class="text-lg mt-[15px]" data-aos="fade-up" data-aos-delay="100">Compre seus produtos exclusivos na Loja Luiza</p>
            <div class="mt-7" data-aos="fade-up" data-aos-delay="200">
                <label class="text-base sm:text-lg font-medium leading-none mb-2.5 block dark:text-white">E-mail</label>
                <input class="w-full h-12 md:h-14 bg-white dark:bg-transparent border border-bdr-clr focus:border-primary p-4 outline-none duration-300" type="email" placeholder="Digite seu e-mail">
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="btn btn-theme-solid mt-[15px]" data-text="Enviar">
                    <span>Enviar</span>
                </a>
            </div>
            <p class="text-lg mt-[15px]" data-aos="fade-up" data-aos-delay="400">
                Observação: enviaremos o link de redefinição de senha para o seu e-mail
            </p>
        </div>
    </div>
</div>
  
<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>