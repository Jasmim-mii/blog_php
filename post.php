<?php 
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>
    <main id="post-container">
        <div class='content-container'>
            <h1 id='main-title'><?=$currentPost['title']?></h1>
            <p id='post-description'><?=$currentPost['description']?></p>
            <div class="img-container"><img src='<?= $BASE_URL?>/img/<?=$post['img']?>' alt='<?= $currentPost['title']?>'></div>
            <p class='post-content'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora vel eveniet nisi illum incidunt dolore! Error rerum ipsam aliquid, facere autem debitis magnam, dolore eligendi repudiandae ducimus quaerat? Asperiores, sit!
            Dolores, accusantium in. Aspernatur earum mollitia minima alias quas modi provident maiores iste cupiditate, accusamus odit fuga. Vitae natus dolores dolore tempora iste suscipit iusto! Libero magni quam cupiditate nihil.
            Ea corporis, hic quo vitae ex esse totam labore nostrum! Nam fugit, deserunt saepe in itaque officia? Accusantium veritatis voluptatum error sunt quod, suscipit repudiandae, illum magni et nulla qui.
            Quo, quos libero? Fugiat, provident saepe! Debitis illum sint, alias autem aspernatur similique excepturi mollitia, pariatur cumque quidem aliquam quae exercitationem sit aut ex sequi rerum ipsum, expedita at delectus.
            Natus cupiditate praesentium eveniet modi. Earum illum corporis, iste laudantium quae sed numquam cum ex blanditiis eius libero, quo maxime magni possimus temporibus veniam cumque architecto asperiores perferendis modi aspernatur.
            Minus quam deleniti reprehenderit aliquam perspiciatis, autem, assumenda recusandae consectetur non incidunt rerum unde, hic quibusdam maiores numquam veritatis corrupti laboriosam error delectus sint quo vel totam eaque officiis! Repudiandae?
            Architecto id sapiente repellendus deserunt aliquid ducimus omnis, fugiat inventore quisquam ex reprehenderit cum vel laborum. Tempora id maiores nam quo at vitae ab dolor saepe ut illo, distinctio deserunt?
            Libero veritatis aspernatur quasi a voluptatem aliquid? Nobis sint dolorem architecto quaerat perspiciatis? Nihil, suscipit accusantium rerum in quis inventore! Eveniet, ratione quo blanditiis nesciunt delectus animi laudantium! Dicta, exercitationem.
            Quas beatae corporis animi cumque autem alias sint, iusto nulla laborum voluptatem atque nam illo tempore! Aspernatur sunt fugit nisi quos? Rem quam rerum, repudiandae ipsam expedita perspiciatis? Quo, ipsa!
            Facere eaque quisquam itaque perspiciatis unde quos porro nemo ullam necessitatibus, doloribus iste tenetur accusamus praesentium ad sit eum. Quasi amet quo accusamus error fugit nihil illum asperiores enim? Aut.
            Inventore pariatur quibusdam quas cupiditate possimus, eveniet dolorum deleniti, aliquam enim quasi perspiciatis unde incidunt ad? Odit, iusto unde. Pariatur dicta assumenda nostrum expedita! Beatae doloribus in consequuntur eius earum!
            Aliquam libero, nesciunt odio laboriosam perspiciatis quam delectus ratione repudiandae minus similique distinctio beatae commodi porro minima dolores debitis totam magni animi cupiditate voluptas facere ipsam placeat! Unde, reiciendis quisquam.
            Eius consectetur aliquam suscipit vel sapiente beatae doloribus hic quasi quos, pariatur exercitationem in quo sint qui voluptatum enim. Aliquam, placeat nulla? Enim, quae reiciendis exercitationem inventore quibusdam quia architecto.
            Excepturi aut explicabo a, minima nemo voluptatem facilis eius molestiae ratione accusamus doloremque hic adipisci sunt, repudiandae quis quod voluptatum labore nam placeat ut? Quae quibusdam dolores dolore natus optio.
            Itaque labore quibusdam id ut autem rem doloribus, laudantium dolor voluptates impedit provident nam ipsum necessitatibus cumque voluptas facere amet porro! Quam ratione deserunt molestiae porro minima impedit temporibus aliquam!
            </p>
            <p class='post-content'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora vel eveniet nisi illum incidunt dolore! Error rerum ipsam aliquid, facere autem debitis magnam, dolore eligendi repudiandae ducimus quaerat? Asperiores, sit!
            Dolores, accusantium in. Aspernatur earum mollitia minima alias quas modi provident maiores iste cupiditate, accusamus odit fuga. Vitae natus dolores dolore tempora iste suscipit iusto! Libero magni quam cupiditate nihil.
            Ea corporis, hic quo vitae ex esse totam labore nostrum! Nam fugit, deserunt saepe in itaque officia? Accusantium veritatis voluptatum error sunt quod, suscipit repudiandae, illum magni et nulla qui.
            Quo, quos libero? Fugiat, provident saepe! Debitis illum sint, alias autem aspernatur similique excepturi mollitia, pariatur cumque quidem aliquam quae exercitationem sit aut ex sequi rerum ipsum, expedita at delectus.
            Natus cupiditate praesentium eveniet modi. Earum illum corporis, iste laudantium quae sed numquam cum ex blanditiis eius libero, quo maxime magni possimus temporibus veniam cumque architecto asperiores perferendis modi aspernatur.
            Minus quam deleniti reprehenderit aliquam perspiciatis, autem, assumenda recusandae consectetur non incidunt rerum unde, hic quibusdam maiores numquam veritatis corrupti laboriosam error delectus sint quo vel totam eaque officiis! Repudiandae?
            Architecto id sapiente repellendus deserunt aliquid ducimus omnis, fugiat inventore quisquam ex reprehenderit cum vel laborum. Tempora id maiores nam quo at vitae ab dolor saepe ut illo, distinctio deserunt?
            Libero veritatis aspernatur quasi a voluptatem aliquid? Nobis sint dolorem architecto quaerat perspiciatis? Nihil, suscipit accusantium rerum in quis inventore! Eveniet, ratione quo blanditiis nesciunt delectus animi laudantium! Dicta, exercitationem.
            Quas beatae corporis animi cumque autem alias sint, iusto nulla laborum voluptatem atque nam illo tempore! Aspernatur sunt fugit nisi quos? Rem quam rerum, repudiandae ipsam expedita perspiciatis? Quo, ipsa!
            Facere eaque quisquam itaque perspiciatis unde quos porro nemo ullam necessitatibus, doloribus iste tenetur accusamus praesentium ad sit eum. Quasi amet quo accusamus error fugit nihil illum asperiores enim? Aut.
            Inventore pariatur quibusdam quas cupiditate possimus, eveniet dolorum deleniti, aliquam enim quasi perspiciatis unde incidunt ad? Odit, iusto unde. Pariatur dicta assumenda nostrum expedita! Beatae doloribus in consequuntur eius earum!
            Aliquam libero, nesciunt odio laboriosam perspiciatis quam delectus ratione repudiandae minus similique distinctio beatae commodi porro minima dolores debitis totam magni animi cupiditate voluptas facere ipsam placeat! Unde, reiciendis quisquam.
            Eius consectetur aliquam suscipit vel sapiente beatae doloribus hic quasi quos, pariatur exercitationem in quo sint qui voluptatum enim. Aliquam, placeat nulla? Enim, quae reiciendis exercitationem inventore quibusdam quia architecto.
            Excepturi aut explicabo a, minima nemo voluptatem facilis eius molestiae ratione accusamus doloremque hic adipisci sunt, repudiandae quis quod voluptatum labore nam placeat ut? Quae quibusdam dolores dolore natus optio.
            Itaque labore quibusdam id ut autem rem doloribus, laudantium dolor voluptates impedit provident nam ipsum necessitatibus cumque voluptas facere amet porro! Quam ratione deserunt molestiae porro minima impedit temporibus aliquam!
            </p>
        </div>
        <aside id='nav-container'>
            <h3 id='tags-title'>Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href='#'><?= $tag ?></a></li>
                <?php endforeach ?>
            </ul>
            <h3 id='categories-title'>Categorias</h3>
            <ul id='categories-list'>
                <?php foreach($categories as $category): ?>
                    <li><a href='#'><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>
<?php 
  include_once("templates/footer.php");
?>
