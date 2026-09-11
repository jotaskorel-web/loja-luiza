<?php
$services = [
    [
        'img' => '/img/svg/sofa.svg', 
        'title' => "Conjunto de sofá de luxo", 
        'product' => "26 produtos", 
        'desc' => "Deixe a sala mais confortável e sofisticada. Conheça nossos conjuntos de sofá pensados para o dia a dia. ", 
    ],
    [
        'img' => '/img/svg/chair.svg', 
        'title' => "Mesa e cadeira", 
        'product' => "40 produtos", 
        'desc' => "Transforme a sala de jantar em um espaço elegante e funcional. Explore mesas e cadeiras versáteis. ", 
    ],
    [
        'img' => '/img/svg/vase.svg', 
        'title' => "Vasos e luminária", 
        'product' => "14 produtos", 
        'desc' => "Valorize a decoração com vasos e luminárias. Um toque de sofisticação e aconchego para qualquer ambiente. ", 
    ],
    [
        'img' => '/img/svg/lamp.svg', 
        'title' => "Coleção de interiores", 
        'product' => "32 produtos", 
        'desc' => "Crie um espaço que reflita o seu estilo. Explore nossa coleção de interiores com peças atemporais e inspiradoras. ", 
    ],
];
?>

<?php foreach ($services as $item): ?>
<!-- Single Service Card -->
<div class="text-center sm:text-left group" data-aos="fade-up">
    <div class="w-14 sm:w-[70px] h-14 sm:h-[70px] p-[10px] mx-auto sm:mx-0 flex items-center justify-center border border-primary rounded-[10px] border-[#bb976d]">
        <img src="<?php echo $static_url, $item['img']; ?>" alt="">           
    </div>
    <h4 class="mt-6 font-semibold leading-none text-xl lg:text-2xl"><a href="product-category.php" class="text-underline"><?php echo $item['title']; ?></a></h4>
    <span class="block leading-none mt-[10px]"><?php echo $item['product']; ?></span>
    <p class="mt-[15px]">
        <?php echo $item['desc']; ?> 
    </p>
</div>
<?php endforeach; ?>