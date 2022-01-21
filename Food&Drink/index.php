<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Food & Drink</title>
        <link rel="stylesheet" href="reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="FrontEnd.css">
        <link rel="icon" type="image/svg+xml" href="food-and-drink.svg" class="favicon">
    </head>
    <header id="header">
        <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark" style="min-height: 8vh;">
            <a href="#" class="navbar-brand"><img width="40" src="food-and-drink.svg" style="height: fit-content;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a href="#menu" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#prod" class="nav-link">Producteurs Locaux</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#notice" class="nav-link">Avis</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <body id="container" style="background-color: white;">
        <section id="menu">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-success" id="menu-legume-tab" data-toggle="tab" href="#menulegume" role="tab" aria-controls="menu-legume-tab" aria-selected="true">Menu Légume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" id="menu-viande-tab" data-toggle="tab" href="#menuviande" role="tab" aria-controls="menu-viande-tab" aria-selected="false">Menu Viande</a>
                </li>
                <li class="nav-item expand-sm">
                    <a class="nav-link disabled" id="tbd-tab" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">Prochainement Disponible</a>
                </li>
            </ul>
            <h2 class="d-flex justify-content-center" style="margin-top :2vh;">Nos Menus</h2>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="menu-legume" role="tabpanel" aria-labelledby="menu-legume-tab" id="menulegume">
                        <div class="card-body d-flex justify-content-around">
                            <!--div class="d-flex justify-content-around"-->
                                <div class="card1 col-xs-3" style="width: 18rem;">
                                    <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Entrée</p>
                                    </div>
                                </div>
                                <div class="card2 col-xs-3" style="width: 18rem;" >
                                    <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Plat de résistance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div class="card3 col-xs-3" style="width: 18rem;">
                                    <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Dessert</p>
                                    </div>
                                </div>
                                <div class="card4 col-xs-3" style="width: 18rem;">
                                    <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Boisson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="tab-pane fade" id="menu-viande" role="tabpanel" aria-labelledby="menu-viande-tab">
                        <div class="card-body d-flex justify-content-around">
                            <!--div class="d-flex justify-content-around"-->
                            <div class="card1 col-xs-3" style="width: 18rem;">
                                <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Entrée</p>
                                </div>
                            </div>
                            <div class="card2 col-xs-3" style="width: 18rem;" >
                                <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Plat de résistance</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div class="card3 col-xs-3" style="width: 18rem;">
                                <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Dessert</p>
                                </div>
                            </div>
                            <div class="card4 col-xs-3" style="width: 18rem;">
                                <img class="card-img-top" src="https://timbuktoo.name/wp-content/uploads/2016/08/Placeholder-300-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Boisson</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="tbd" role="tabpanel" aria-labelledby="tbd-tab">
                        </div>
                    </div>
                </div>
        </section>
        <section id="prod">
            <div class="">
                <h2 class="d-flex justify-content-center">Nos Valeurs :</h2>
                <p class="p-3 mb-2 bg-dark text-white" style="margin: vh;">
                    Nos Valeurs : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum venenatis magna, et faucibus ante porta et. Donec malesuada nibh at mattis dictum. Pellentesque faucibus pulvinar est at lobortis. Curabitur pretium fermentum tortor, et imperdiet tellus tincidunt et. Aliquam laoreet, mi eget facilisis iaculis, velit nibh tristique tortor, et pulvinar nulla eros fermentum nunc. Aenean vel aliquam ligula. Ut et mauris nec dolor ultricies pharetra. Integer consectetur quam ac mi porttitor iaculis eu vitae libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec justo nunc, accumsan sit amet erat eu, lacinia facilisis dolor. Proin vehicula ante quis velit ultricies tempus. Donec in justo tellus. Nulla rutrum turpis a vulputate pretium. Mauris elit massa, venenatis et tortor sed, lacinia venenatis eros. Ut mattis id libero sed congue. Etiam malesuada enim egestas, consectetur lectus nec, volutpat purus. Praesent fringilla nunc sit amet porta congue. Curabitur quis odio non nisi pharetra ultrices. Nulla facilisi. Nullam vitae sagittis velit. Sed scelerisque nibh in sagittis venenatis. Proin convallis vulputate diam. Duis eu varius sem. Maecenas ipsum nibh, interdum pellentesque mollis at, accumsan sit amet nulla. Nunc nulla arcu, finibus auctor interdum sit amet, lacinia nec eros. Sed iaculis augue quis nisl rutrum, fringilla pharetra felis posuere.
                </p>
                <div class="d-flex justify-content-around bg-dark ">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item disabled">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="notice">
            <div>
                <h2 class="d-flex justify-content-center bg-dark">Nos Avis !<h2>
                    <a href="https://www.guide.michelin.com/fr/fr/bretagne/rennes/restaurant/la-fontaine-aux-perles"> Le Guide Michelin </a>
                    <a href="https://www.tripadvisor.fr/Restaurant_Review-g187103-d2178028-Reviews-La_Fontaine_aux_Perles-Rennes_Ille_et_Vilaine_Brittany.html"> Tripadvisor </a>
                    <a href="https://www.fr.gaultmillau.com/restaurants/la-fontaine-aux-perles"> Gault Millau</a>
            </div>
        </section>
        <section id="contact">
            <div>
                <form>
                    <div class="contact-container">
                        <div class="d-flex justify-content-center bg-dark">
                            <div class="col-8 m-4">
                                <form action="contact.php" method="POST">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <h2>Contactez-nous ! </h2>
                                        </div>
                                        <div class="d-flex">
                                            <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                                        </div>
                                        <br/>
                                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                                        <br/>
                                        <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                                        <br/>
                                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="d-flex col-xs-3 align-item-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252797.71242954797!2d-35.16714414320145!3d-8.105121897172953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f2b37566bb1%3A0x2a2153f1c78383e!2sFood%20%26%20Drinks!5e0!3m2!1sfr!2sfr!4v1641998165337!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; Food & Drink &copy; Mention Légal - Condition Général de Vente</small>
        </div>
    </footer>
</html>