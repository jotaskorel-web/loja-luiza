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
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Editar conta</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li class="text-primary">Conta</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Meu perfil Start -->
<div class="s-py-100" data-aos="fade-up">
    <div class="container-fluid">
        <!-- portfolio Navs -->
        <div class="max-w-[1720px] mx-auto flex items-start gap-8 md:gap-12 2xl:gap-24 flex-col md:flex-row my-profile-navtab">
            <div class="w-full md:w-[200px] lg:w-[300px] flex-none">
                <ul class="divide-y dark:divide-paragraph text-title dark:text-white text-base sm:text-lg lg:text-xl flex flex-col justify-center leading-none">
                    <li class="pb-3 lg:pb-6 pl-6 lg:pl-12">
                        <a class="duration-300 hover:text-primary" href="my-account.php">Minha conta</a>
                    </li>
                    <li class="active text-primary py-3 lg:py-6 pl-6 lg:pl-12">
                        <a class="duration-300 hover:text-primary" href="edit-account.php">Editar conta</a>
                    </li>
                    <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                        <a class="duration-300 hover:text-primary" href="order-history.php">Histórico de pedidos</a>
                    </li>
                    <li class="py-3 lg:py-6 pl-6 lg:pl-12">
                        <a class="duration-300 hover:text-primary" href="wishlist.php">Lista de desejos</a>
                    </li>
                    <li class="pt-3 lg:pt-6 pl-6 lg:pl-12">
                        <a class="duration-300 hover:text-primary" href="login.php">Sair</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-auto md:flex-1 overflow-auto">
                <!-- Profile Content -->
                <div class="w-full max-w-[951px] bg-[#F8F8F9] dark:bg-dark-secondary p-5 sm:p-8 lg:p-[50px]">
                    <div class="flex items-start flex-col lg:flex-row gap-5 sm:gap-6">
                        <div class="grid gap-5 sm:gap-6 w-full lg:w-1/2">
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Nome completo</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Digite seu nome completo">
                            </div>
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Cargo</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Digite seu cargo">
                            </div>
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Telefone</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300 appearance-none" type="number" placeholder="Digite seu telefone">
                            </div>
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">E-mail</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="email" placeholder="Digite seu e-mail">
                            </div>
                        </div>
                        <div class="grid gap-5 sm:gap-6 w-full lg:w-1/2">
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Localização</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="Digite sua localização">
                            </div>
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Bio</label>
                                <textarea class="w-full h-28 md:h-[168px] bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" name="Message" placeholder="Escreva sua bio . . ."></textarea>
                            </div>
                            <div>
                                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">Web / redes sociais</label>
                                <input class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" type="text" placeholder="www.facebook.com/johndoe">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-8 md:mt-12">
                        <button class="btn btn-solid" data-text="Salvar alterações">
                            <span>Salvar alterações</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Meu perfil End -->
    
<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>