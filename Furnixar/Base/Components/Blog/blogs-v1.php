<?php
$blogs = [
    [
        'id' => 1,
        'img' => '/img/shortcode/blog/blog-01.jpg', 
        'title' => 'Inspiração e estilo para a sua casa.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 2,
        'img' => '/img/shortcode/blog/blog-02.jpg', 
        'title' => 'Peças que unem design e praticidade no dia a dia.', 
        'tag' => 'Chair', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 3,
        'img' => '/img/shortcode/blog/blog-03.jpg', 
        'title' => 'Móveis pensados para deixar a casa mais aconchegante.', 
        'tag' => 'Vase', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 26,
        'img' => '/img/shortcode/blog/blog-14.jpg', 
        'title' => 'Boas ideias para renovar a sua sala.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 27,
        'img' => '/img/shortcode/blog/blog-15.jpg', 
        'title' => 'Dicas para deixar a casa organizada e sem bagunça.', 
        'tag' => 'Vase', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 28,
        'img' => '/img/shortcode/blog/blog-16.jpg', 
        'title' => "Móveis infantis resistentes, feitos para durar.", 
        'tag' => 'Sofa', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 29,
        'img' => '/img/shortcode/blog/blog-17.jpg', 
        'title' => 'Consectetur purus habitasse ut diam habitant varius3.', 
        'tag' => 'Chair', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 30,
        'img' => '/img/shortcode/blog/blog-18.jpg', 
        'title' => 'Far far away of furniture of this habitant vel tempor3.', 
        'tag' => 'Vase', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 31,
        'img' => '/img/shortcode/blog/blog-19.jpg', 
        'title' => 'Como fazer um quarto pequeno parecer maior.', 
        'tag' => 'Interior', 
        'date' => '23 jan. 2026', 
    ],
    [
        'id' => 32,
        'img' => '/img/shortcode/blog/blog-20.jpg', 
        'title' => '6 dicas para aquecer uma decoração cinza e branca.', 
        'tag' => 'Vase', 
        'date' => '23 jan. 2026', 
    ],
];
?>

<?php foreach ($blogs as $item): ?>
<!-- Single Card de blog -->
<div class="group">
    <a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="overflow-hidden block">
        <img class="duration-300 transform scale-100 group-hover:scale-110 w-full" src="<?php echo $static_url, $item['img']; ?>" alt="blog">
    </a>
    <div class="text-center mt-4 px-3">
        <ul class="flex items-center justify-center gap-[10px] flex-wrap">
            <li class="text-[15px] leading-none dark:text-white"><?php echo $item['date']; ?></li>
            <li><a href="blog-tag.php" class="inline-block text-title font-medium text-[15px] leading-none py-[10px] px-5 rounded-md bg-primary-midum"><?php echo $item['tag']; ?></a></li>
        </ul>
        <h5 class="mt-3 font-medium dark:text-white leading-[1.5] text-xl"><a href="blog-details-v1.php?title=<?php echo urlencode(str_replace(' ', '-', strtolower($item['title']))); ?>" class="text-underline"><?php echo $item['title']; ?> </a></h5>
    </div>
</div>
<?php endforeach; ?>