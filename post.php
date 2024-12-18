<?PHP 
    include_once(" templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $cirrente_post;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;            
            }
        }


    }
?>
    <main id="post-containner">
        <div class="contente-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>";>
            </div>
            <p class="content-post">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore doloremque facere sapiente quasi, esse fuga. Quia quis eaque itaque atque, omnis possimus eos tempore dignissimos repellat laboriosam, molestiae optio excepturi?*5</p>
        
            <p class="content-post">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore doloremque facere sapiente quasi, esse fuga. Quia quis eaque itaque atque, omnis possimus eos tempore dignissimos repellat laboriosam, molestiae optio excepturi?*5</p>
      
        </div>
    </main>
    <aside id="cont-container">
        <h3 id="tags-titke">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
              <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list"></ul>
        <?php foreach($categories['tags'] as $category): ?>
              <li><a href="#"><?= $category  ?></a></li>
            <?php endforeach; ?>
        
    </aside>
<?php
    include_once("templtes/footer.php")
?>