<?php
$sliders = [
    [
        'img' => '/img/home-v2/product/pdct-01.jpg', 
        'title' => 'Conjunto de sofá de luxo', 
        'name' => "26 produtos", 
    ],
    [
        'img' => '/img/home-v2/product/pdct-02.jpg', 
        'title' => 'Mesa e cadeira', 
        'name' => "40 produtos", 
    ],
    [
        'img' => '/img/home-v2/product/pdct-03.jpg', 
        'title' => 'Vasos e luminária', 
        'name' => "14 produtos", 
    ],
    [
        'img' => '/img/home-v2/product/pdct-04.jpg', 
        'title' => 'Coleção de interiores', 
        'name' => "32 produtos", 
    ]
];
?>

<?php foreach ($sliders as $item): ?>
<!-- Single Product -->
<a class="relative" href="product-category.php">
    <img class="w-full object-cover" src="<?php echo $static_url, $item['img']; ?>" alt="product">
    <div class="absolute bottom-7 left-0 px-5 transform w-full flex justify-center">
        <div class="min-w-[250px] bg-white bg-opacity-80 dark:bg-title dark:bg-opacity-80 p-5 z-10">
            <h4 class="leading-[1.5] font-semibold text-2xl"><?php echo $item['title']; ?></h4>
            <p class="leading-none mt-[10px]"><?php echo $item['name']; ?></p>
        </div>
    </div>
</a>
<?php endforeach; ?>