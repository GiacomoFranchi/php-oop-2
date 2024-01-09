<div class="container">
    <div class="row row-cols-3">
        <?php foreach ($products as $product){ ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                   <h1><?php echo $product->$get_type->type ?> </h1>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>