<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path

ob_start();
?>

<!-- Dark Mood -->
<label class="switcher z-20 w-12 sm:w-[60px] h-12 sm:h-[60px] fixed bottom-[10px] md:bottom-5 left-[10px] md:left-5 rounded-xl flex items-center justify-center cursor-pointer">
    <input class="hidden" type="checkbox">
        <img class="moon" src="<?php echo $static_url; ?>/img/icon/simple-sun.svg" alt="moon">
        <img class="sun" src="<?php echo $static_url; ?>/img/icon/simple-light.svg" alt="sun">
</label>

<!-- Invoice Area Start -->
<div class="s-py-100 min-h-screen">
    <div class="container">
        <div class="max-w-[800px] mx-auto">
            <div class="div">
                <div class="flex justify-between items-center flex-wrap mb-8 gap-2">
                    <h1 class="font-medium leading-none text-2xl md:text-3xl text-title dark:text-white">Fatura: #038 - 456980</h1>
                    <button class="btn btn-solid rounded-full" data-text="Imprimir fatura">
                        <span>Imprimir fatura</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-[800px] mx-auto">
            <div class="rounded-t-[30px] w-full bg-invoice dark:bg-dark-secondary pt-[30px] md:pt-[40px] px-[30px] md:px-[40px] border border-[#17243026] dark:border-bdr-clr-drk border-opacity-15">
                <a class="cursor-pointer block mb-[50px]" href="index.php">
                    <span class="font-bold text-2xl sm:text-[28px] tracking-tight whitespace-nowrap dark:text-white text-title">Loja Luiza</span>  
                </a>
                <div class="grid md:grid-cols-2 gap-5 md:gap-[30px] mb-[50px]">
                    <div class="p-4 md:p-[30px] border border-dashed border-title dark:border-bdr-clr-drk rounded-lg md:rounded-[16px] bg-white dark:bg-title">
                        <p class="text-base text-paragraph dark:text-white font-normal">Data: 23 dez. 2026</p>
                        <h3 class="font-medium leading-none mt-4 text-lg">Fatura # 0412-12345</h3>
                        <h2 class="pl-2.5 font-semibold leading-none mt-4 md:mt-10 text-[20px] relative before:absolute before:top-[-2px] before:left-0 before:w-[4px] before:h-[100%] before:bg-primary">Informações da loja</h2>
                        <p class="font-medium leading-none mt-4 md:mt-5 text-lg">Jack Wood Farm</p>
                        <p class="text-base text-paragraph dark:text-white font-normal mt-4">23/A South Park, Lake Road</p>
                        <p class="text-base text-paragraph dark:text-white font-normal">Milão, Itália</p>
                    </div>
                    <div class="p-4 md:p-[30px] border border-dashed border-title dark:border-bdr-clr-drk rounded-lg md:rounded-[16px] bg-white dark:bg-title">
                        <p class="text-base text-paragraph dark:text-white font-normal">Data: 23 dez. 2026</p>
                        <h3 class="font-medium leading-none mt-4 md:mt-5 text-2xl">Pagamento na entrega</h3>
                        <h2 class="pl-2.5 font-semibold leading-none mt-4 md:mt-10 text-[20px] relative before:absolute before:top-[-2px] before:left-0 before:w-[4px] before:h-[100%] before:bg-primary">Informações do cliente</h2>
                        <p class="font-medium leading-none mt-4 md:mt-5 text-lg">Jack Wood Farm</p>
                        <p class="text-base text-paragraph dark:text-white font-normal mt-4">23/A South Park, Lake Road</p>
                        <p class="text-base text-paragraph dark:text-white font-normal">Milão, Itália</p>
                    </div>
                </div>
            </div>   
        </div>

        <div class="max-w-[800px] mx-auto">
            <div class="div bg-primary-midum px-[30px] md:px-[40px] py-[25px]">
                <h2 class="leading-none text-2xl font-semibold text-title dark:text-white">
                    Informações do pedido
                </h2>
            </div>
        </div>    
        <div class="max-w-[800px] mx-auto rounded-b-[30px] w-full bg-invoice dark:bg-dark-secondary pt-[30px] px-[30px] md:px-[40px] pb-[30px] md:pb-[40px] border border-[#17243026] dark:border-bdr-clr-drk border-opacity-15">
            <div class="overflow-x-auto border-t-dashed block border-dashed border-title pb-[30px] aos-init aos-animate">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="py-3 text-left font-semibold leading-none text-2xl text-title dark:text-white whitespace-nowrap">Produto</th>
                            <th class="py-3 px-4 text-center font-semibold leading-none text-2xl text-title dark:text-white whitespace-nowrap">Quantidade</th>
                            <th class="py-3 px-4 text-center font-semibold leading-none text-2xl text-title dark:text-white whitespace-nowrap">Preço</th>
                            <th class="py-3 text-right font-semibold leading-none text-2xl text-title dark:text-white whitespace-nowrap">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='border-b border-solid border-title dark:border-bdr-clr-drk border-opacity-10'>
                            <td class="py-4 flex items-center whitespace-nowrap">
                                <div class="min-w-[100px] max-w-[110px] max-h-[80px] mr-4">
                                    <img class="w-full h-full max-w-[100px] max-h-[80px]" src="<?php echo $static_url; ?>/img/blog-details/post-01.jpg" alt="shape">
                                </div>
                                <div>
                                    <p class="text-sm text-paragraph dark:text-white font-medium">Cadeira</p>
                                    <p class="text-base sm:text-lg text-title dark:text-white font-semibold pt-3 whitespace-nowrap">Conjunto de sofá moderno</p>
                                </div>
                            </td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">3</td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">R$ 74</td>
                            <td class="py-4 text-right text-base text-paragraph dark:text-white font-semibold">R$ 210</td>
                        </tr>
                        <tr class='border-b border-solid border-title dark:border-bdr-clr-drk border-opacity-10'>
                            <td class="py-4 flex items-center whitespace-nowrap">
                                <div class="min-w-[100px] max-w-[110px] max-h-[80px] mr-4">
                                    <img class="w-full h-full max-w-[100px] max-h-[80px]" src="<?php echo $static_url; ?>/img/blog-details/post-02.jpg" alt="shape">
                                </div>
                                <div>
                                    <p class="text-sm text-paragraph dark:text-white font-medium">Interior</p>
                                    <p class="text-base sm:text-lg text-title dark:text-white font-semibold pt-3 whitespace-nowrap">Cadeira clássica com vaso</p>
                                </div>
                            </td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">2</td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">R$ 120</td>
                            <td class="py-4 text-right text-base text-paragraph dark:text-white font-semibold">R$ 780</td>
                        </tr>
                        <tr>
                            <td class="pt-4 flex items-center whitespace-nowrap">
                                <div class="min-w-[100px] max-w-[110px] max-h-[80px] mr-4">
                                    <img class="w-full h-full max-w-[100px] max-h-[80px]" src="<?php echo $static_url; ?>/img/blog-details/post-01.jpg" alt="shape">
                                </div>
                                <div>
                                    <p class="text-sm text-paragraph dark:text-white font-medium">Iluminação</p>
                                    <p class="text-base sm:text-lg text-title dark:text-white font-semibold pt-3 whitespace-nowrap">Luminária suspensa de luxo</p>
                                </div>
                            </td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">3</td>
                            <td class="py-4 px-4 text-center text-base text-paragraph dark:text-white font-semibold">R$ 74</td>
                            <td class="py-4 text-right text-base text-paragraph dark:text-white font-semibold">R$ 210</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="border-t border-t-dashed border-t-title dark:border-bdr-clr-drk pt-7 block border-b border-dashed border-title pb-7 aos-init aos-animate">
                <div>
                    <div class="max-w-[325px] flex justify-end flex-col w-full ml-auto mr-0">
                        <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium">
                            <span>Subtotal:</span>
                            <span>R$ 870</span>
                        </div>
                        <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                            <span>Desconto do cupom:</span>
                            <span>-R$ 20</span>
                        </div>
                        <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                            <span>Taxa de entrega:</span>
                            <span>R$ 5</span>
                        </div>
                        <div class="flex justify-between flex-wrap text-base sm:text-lg text-title dark:text-white font-medium mt-3">
                            <span>Impostos:</span>
                            <span> R$ 5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[325px] flex justify-end flex-col w-full ml-auto mr-0">
                <div class="flex justify-between flex-wrap font-bold leading-none mt-[30px] text-lg">
                    <span>Total:</span>
                    <span>&nbsp;R$ 850</span>
                </div>
            </div>
        </div>     
    </div>
</div>
<!-- Invoice Area End -->

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/no-header.php';
?>