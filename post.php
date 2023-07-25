<?php
    include_once("templates/header.php");
    // Verifica se vem um id de um post no GET
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h2 id="main-title"><?= $currentPost['title'] ?></h2>
            <p class="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quo ab voluptate perspiciatis similique quod mollitia modi omnis! Maxime porro ipsum culpa ratione vel earum omnis, doloribus optio nihil! Ipsa.
                Velit assumenda vitae, explicabo aliquam hic facere incidunt nam cumque quaerat minus, cupiditate adipisci. Iusto ea debitis omnis libero cum in totam natus error exercitationem, ad quas consequuntur odio cumque.
                Amet expedita ipsam aliquid cumque praesentium, velit, laboriosam accusamus a, temporibus veritatis ipsum consequatur soluta doloribus rerum! Tempora, pariatur? Excepturi nobis doloremque sunt magni quam deserunt exercitationem quisquam sequi consectetur?
                Obcaecati illo quis consectetur sed expedita, sunt beatae quia, ipsa ut molestias ex sit voluptates quasi, molestiae qui corporis distinctio animi nostrum reiciendis ea. Voluptates facere dolorum officia pariatur magni.
                Repellendus exercitationem voluptas quibusdam reprehenderit autem quos nisi corporis optio magni! Reiciendis iure ea magnam. Deleniti modi ipsam nam quasi cupiditate laborum debitis! Repellat odio, repudiandae corporis officia consectetur asperiores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quo ab voluptate perspiciatis similique quod mollitia modi omnis! Maxime porro ipsum culpa ratione vel earum omnis, doloribus optio nihil! Ipsa.
                Velit assumenda vitae, explicabo aliquam hic facere incidunt nam cumque quaerat minus, cupiditate adipisci. Iusto ea debitis omnis libero cum in totam natus error exercitationem, ad quas consequuntur odio cumque.
                Amet expedita ipsam aliquid cumque praesentium, velit, laboriosam accusamus a, temporibus veritatis ipsum consequatur soluta doloribus rerum! Tempora, pariatur? Excepturi nobis doloremque sunt magni quam deserunt exercitationem quisquam sequi consectetur?
                Obcaecati illo quis consectetur sed expedita, sunt beatae quia, ipsa ut molestias ex sit voluptates quasi, molestiae qui corporis distinctio animi nostrum reiciendis ea. Voluptates facere dolorum officia pariatur magni.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quo ab voluptate perspiciatis similique quod mollitia modi omnis! Maxime porro ipsum culpa ratione vel earum omnis, doloribus optio nihil! Ipsa.
                Velit assumenda vitae, explicabo aliquam hic facere incidunt nam cumque quaerat minus, cupiditate adipisci. Iusto ea debitis omnis libero cum in totam natus error exercitationem, ad quas consequuntur odio cumque.
                Amet expedita ipsam aliquid cumque praesentium, velit, laboriosam accusamus a, temporibus veritatis ipsum consequatur soluta doloribus rerum! Tempora, pariatur? Excepturi nobis doloremque sunt magni quam deserunt exercitationem quisquam sequi consectetur?
                Obcaecati illo quis consectetur sed expedita, sunt beatae quia, ipsa ut molestias ex sit voluptates quasi, molestiae qui corporis distinctio animi nostrum reiciendis ea. Voluptates facere dolorum officia pariatur magni.
                Repellendus exercitationem voluptas quibusdam reprehenderit autem quos nisi corporis optio magni! Reiciendis iure ea magnam. Deleniti modi ipsam nam quasi cupiditate laborum debitis! Repellat odio, repudiandae corporis officia consectetur asperiores.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quo ab voluptate perspiciatis similique quod mollitia modi omnis! Maxime porro ipsum culpa ratione vel earum omnis, doloribus optio nihil! Ipsa.
                Velit assumenda vitae, explicabo aliquam hic facere incidunt nam cumque quaerat minus, cupiditate adipisci. Iusto ea debitis omnis libero cum in totam natus error exercitationem, ad quas consequuntur odio cumque.
                Amet expedita ipsam aliquid cumque praesentium, velit, laboriosam accusamus a, temporibus veritatis ipsum consequatur soluta doloribus rerum! Tempora, pariatur? Excepturi nobis doloremque sunt magni quam deserunt exercitationem quisquam sequi consectetur?
                Obcaecati illo quis consectetur sed expedita, sunt beatae quia, ipsa ut molestias ex sit voluptates quasi, molestiae qui corporis distinctio animi nostrum reiciendis ea. Voluptates facere dolorum officia pariatur magni.
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>

            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
    
<?php
    include_once("templates/footer.php");
?>