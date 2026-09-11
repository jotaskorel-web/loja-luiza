<?php
$shippings = [
    [
        'class' => '', 
        'title' => 'Sobre o envio', 
        'desc' => "O prazo de entrega varia conforme a sua região e a opção escolhida. Confira a política de envio para prazos, valores e rastreio. Fale conosco se precisar de ajuda.", 
    ],
    [
        'class' => 'mt-5 sm:mt-6', 
        'title' => 'Devolução', 
        'desc' => "Oferecemos um processo simples de troca para garantir a sua satisfação. Confira a política de devolução para ver as condições e como solicitar.", 
    ],
    [
        'class' => 'mt-5 sm:mt-6', 
        'title' => 'Problema aceito', 
        'desc' => "Escolha entre cartão de crédito, débito e meios de pagamento online. Todas as transações são criptografadas. Se tiver qualquer dúvida sobre pagamento, nosso time está pronto para ajudar.", 
    ]
];
?>

<?php foreach ($shippings as $item): ?>
<div class="<?php echo $item['class']; ?>">
    <h4 class="text-xl sm:text-2xl leading-none font-medium"><?php echo $item['title']; ?></h4>
    <p class="sm:text-lg mt-3"><?php echo $item['desc']; ?></p>
</div>
<?php endforeach; ?>