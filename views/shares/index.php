<div class="container">
           <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_URL; ?>php.dev/shares/add">What's on your mind</a>
        <?php endif; ?>
        <?php foreach($viewmodel as $item) : ?>
            <div class="col-md-9 col-share">
                <div class="well col-share">
                    <h2><?php echo $item['title']; ?></h2>
                    <small><?php echo $item['created_date']; ?></small>
                    <hr />
                    <p><?php echo $item['body']; ?></p>
                    
                    <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Visit Website</a>
                    <br><hr>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        <?php endforeach; ?>
    
</div>