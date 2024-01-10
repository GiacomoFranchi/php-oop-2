<div class="container">
    <div class="row row-cols-3">
        <?php foreach ($catalogo as $product){ ?>
        <div class="col"> 
            <div class="card">
                <div class="card-body">
                    <span>Nome Articolo:</span>
                   <h2> <?php echo $product->get_name() ?> </h2>
                   <span>Categoria:</span>
                   <h4><?php echo $product->get_type() ?></h4>
                   <p></p><?php echo $product->getAnimal() ?> <i class="<?php echo $product->getIcon()?>"> </i></p>
                   <span>Prezzo:</span>
                   <h4><?php echo $product->get_price() ?>£</h4>
                   <h4>Pezzi disponibili:<?php echo $product->get_number() ?> </h4>
            
                <?php if(is_a($product, 'Cuccia')){?>
                    <span>MOdello cuccia</span>
                    <p><?php echo $product->get_modello() ?></p>
                    <span>Dimensioni:</span>
                    <p><?php echo $product->get_dimensioni() ?></p>
                    <span>Colore:</span>
                    <p><?php echo $product->get_colore() ?></p>

                    <?php } else if(is_a($product, 'Food')){?>
                        <span>Data di scadenza:</span>
                        <p><?php echo $product->get_food_scad() ?></p>
                        
                    <?php } else if(is_a($product, 'Game')){?>
                        <span>Forma:</span>
                        <p><?php echo $product->get_forma() ?></p>
                        <span>Colore:</span>
                        <p><?php echo $product->get_colore() ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>