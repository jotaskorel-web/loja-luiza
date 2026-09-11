<?php
$services = [
    [
        'img' => '/img/svg/car.svg', 
        'title' => "Frete grátis", 
        'desc' => "Frete grátis em todos os pedidos, para a sua compra ficar ainda mais prática. Receba seus produtos favoritos em casa.", 
        'data' => "100", 
    ],
    [
        'img' => '/img/svg/box.svg', 
        'title' => "Troca fácil", 
        'desc' => "Trocas simples e sem burocracia. Se não ficar satisfeito, é só devolver o produto.",
        'data' => "200",  
    ],
    [
        'img' => '/img/svg/card.svg', 
        'title' => "Pagamento seguro", 
        'desc' => "Pague com segurança. Suas informações ficam protegidas, porque a sua tranquilidade vem primeiro.", 
        'data' => "300", 
    ],
    [
        'img' => '/img/svg/support.svg', 
        'title' => "Atendimento", 
        'desc' => "Nossa equipe de atendimento está pronta para ajudar em cada etapa. Fale conosco quando quiser e receba um suporte rápido e atencioso.", 
        'data' => "400", 
    ]
];
?>

<?php foreach ($services as $item): ?>
<!-- Single Chose Card -->
<div class="why-choose-card p-6 rounded-[10px]" data-aos="fade-up" data-aos-delay="<?php echo $item['data']; ?>">
    <img src="<?php echo $static_url, $item['img']; ?>" class="w-12 h-12" alt="">
    <h4 class="font-semibold leading-none mt-5 sm:mt-7 text-xl md:text-2xl"><?php echo $item['title']; ?></h4>
    <p class="mt-[15px]"><?php echo $item['desc']; ?> </p>
</div>
<?php endforeach; ?>