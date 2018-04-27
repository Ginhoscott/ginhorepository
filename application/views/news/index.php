<!doctype html>

<html>

    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>">
    </head>

    <body></br></br>
        <!--div class="container">
            <h3><?php //echo $title; ?></h3>
        </div-->
 
<table class="table table-bordered table-responsive">
    <tr>
        <td><strong><center>TITRE</center></strong></td>
        <td><strong><center>PRIX</center></strong></td>
        <td><strong><center>QUANTITE</center></strong></td>
        <td><strong><center>STOCK</center></strong></td>
        <td><strong><center>DESCRIPTION</center></strong></td>
        <td><strong><center>ACTION</center></strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['prix']; ?></td>
            <td><?php echo $news_item['quantite']; ?></td>
            <td><?php echo $news_item['stock']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td>
                <center><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn btn-primary">AFFICHER</a> 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>" class="btn btn-info">MODIFIER</a> 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Vous voulez vraiment le supprimer?')" class="btn btn-danger">SUPPRIMER</a></center>
            </td>
        </tr>
<?php endforeach; ?>
</table>

    </body>
</html>    