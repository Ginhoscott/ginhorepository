<!doctype html>
    <html>
        <head>

        </head>

        <body>

            <div class="container">
                <h2><u><?php echo $title; ?><u></h2>
            </div>
 
            <?php echo validation_errors(); ?>
 
            <?php echo form_open('news/create'); ?></br></br> 
    
        <div class="form-group">

            <label for="title" class="col-md-2">Titre</label>
            <div class="col-md-8">
                <input type="input" name="title" size="50" class="form-control"/>
            </div></br><hr>

            <label for="prix" class="col-md-2">Prix</label>
            <div class="col-md-8">
                <input type="input" name="prix" size="50" class="form-control"/>
            </div></br><hr>

            <label for="quantite" class="col-md-2">Quantite</label>
            <div class="col-md-8">
                <input type="input" name="quantite" size="50" class="form-control"/>
            </div></br><hr>

            <label for="stock" class="col-md-2">Stock</label>
            <div class="col-md-8">
                <input type="input" name="stock" size="50" class="form-control"/>
            </div></br><hr>

            <label for="text" class="col-md-2">Desciption</label>
            <div class="col-md-8">
                <textarea name="text" rows="3" cols="47" class="form-control"></textarea>
            </div></br><hr>

        </div></br><hr>
        
        <div class="form-group"><input type="submit" name="submit" value="CREER" class="btn btn-info"/></div>
        
</form>
    
        </body>
    </html>