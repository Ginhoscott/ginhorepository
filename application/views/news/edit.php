            
            <div class="container">
                <h2><u><?php echo $title; ?><u></h2>
            </div>
 
 
            <?php echo validation_errors(); ?>
 
            <?php echo form_open('news/edit/'.$news_item['id']); ?></br></br>
    
        <div class="form-group">
            <label for="title" class="col-md-2">Title</label></hr>

            <div class="col-md-8">
                <input type="input" name="title"  value="<?php echo $news_item['title'] ?>" class="form-control"/>
            </div></br><hr>

            <label for="prix" class="col-md-2">Prix</label>
            <div class="col-md-8">
                <input type="input" name="prix" value="<?php echo $news_item['prix'] ?>" class="form-control" />
            </div></br><hr>
            
            <label for="quantite"class="col-md-2">Quantite</label>
            <div class="col-md-8">
                <input type="input" name="quantite" value="<?php echo $news_item['quantite'] ?>" class="form-control" class="form-control" />
            </div></br><hr>
            
            <label for="stock" class="col-md-2">Stock</label>
            <div class="col-md-8">
                <input type="input" name="stock" value="<?php echo $news_item['stock'] ?>" class="form-control" />
            </div></br><hr>
            
            <label for="text" class="col-md-2">Text</label>
            <div class="col-md-8">
                <textarea name="text" rows="3" cols="47" class="form-control"><?php echo $news_item['text'] ?></textarea>
            </div></br><hr>
        </div></br><hr>
        
        <div class="form-group"> <input type="submit" name="submit" value="MODIFIER" class="btn btn-info" /></div>
       
</form>