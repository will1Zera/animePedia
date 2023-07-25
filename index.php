<?php
    include_once("templates/header.php");
?>

    <main id="container">
        <div id="title-container">
            <div>
                <img src="<?= $BASE_URL ?>/img/anime-img.png" alt="Anime image">
            </div>
            <div>
                <h1>AnimePedia, o portal para <br>seu mundo de animes</h1>
                <p>Bem-vindo ao blog definitivo para todos os fãs de animes.</p>
                <p>Explore os mais emocionantes enredos, conheça personagens <br>inesquecíveis e descubra novos universos que irão cativar sua <br>imaginação.</p>
            </div>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h3 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h3>
                    <p class="post-description"><?= $post['description'] ?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php
    include_once("templates/footer.php");
?>