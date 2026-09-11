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
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center text-2xl">Finalizar compra</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4 flex-wrap">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li class="text-primary">Finalizar compra</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Finalizar compra Area Start -->
<div class="s-py-100">
    <div class="container">
    <div class="max-w-[1220px] mx-auto grid lg:grid-cols-2 gap-[30px] lg:gap-[70px]">
        <div class="bg-[#FAFAFA] dark:bg-dark-secondary p-[30px] md:p-[40px] lg:p-[50px] border border-[#17243026] border-opacity-15 rounded-xl" data-aos="fade-up">
            
            <p class='mb-5 w-full bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300 whitespace-normal'>Está sem o código do cupom? 
            <button class='ml-1 add-coupon-code underline text-[#209A60]'> Clique aqui para adicionar</button>
            </p>
            
            <div class="coupon-wrapper gap-3 flex-wrap mb-[30px] hidden">
                <input
                    class="max-w-[220px] w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                    type="text"
                    placeholder="Código do cupom"
                >
                <a href="#" class="btn btn-sm-px btn-theme-solid " data-text="Aplicar cupom">
                    <span>Aplicar cupom</span>
                </a>
            </div>

            <script>
                const addCouponCode = document.querySelector('.add-coupon-code')
                const couponWrapper = document.querySelector('.coupon-wrapper')
                addCouponCode.addEventListener('click', () => {
                    couponWrapper.classList.toggle('hidden');
                    couponWrapper.classList.toggle('flex');
                })
            </script>
            <h4 class="font-semibold leading-none text-xl md:text-2xl mb-6 md:mb-[30px]">
                Informações de cobrança
            </h4>
            <div class="grid gap-5 md:gap-6">
                <div>
                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                        Nome completo
                    </label>
                    <input
                        class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                        type="text"
                        placeholder="Digite seu nome completo"
                    >
                </div>
                <div>
                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                        E-mail
                    </label>
                    <input
                        class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                        type="number"
                        placeholder="Digite seu e-mail"
                    >
                </div>
                <div>
                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                        Telefone
                    </label>
                    <input
                        class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                        type="number"
                        placeholder="Digite seu telefone"
                    >
                </div>
                <div class="grid md:grid-cols-2 gap-5 md:gap-6">
                <div>
                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                    Cidade
                    </label>
                    <select class="nice-select select-active p-4 !bg-white dark:!bg-dark-secondary">
                    <option value={1}>Sylht</option>
                    <option value={2}>Dhaka</option>
                    <option value={2}>Chittagong</option>
                    <option value={2}>Rajshahi</option>
                    <option value={2}>Bogura</option>
                    </select>
                </div>
                <div>
                    <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                    CEP
                    </label>
                    <input
                    class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                    type="text"
                    placeholder="1217"
                    >
                </div>
                </div>
                <div>
                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                    Endereço linha 1
                </label>
                <input
                    class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                    type="number"
                    placeholder="Seu endereço completo"
                >
                </div>
                <div>
                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                    Endereço linha 2
                </label>
                <input
                    class="w-full h-12 md:h-14 bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300"
                    type="number"
                    placeholder="Seu endereço completo"
                >
                </div>
                <div>
                <label class="text-base md:text-lg text-title dark:text-white leading-none mb-2 sm:mb-3 block">
                    Texto adicional
                </label>
                <textarea class="w-full h-[120px] bg-white dark:bg-dark-secondary border border-[#E3E5E6] text-title dark:text-white focus:border-primary p-4 outline-none duration-300" name="Message" placeholder="Digite sua mensagem"></textarea>
                </div>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-delay={200}>
            <div class="bg-[#FAFAFA] dark:bg-dark-secondary pt-[30px] md:pt-[40px] lg:pt-[50px] px-[30px] md:px-[40px] lg:px-[50px] pb-[30px] border border-[#17243026] border-opacity-15 rounded-xl">   
                <h4 class="font-semibold leading-none text-xl md:text-2xl mb-6 md:mb-10">
                    Informações do produto
                </h4>
                <div class="grid gap-5 mg:gap-6">
                    <div class="flex items-center justify-between gap-5">
                    <div class="flex items-center gap-3 md:gap-4 lg:gap-6 cart-product flex-wrap">
                        <div class="w-16 sm:w-[70px] flex-none">
                            <img src="<?php echo $static_url; ?>/img/gallery/cart/cart-01.jpg" alt="product">
                        </div>
                        <div class="flex-1">
                            <h6 class="leading-none font-medium text-lg">Cadeira</h6>
                            <h5 class="font-semibold leading-none mt-2 text-xl">
                                <a href="#">Conjunto de sofá moderno</a>
                            </h5>
                        </div>
                    </div>
                    
                    <h6 class="leading-none text-lg font-bold">R$ 74</h6>
                    </div>
                    <div class="flex items-center justify-between gap-5">
                    <div class="flex items-center gap-3 md:gap-4 lg:gap-6 cart-product flex-wrap">
                        <div class="w-16 sm:w-[70px] flex-none">
                            <img src="<?php echo $static_url; ?>/img/gallery/cart/cart-02.jpg" alt="product">
                        </div>
                        <div class="flex-1">
                            <h6 class="leading-none font-medium text-lg">Interior</h6>
                            <h5 class="font-semibold leading-none mt-2 text-xl">
                                <a href="#">Cadeira com vaso</a>
                            </h5>
                        </div>
                    </div>
                    
                    <h6 class="leading-none text-lg font-bold">R$ 124</h6>
                    </div>
                    <div class="flex items-center justify-between gap-5">
                    <div class="flex items-center gap-3 md:gap-4 lg:gap-6 cart-product flex-wrap">
                        <div class="w-16 sm:w-[70px] flex-none">
                            <img src="<?php echo $static_url; ?>/img/gallery/cart/cart-03.jpg" alt="product">
                        </div>
                        <div class="flex-1">
                            <h6 class="leading-none font-medium text-lg">Iluminação</h6>
                            <h5 class="font-semibold leading-none mt-2 text-xl">
                                <a href="#">Luminária suspensa</a>
                            </h5>
                        </div>
                    </div>
                    <h6 class="leading-none text-lg font-bold">R$ 241</h6>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-bdr-clr dark:border-bdr-clr-drk text-right flex justify-end flex-col w-full ml-auto mr-0">
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium">
                        <span>Subtotal:</span>
                        <span>R$ 870</span>
                    </div>
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                        <span>Desconto do cupom:</span>
                        <span>-R$ 20</span>
                    </div>
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                        <span>Impostos:</span>
                        <span> R$ 5</span>
                    </div>
                    
                </div>
                <div class="mt-6 pt-6 border-t border-bdr-clr dark:border-bdr-clr-drk">
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                        <div>
                            <label class="flex items-center gap-[10px] categoryies-iteem">
                                <input class="appearance-none hidden" type="radio" name="item-type">
                                <span class="w-4 h-4 rounded-full border border-title dark:border-white flex items-center justify-center duration-300">
                                    <svg class="duration-300 opacity-0" width="8" height="8" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="10" height="10" rx="5" fill="#BB976D"/>
                                    </svg>
                                </span>
                                <span class="sm:text-lg text-title dark:text-white block sm:leading-none transform translate-y-[3px] select-none">Frete grátis:</span>
                            </label>
                        </div>
                        <span> R$ 0</span>
                    </div>
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                        <div>
                            <label class="flex items-center gap-[10px] categoryies-iteem">
                                <input class="appearance-none hidden" type="radio" name="item-type">
                                <span class="w-4 h-4 rounded-full border border-title dark:border-white flex items-center justify-center duration-300">
                                    <svg class="duration-300 opacity-0" width="8" height="8" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="10" height="10" rx="5" fill="#BB976D"/>
                                    </svg>
                                </span>
                                <span class="sm:text-lg text-title dark:text-white block sm:leading-none transform translate-y-[3px] select-none">Envio rápido:</span>
                            </label>
                        </div>
                        <span>R$ 10</span>
                    </div>
                    <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                        <div>
                            <label class="flex items-center gap-[10px] categoryies-iteem">
                                <input class="appearance-none hidden" type="radio" name="item-type">
                                <span class="w-4 h-4 rounded-full border border-title dark:border-white flex items-center justify-center duration-300">
                                    <svg class="duration-300 opacity-0" width="8" height="8" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="10" height="10" rx="5" fill="#BB976D"/>
                                    </svg>
                                </span>
                                <span class="sm:text-lg text-title dark:text-white block sm:leading-none transform translate-y-[3px] select-none"> Retirada local:</span>
                            </label>
                        </div>
                        <span>R$ 15</span>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-bdr-clr dark:border-bdr-clr-drk">
                    <div class="flex justify-between flex-wrap font-semibold leading-none text-2xl md:text-3xl">
                        <span>Total:</span>
                        <span>&nbsp;R$ 850</span>
                    </div>
                </div>
            </div> 
            <div class="mt-7 md:mt-12">
                <h4 class="font-semibold leading-none text-xl md:text-2xl mb-6 md:mb-10">Forma de pagamento</h4>
                <div class="flex gap-5 sm:gap-8 md:gap-12 flex-wrap">
                    <div>
                        <label class="flex items-center gap-[10px] categoryies-iteem">
                            <input class="appearance-none hidden" type="radio" name="item-type">
                            <span class="w-4 h-4 rounded-full border border-title dark:border-white flex items-center justify-center duration-300">
                                <svg class="duration-300 opacity-0" width="8" height="8" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="10" height="10" rx="5" fill="#BB976D"/>
                                </svg>
                            </span>
                            <span class="sm:text-lg text-title dark:text-white block sm:leading-none transform translate-y-[3px] select-none">Pagamento na entrega</span>
                        </label>
                        <p class="ml-6 text-[15px] leading-none mt-2">Prazo (7 a 10) dias</p>
                    </div>
                    <div>
                        <label class="flex items-center gap-[10px] categoryies-iteem">
                            <input class="appearance-none hidden" type="radio" name="item-type">
                            <span class="w-4 h-4 rounded-full border border-title dark:border-white flex items-center justify-center duration-300">
                                <svg class="duration-300 opacity-0" width="8" height="8" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="10" height="10" rx="5" fill="#BB976D"/>
                                </svg>
                            </span>
                            <span class="sm:text-lg text-title dark:text-white block sm:leading-none transform translate-y-[3px] select-none">Cartão de débito / crédito</span>
                        </label>
                        <p class="ml-6 text-[15px] leading-none mt-2">Prazo (7 a 10) dias</p>
                    </div>
                </div>
                <div class="mt-6 sm:mt-8 md:mt-10">
                    <label class="flex items-center gap-2 iam-agree">
                        <input class="appearance-none hidden" type="checkbox" name="categories">
                        <span class="w-6 h-6 rounded-[5px] border-2 border-title dark:border-white flex items-center justify-center duration-300">
                            <svg  class="duration-300 opacity-0 text-title dark:text-white fill-current" width="15" height="12" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.3819 0.742676L6.10461 11.8998L2.25731 8.06381L0.763672 9.55745L6.20645 15.0002L20 2.32686L18.3819 0.742676Z"/>
                            </svg>
                        </span>
                        <span class="text-base sm:text-lg text-title dark:text-white leading-none sm:leading-none select-none inline-block transform translate-y-[3px]">Concordo com todos os termos e condições</span> 
                    </label>
                </div>
                <div class="mt-4 md:mt-6 flex flex-wrap gap-3">
                    <a
                        href="#" class="btn btn-outline" data-text="Voltar ao carrinho">
                        <span>Voltar ao carrinho</span>
                    </a>
                    <a href="#" class="btn btn-theme-solid" data-text="Finalizar pedido">
                        <span>Finalizar pedido</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Finalizar compra Area End -->
   
<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>