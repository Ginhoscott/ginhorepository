
<?php
echo '<div class="container"><h2><u>'.$news_item['title'].'</u></h2></div><hr>';
echo '<label for="prix" class="col-md-2"><u>PRIX : </u></label> '.$news_item['prix']." Ar ".'</br></br><hr>';
echo '<label for="quantite" class="col-md-2"><u>QUANTITE : </u></label>'.$news_item['quantite'].'</br></br><hr>';
echo '<label for="stock" class="col-md-2"><u>STOCK : </u></label>'.$news_item['stock'].'</br></br><hr>';
echo '<label for="text" class="col-md-2"><u>DESCRIPTION : </u></label>'.$news_item['text'].'</br></br><hr>';