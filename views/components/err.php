    <?php if(isset($_COOKIE['err'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_COOKIE['err'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    <?php endif ?>