<?php
$services = [
    [
        'img' => '/img/svg/car.svg', 
        'title' => "Frete grátis", 
        'class' => "", 
        'style' => "", 
        'desc' => "Compre com mais praticidade: frete grátis em todos os pedidos, sem custo extra.", 
    ],
    [
        'img' => '/img/svg/box.svg', 
        'title' => "Troca fácil", 
        'class' => "xl:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-primary hidden 2xl:block", 
        'desc' => "Satisfação garantida ou o seu dinheiro de volta. Trocas simples, sem complicação.", 
    ],
    [
        'img' => '/img/svg/card.svg', 
        'title' => "Pagamento seguro", 
        'class' => "xl:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-primary hidden 2xl:block", 
        'desc' => "Compre com segurança. O checkout criptografado protege as suas informações.", 
    ],
    [
        'img' => '/img/svg/support.svg', 
        'title' => "Atendimento", 
        'class' => "xl:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-primary hidden 2xl:block", 
        'desc' => "Conte com um atendimento pensado para você. Nossa equipe acompanha cada etapa da sua compra.", 
    ],
    [
        'img' => '/img/svg/award.svg', 
        'title' => "Equipe de qualidade", 
        'class' => "xl:max-w-[290px] w-full 2xl:flex items-center justify-between gap-7", 
        'style' => "w-[1px] h-[120px] border-l border-dashed border-primary hidden 2xl:block", 
        'desc' => "Nossa equipe de qualidade revisa cada item com rigor. Confiança e padrão alto em cada peça.", 
    ],
];
?>

<?php foreach ($services as $item): ?>
<!-- Single Chose -->
<div class="<?php echo $item['class']; ?>">
    <div class="<?php echo $item['style']; ?>"></div>
    <div class="text-center sm:text-left xl:max-w-[205px] w-full">
        <img src="<?php echo $static_url, $item['img']; ?>" class="w-12 h-12" alt="">
        <h5 class="font-semibold text-xl md:text-2xl mt-3 md:mt-7"><?php echo $item['title']; ?></h5>
        <p class="md:text-lg mt-2 sm:mt-3"><?php echo $item['desc']; ?> </p>
    </div>
</div>
<?php endforeach; ?>