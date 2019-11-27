<?php $this->setLayout('layout', ['title' => 'WebManga - page non trouvée', 'keywords' => 'WebManga, page non trouvée', 'description' => 'Donnez votre avis sur les mangas, light novel, anime et découvrez l\'avis de vos contacts sur Web Manga.De la lecture en ligne et des wallpapers sont aussi disponible sur Web Manga.','additionnalCSS' => '/Resources/Bootstrap/css/error404.css']); ?>
<?php
    $lienImage = array('http://image.noelshack.com/fichiers/2016/05/1454606016-opm404.jpg',
                        'http://image.noelshack.com/fichiers/2016/05/1454606016-sao404.jpg',
                        'http://image.noelshack.com/fichiers/2016/05/1454606016-judge404.jpg',
                        'http://image.noelshack.com/fichiers/2016/05/1454622540-monster404.jpg',
                        'http://image.noelshack.com/fichiers/2016/05/1454692108-berserk404.jpg',
                        'http://image.noelshack.com/fichiers/2016/05/1454694250-berserk404-2.jpg',
                        'http://image.noelshack.com/fichiers/2016/21/1464287772-sailormoon404.jpg');
?>
<div class="container content">
	<div class="row">
        <div class='text-center'>
            <div class="col-lg-12">
                <h1>404</h1>
		<h3>page introuvable</h3>
		<hr class="featurette-divider">
            </div>
        </div>	
    </div>
    <div class="row">
        <div class='text-center'>
            <div class="col-lg-12">
                <a href="<?= \PoireauFramework\Helper\Url::base()?>"><img src="<?= $lienImage[rand(0, sizeof($lienImage)-1)]?>" class="img-responsive" alt="WebManga 404 error"></a>
            </div>
			<a class="btn btn-default" href="<?= \PoireauFramework\Helper\Url::base()?>">Retour</a>
        </div>
    </div>
</div>