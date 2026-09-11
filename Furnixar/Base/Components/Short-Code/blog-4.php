<?php
$blogs = [
    [
        'img' => '/img/shortcode/blog/blog-07.jpg', 
        'title' => 'Inspiração e estilo para a sua casa.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'img' => '/img/shortcode/blog/blog-08.jpg', 
        'title' => 'Peças que unem design e praticidade no dia a dia.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ],
    [
        'img' => '/img/shortcode/blog/blog-09.jpg', 
        'title' => 'Móveis pensados para deixar a casa mais aconchegante.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
        'desc' => 'Inspire-se com ideias práticas para renovar a sua casa com estilo . . .', 
    ]
];
?>

<?php foreach ($blogs as $item): ?>
<div class="group">
    <div class="overflow-hidden">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog-card">
    </div>
    <div class="p-5 relative z-10 before:absolute before:-z-10 before:top-0 before:left-0 before:w-full before:h-full before:bg-secondary dark:before:bg-title before:bg-opacity-10 before:transition-all before:duration-300 overflow-hidden before:opacity-0 group-hover:before:opacity-10">
        <ul class="flex items-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="#" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md bg-[#dbcbbd]"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="#" class="text-underline"><?php echo $item['title']; ?></a></h5>
        <p class="text-base md:text-lg mt-3 dark:text-white-light"><?php echo $item['desc']; ?> </p>
    </div>
</div>
<?php endforeach; ?>