<?php
$products = [
    [
        'img' => '/img/home-v5/pdct-01.jpg', 
        'title' => 'Conjunto de sofá de luxo', 
        'name' => "26 produtos", 
    ],
    [
        'img' => '/img/home-v5/pdct-02.jpg', 
        'title' => 'Vaso retrô', 
        'name' => "40 produtos", 
    ],
    [
        'img' => '/img/home-v5/pdct-03.jpg', 
        'title' => 'Mesa e cadeira', 
        'name' => "14 produtos", 
    ],
    [
        'img' => '/img/home-v5/pdct-04.jpg', 
        'title' => 'Vaso de luxo', 
        'name' => "32 produtos", 
    ],
    [
        'img' => '/img/home-v5/pdct-05.jpg', 
        'title' => 'Elemento de interior', 
        'name' => "26 produtos", 
    ],
    [
        'img' => '/img/home-v5/pdct-06.jpg', 
        'title' => 'Others', 
        'name' => "66 produtos", 
    ]
];
?>

<?php foreach ($products as $item): ?>
<!-- Single Product -->
<a href="product-category.php" class="relative group overflow-hidden">
    <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="product">
    <div class="absolute bottom-5 sm:bottom-8 lg:bottom-12 w-full left-0 px-7 flex justify-center">
        <div class=" bg-white bg-opacity-80 dark:bg-title dark:bg-opacity-80 p-5 z-10">
            <h4 class="font-semibold leading-[1.5] text-2xl"><?php echo $item['title']; ?></h4>
            <p class="leading-none mt-[10px]"><?php echo $item['name']; ?></p>
        </div>
    </div>
</a>
<?php endforeach; ?>