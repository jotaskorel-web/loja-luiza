<?php
$testimonials = [
    [
        'img' => '/img/testimonial/tmnl-02.jpg', 
        'name' => 'Jennifer Smith', 
        'title' => "Birmingham, Reino Unido", 
        'desc' => "A Loja Luiza superou minhas expectativas. A qualidade e o cuidado com os detalhes aparecem em cada produto. Minha casa virou um refúgio cheio de estilo graças à Loja Luiza!", 
    ],
    [
        'img' => '/img/testimonial/tmnl-03.jpg', 
        'name' => 'Jackyer Smith', 
        'title' => "Birmingham, Reino Unido", 
        'desc' => "A Loja Luiza superou minhas expectativas. A qualidade e o cuidado com os detalhes aparecem em cada produto. Minha casa virou um refúgio cheio de estilo graças à Loja Luiza!", 
    ],
];
?>

<?php foreach ($testimonials as $item): ?>
<!-- Single Testimonial Slide -->
<div class="text-center">
    <h6 class="dark:text-white italic font-normal text-lg"><?php echo $item['desc']; ?> </h6>
    <div class="flex items-center justify-center gap-3 mt-6 author">
        <div class="w-11 h-11 rounded-full overflow-hidden p-1 bg-[#bb976d]">
            <img class="rounded-full" src="<?php echo $static_url, $item['img']; ?>" alt="testimonial">
        </div>
        <div class="text-left">
            <h5 class="dark:text-white font-medium leading-none text-xl"><?php echo $item['name']; ?></h5>
            <span class="block text-[14px] leading-none text-[#bb976d] mt-[5px]"><?php echo $item['title']; ?></span>
        </div>
    </div>
</div>
<?php endforeach; ?>