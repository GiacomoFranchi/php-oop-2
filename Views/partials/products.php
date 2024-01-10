<div class="container">
    <div class="row row-cols-3">
        <?php foreach ($catalogo as $product){ ?>
        <div class="col"> 
            <div class="card">
                
                <div class="card-body">
                   <h2> <?php echo $product->get_name() ?> </h2>
                   <p></p><?php echo $product->getAnimal() ?> <i class="<?php echo $product->getIcon()?>"> </i></p>
                   <h4><?php echo $product->get_type() ?></h4>
                   <h4><?php echo $product->get_price() ?>£</h4>
            
                <?php if(is_a($product, 'Cuccia')){?>
                    <p><?php echo $product->get_modello() ?></p>
                    <p><?php echo $product->get_dimensioni() ?></p>
                    <p><?php echo $product->get_colore() ?></p>

                    <?php } else if(is_a($product, 'Food')){?>
                        <p><?php echo $product->get_food_scad() ?></p>
                        
                    <?php } else if(is_a($product, 'Game')){?>
                        <p><?php echo $product->get_forma() ?></p>
                        <p><?php echo $product->get_colore() ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>