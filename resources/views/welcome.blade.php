@extends('layouts.master')
@section('contenu')
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/africain/rebelle.png">
                        <h5><a style="background:grey; color:white;" href="#">Roman Africain</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/cuisine/cuisine_durable.jpg">
                        <h5><a style="background:grey; color:white;" href="#">Cuisine</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/Bande/diable.jpg">
                        <h5><a style="background:grey; color:white;" href="#">Bande Dessinée</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/humour/inutile.jpg">
                        <h5><a style="background:grey; color:white;" href="#">Humour</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/religion/createur.jpg">
                        <h5><a style="background:grey; color:white;" href="#">Religion & Spiritualité</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produit en vedette</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Tous</li>
                        <li data-filter=".africain">Roman Africain</li>
                        <li data-filter=".scolaire">Scolaire</li>
                        <li data-filter=".jeunesse">Jeunesse</li>
                        <li data-filter=".sport">Sport Loisir & Vie Pratique</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix africain">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/africain/climbie.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Climbié est le premier roman ivoirien. Il paraît en 1956 et raconte la trajectoire du jeune Climbié, depuis son village natal jusqu’à Grand Bassam, puis à Bingerville, Dakar et enfin Abidjan. </a></h6>
                        <h5>4 030F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix jeunesse">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/jeunesse/hercule.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Auteur: Grenier Christian, Editeur: Rageot, Parution: 17 Mars 2021</a></h6>
                        <h5>4 700F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix africain">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/africain/ebinto.jfif">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Cette œuvre fut publiée en 1975 par la Maison d’édition Hatier. Ce livre fut écrit par Amadou Koné. <p>Ce jour-là seulement, je compris qu'il est des femmes qui sont faites pour éblouir, pour allumer les passions et qui sont sources de souffrances, puis qu'il en est d'autres qui, bien que discrètes, assurent à l'homme une vie tranquille avec non moins de plaisir...</p></a></h6>
                        <h5>4 000F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix scolaire">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/scolaire/hugo.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Auteur(s): Victor Hugo, Sylvain Ledda, Editeur: Flammarion
                            "Qu'est-ce que les Contemplations ? C'est ce qu'on pourrait appeler, si le mot n'avait quelque prétention, les Mémoires d'une âme" (Préface)</a></h6>
                        <h5>3 500F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sport">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/sport/tai.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Auteur: Jean-Claude Sapin, Editeur: Ellebore</a></h6>
                        <h5>10 400F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix jeunesse">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/jeunesse/reine.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Editeur: Hachette Jeunesse Collection Disney, Parution: 24 Mars 2021</a></h6>
                        <h5>3 250F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix scolaire">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/scolaire/physique.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Auteur(s): Renaud Pochet, Wenqi Shu-Quartier-dit-Maire, Editeur: Ellipses
                            Les épreuves corrigées 2018, 2019 & 2020 des concours des grandes écoles scientifiques: Mines-Ponts, Centrale-Supélec, CCINP, e3a.</a></h6>
                        <h5>18 525F CFA</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix sport">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/sport/bleu.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">La vie secrète de l'Equipe de France, Auteur : Philippe Tournon, Editeur: Albin Michel</a></h6>
                        <h5>14 200F CFA</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/livre.jfif" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/biblio.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Derniers Produits</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/africain/climbie.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Climbié est le premier roman ivoirien. Il paraît en 1956 et raconte la trajectoire du jeune Climbié, depuis son village natal jusqu’à Grand Bassam, puis à Bingerville, Dakar et enfin Abidjan. </h6>
                                    <span>4 030F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/Bande/lisa.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Frey/Goust, Editeur: Futuropolis, Parution: 7 Avril 202</h6>
                                    <span>13 000F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/jeunesse/hercule.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Grenier Christian, Editeur: Rageot, Parution: 17 Mars 2021</h6>
                                    <span>4 700F CFA</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/dico/anglais.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Monnier Nolwena
                                        <p>Parution: Octobre 2020</p></h6>
                                    <span>12 900 FCFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/humour/enfant.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Vous tenez entre les mains un concentré de bonne humeur à partager sans modération.</h6>
                                    <span>3 200F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/info/html.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Pour les designers web, la conception des sites web passe par la maîtrise des langages fondateurs que sont l'HTML et les CSS</h6>
                                    <span>17 225F CFA</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Produits les mieux notés</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/jeunesse/yakari.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Christophe Lambert, Editeur: Bayard Jeunesse, Parution: 24 Mars 2021</h6>
                                    <span>3 835F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/info/ecommerce.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur(s): Xavier Bouvier, Olivier Andrieu, Philippe Usseglio-Nanot, Patrick Puillandre, Michelle Jean-Baptiste
                                        Editeur: Nathan</h6>
                                    <span>8 060F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/perso/reve.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Patrick Lemoine,
                                        Editeur: Pocket</h6>
                                    <span>5 135F CFA</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/perso/crois.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Rut Nieves,
                                        Editeur: Cherche Midi</h6>
                                    <span>11 050F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/scolaire/classes.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Collectif,
                                        Editeur: Onisep</h6>
                                    <span>5 850F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/sport/tai.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Jean-Claude Sapin, Editeur: Ellebore</h6>
                                    <span>10 400F CFA</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Produits Revus</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/sport/cyclisme.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Jean-Luc Gatellier,
                                        Editeur: Solar</h6>
                                    <span>16 100F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/sport/puissance.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Mike McGuigan
                                        Editeur: 4 Trainer</h6>
                                    <span>19 400F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/info/office.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur : Collectif
                                        Editeur : Reynald Goulet
                                        Cours et exercices</h6>
                                    <span>38 350F CFA</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/dico/signe.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur(s) : Thomas Tessier, Olivier Marchal,
                                        Editeur : Rue des enfants</h6>
                                    <span>7 150F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/humour/fils.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Laurent Gaulet,
                                        Editeur: First
                                        Monsieur et Madame Ailapoubelle ont un fils. Comment l'appellent-ils ? David Ailapoubelle (T'as vidé la poubelle ? )</h6>
                                    <span>2 560F CFA</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/religion/marie.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Auteur: Monique Durand-Wood,
                                        Editeur: Salvator
                                        Adèle, la narratrice du livre, se convertit à la foi chrétienne après un parcours en milieu athée</h6>
                                    <span>11 050F CFA</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i>Par Marie-Anne Sburlino -31 mars 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">ACTUALITÉS LITTÉRAIRES AVRIL 2021</a></h5>
                        <p>Le sondage Odoxa, réalisé par le Syndicat National du Livre en décembre 2020, révèle qu’un tiers des Français s’est davantage mise à lire, les plus jeunes (18-25 ans) en tête. En temps de crise, le livre est un refuge. Voici quelques valeurs essentielles pour ce mois d’avril.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog2.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i>23 mars 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Les six finalistes du Prix Orange du Livre en Afrique 2021 dévoilés !</a></h5>
                        <p>Pour sélectionner les meilleurs livres parmi les 74 ouvrages présentés par 44 éditeurs issus de 16 pays d’Afrique, 5 comités de lecture se sont mobilisés en Guinée, au Cameroun, en Côte d’Ivoire, au Mali et en Tunisie. Constitués de lecteurs passionnés, ces comités rassemblent des professionnels – critiques littéraires, universitaires, libraires… – mais aussi des grands lecteurs salariés du groupe Orange dans ces pays.
                            Les six finalistes du Prix Orange du Livre en Afrique 2021 sont :
                            Ahmed GASMIA, Les peuples du ciel, Algérie/
                            Ibrahima HANE, L’écume du temps, Sénégal/
                            Monique ILBOUDO, Carrefour des Veuves, Congo/
                            Davina ITTOO, Misère, Maurice/
                            Sami MOKKADEM, Le secret des Barcides, Tunisie/
                            Loubna SERRAJ, Pourvu qu’il soit de bonne humeur, Maroc </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog3.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i>08 avril 2021</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Comment mettre en place des habitudes de lecture agréables ?</a></h5>
                        <p>Mettre en place des habitudes de lecture agréables Créez ou trouvez un bon environnement de lecture. Prenez le temps de lire. Gardez toujours votre livre avec vous. Conservez une liste de lecture. Suivez les écrivains et les séries que vous aimez. Socialisez en vous servant de la lecture.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
