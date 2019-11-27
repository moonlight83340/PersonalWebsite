<?php $this->setLayout('layout', ['title' => 'WebManga - FAQ', 'keywords' => 'WebManga, FAQ, web, manga, anime, serie, light novel', 'description' => 'Donnez votre avis sur les mangas, light novel, anime et découvrez l\'avis de vos contacts sur Web Manga.De la lecture en ligne et des wallpapers sont aussi disponible sur Web Manga.']); ?>
<div id="page-content-wrapper" >
    <div class="container-fluid">
        <div class="row">
            <div id="title_faq" class="text-center" > 
                <h2>Questions fréquentes !</h2>
                <p>
                    Questions les plus fréquemment posées par les nouveaux Mang'addict
                </p>
            </div>
            <hr>
            <div id="faq" class="col-md-6 col-md-offset-3">
                <ul>
                    <li>
                        <a href="#faq_who">Qui êtes vous ?</a>
                    </li>
                    <li>
                        <a href="#faq_finance">Comment est financé le site ? Sera-t-il payant ?</a>
                    </li>
                    <li>
                        <a href="#faq_utility">Qu'apporte Webmanga par rapport aux autres sites ?</a>
                    </li>
                    <li>
                        <a href="#faq_feedback">J'ai repéré une erreur, un doublon, je fais quoi ?</a>
                    </li>
                    <li>
                        <a href="<?= \PoireauFramework\Helper\Url::base().'contact'?>">votre question n’est pas là ? Cliquez ici pour nous l'envoyer</a>
                    </li>
                </ul>
                <hr>
                <div id="faq_who">
                    <h4>1. Qui êtes vous ?</h4>
                    <p>
                        Nous sommes un groupe de passionnés d'informatique et/ou de mangas et nous voulons partager notre passion avec 
                        vous au travers de ce site.
                        <br/>
                        Pour avoir plus d'informations, rendez vous <a href='<?= \PoireauFramework\Helper\Url::base().'about'?>'>ici</a>
                    </p>
                </div>
                <hr>
                <div id="faq_finance">
                    <h4>2. Comment est financé le site ? Sera-t-il payant ?</h4>
                    <p>
                        <strong>Webmanga</strong> est un service <strong>gratuit</strong>, il est financé par les dons et les liens partenaires. Faire tourner <strong>Webmanga</strong>, 
                        cela coûte de l'argent pour le serveur ou le nom de domaine.
                        <br/>
                        Ce sont les revenus des liens partenaires ainsi que les dons qui nous permettront de vous proposer <strong>Webmanga</strong> toujours <strong>gratuitement</strong>. 
                        Nous ne vendrons jamais vos données personnelles.
                    </p>
                </div>
                <hr>
                <div id="faq_utility">
                    <h4>3. Qu'apporte Webmanga par rapport aux autres sites ?</h4>
                    <p>
                        <strong>Webmanga</strong> permet de regrouper plusieurs univers liés tel que les <strong>Mangas</strong>, <strong>Animes</strong>,
                        <strong>Film d'Animation</strong> et même les <strong>Light Novels</strong>.
                        <br/>
                        Il permet la <strong>notation</strong>, la <strong>critique</strong> d'oeuvres et permet aussi de gérer sa <strong>collection</strong>.
                        <br/>
                        Tout cela en mettant au centre la <strong>communauté</strong> qui contribue au site en ajoutant de nouvelles oeuvres, qui peut faire 
                        part de son avis au travers des <strong>critiques</strong> mais aussi en leurs permettant de rencontrer des personnes ayant les même goûts.
                    </p>
                </div>
                <hr>
                <div id="faq_feedback">
                    <h4>4. J'ai repéré une erreur, un doublon, je fais quoi ?</h4>
                    <p>
                        D'abord, Bravo à vous ! Si vous avez repéré une erreur sur une fiche d'oeuvre, il suffit d'aller sur la fiche en question,
                        puis de cliquer sur le lien "signaler".
                        <br/>
                        Pour d'autres erreurs, merci de nous contacter directement par le formulaire de contact 
                        <a href="<?= \PoireauFramework\Helper\Url::base().'contact'?>">ici</a>, en mettant en objet "Bugs".
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>