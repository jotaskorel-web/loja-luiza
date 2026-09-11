<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Furnixar/assets'; // Ensure this is the correct path
$page = 'nav';
$fpage = 'foot6';

ob_start();
?>

<!-- Banner Start -->
<div class="flex items-center gap-4 flex-wrap bg-overlay p-14 sm:p-16 before:bg-title before:bg-opacity-70" style="background-image:url('<?php echo $static_url; ?>/img/shortcode/breadcumb.jpg');">
    <div class="text-center w-full">
        <h2 class="text-white text-8 md:text-[40px] font-normal leading-none text-center">Termos e condições</h2>
        <ul class="flex items-center justify-center gap-[10px] text-base md:text-lg leading-none font-normal text-white mt-3 md:mt-4">
            <li><a href="index.php">Início</a></li>
            <li>/</li>
            <li class="text-primary">Termos e condições</li>
        </ul>
    </div>
</div>
<!-- Banner End -->

<!-- Condition Area Start -->
<div class="s-py-100">
    <div class="container">
        <div class="max-w-[940px] mx-auto" data-aos="fade-up">
            <article class="prose prose-h3:!text-3xl prose-h4:!text-2xl sm:prose-lg dark:prose-p:text-white-light dark:prose-li:text-white-light max-w-full prose-li:list-none prose-li:before:relative prose-li:before:content-[url('<?php echo $static_url; ?>/img/icon/check.svg')] prose-ol:!pl-0 sm:prose-ol:!pl-0 prose-ul:pl-0 sm:prose-ul:pl-0 prose-li:flex prose-li:items-start prose-li:gap-2">
                <h3>Sobre o envio</h3>
                <p>Trabalhamos para entregar seus pedidos no prazo. O tempo de envio varia conforme a região e a opção escolhida. Confira a política de entrega para prazos, valores e rastreio. Fale conosco se precisar de ajuda.</p>
                <h3>Para trocas</h3>
                <p>Oferecemos um processo simples de troca para garantir a sua satisfação. Confira a política de devolução para ver as condições e como solicitar. </p>
                <h3>Pagamento</h3>
                <p>Oferecemos opções seguras e flexíveis. Aceitamos cartão de crédito, débito e meios de pagamento online. Todas as transações são criptografadas. Se tiver qualquer dúvida sobre pagamento, nosso time está pronto para ajudar. </p>
                <h3>Garantia e suporte</h3>
                <p>Oferecemos garantia e suporte para você comprar com tranquilidade. A garantia cobre produtos elegíveis contra defeitos, com foco em qualidade e durabilidade. Nossa equipe está disponível para tirar dúvidas e resolver problemas técnicos em cada etapa. </p>
                <ul>
                    <li>Trabalhamos com seleção cuidadosa para oferecer móveis de qualidade.</li>
                    <li>Conforto, beleza e funcionalidade em cada detalhe</li>
                    <li>Móveis e decorações para deixar a sua casa com a sua cara. </li>
                    <li>Priorizamos materiais resistentes e um acabamento de qualidade.</li>
                </ul>
                <h3>Cancelamento do pedido</h3>
                <p>A garantia cobre produtos elegíveis contra defeitos, com foco em qualidade e durabilidade. Nossa equipe está disponível para tirar dúvidas e resolver problemas técnicos em cada etapa.</p>
                <ol>
                    <li>Conforto, beleza e funcionalidade em cada detalhe</li>
                    <li>Móveis e decorações para deixar a sua casa com a sua cara. </li>
                    <li>Priorizamos materiais resistentes e um acabamento de qualidade.</li>
                </ol>    
            </article>
        </div>
    </div>
</div>
<!-- Condition Area End -->

<?php
$hero_content = ob_get_clean();
include __DIR__ . '/Base/style/base.php';
?>