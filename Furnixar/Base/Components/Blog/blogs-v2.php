<?php
$blogs = [
    [
        'id' => 4,
        'img' => '/img/shortcode/blog/blog-27.jpg', 
        'title' => 'Crie o seu refúgio: decoração inspiradora com a Loja Luiza', 
        'tag' => 'Chair', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 5,
        'img' => '/img/shortcode/blog/blog-28.jpg', 
        'title' => 'Da sala comum ao ambiente dos sonhos: inspiração da Loja Luiza', 
        'tag' => 'Sofa', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 6,
        'img' => '/img/shortcode/blog/blog-29.jpg', 
        'title' => 'Espaço pequeno, muito estilo: soluções de decoração da Loja Luiza', 
        'tag' => 'Vases', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 7,
        'img' => '/img/shortcode/blog/blog-22.jpg', 
        'title' => 'Decoração criativa: inspire-se com as ideias da Loja Luiza', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 8,
        'img' => '/img/shortcode/blog/blog-23.jpg', 
        'title' => 'Elegância atemporal: ideias clássicas de decoração da Loja Luiza', 
        'tag' => 'Chair', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 9,
        'img' => '/img/shortcode/blog/blog-24.jpg', 
        'title' => 'Decoração inteligente: ideias acessíveis da Loja Luiza', 
        'tag' => 'Sofa', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 10,
        'img' => '/img/shortcode/blog/blog-25.jpg', 
        'title' => 'Personalize o seu espaço: opções de decoração com a Loja Luiza', 
        'tag' => 'Vases', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'id' => 11,
        'img' => '/img/shortcode/blog/blog-26.jpg', 
        'title' => 'Transforme sua casa: dicas e tendências de decoração com a Loja Luiza', 
        'tag' => 'Lamp', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Latest Post Card -->
<div class="group">
    <a href="blog-details-v2.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </a>
    <div class="p-5 relative z-10 before:absolute before:-z-10 before:top-0 before:left-0 before:w-full before:h-full before:bg-secondary dark:before:bg-dark-secondary before:transition-all before:duration-300 overflow-hidden before:opacity-0 group-hover:before:opacity-10 dark:group-hover:before:opacity-100">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md group-hover:bg-primary group-hover:text-white duration-300 bg-[#dbcbbd]"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="blog-details-v2.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?> </a></h5>
        <p class="text-base md:text-lg mt-3 dark:text-white-light"><?php echo $item['desc']; ?> </p>
    </div>
</div>
<?php endforeach; ?>