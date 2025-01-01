<div class="row post p-1">
    <div class="col-3 bg-light text-center">
        <?php if (isset($_SESSION['user_name'])) : ?>

            Hi <?= $_SESSION['user_name'] ?>

        <?php endif; ?>
    </div>
    <div class ="col-9 text-start">
        <div class="muted"><?=get_date($comment->date)?></div>
        <p><?=esc($comment->comment)?></p>
    </div>
    <div>
        <a href="<?=ROOT?>/comment/<?=$comment->id?>">
            <button class="btn-sm m1 btn btn-primary">Comments</button>
    </a>
    </div>
</div>