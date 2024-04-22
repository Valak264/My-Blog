<main>
<div class="container">
    <div class="row">
        <div class="col-sm-8 mt-4">
            <?php if ($articles !== []) { ?>
                <?php foreach ($articles as $article) { ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h3><?php echo esc($article['title']); ?></h3>
                    <p><?php echo substr(esc($article['article']), 0, 200); ?>... <a href="/articles/<?php echo $article['id']; ?>">Read more</a></p>
                </div>
            </div>
            <?php } ?>
            <?php } else {?>
                <h3>Article still empty</h3>
                <p>Come back again later </p>
            <?php } ?>
        </div>
        <div class="col-sm-4 mt-4">
            <div class="card">
                <div class="card-body">
                    Coming soon
                </div>
            </div>
        </div>
    </div>
</div>
</main>