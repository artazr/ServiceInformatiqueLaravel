@extends('layouts.template')

@section('contenu')
    <header id="myCarousel" class="carousel slide">
        @include('../includes.header')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Besoin d'un site web efficace, design et responsive ?
                </h2>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Design</h4>
                    </div>
                    <div class="panel-body">
                        <p>Tous les sites réalisés par nos soins sont adaptés a vos envies. Que ce soit flat, matérial ou autre, nous vous satisferons grâce à notre savoir faire et notre experience.  </p>
                        <img class="img-responsive img-portfolio" src="http://beandigitalmedia.com/wp-content/uploads/2016/02/web-design-services-surrey.png" alt="">
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Expertise et professionalisme</h4>
                    </div>
                    <div class="panel-body">
                        <p>Nous sommes issus d'une école d'ingénieur en informatique. Nous avons acquis grâce à notre experience en junior entreprise l'expertise et le professionnalisme nécessaire à la bonne réussite de votre projet </p>
                        <img class="img-responsive img-portfolio" src="http://img.e-marketing.fr/Img/BREVE/2013/10/230196/Plus-digital-social-chez-Teradata-eCircle-F.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>Faites le grand pas !</h4>
                    </div>
                    <div class="panel-body">
                        <p>Passer d'une idée à un projet concret est toujours délicat. Nous sommes là pour vous accompagner dans ce projet et vous fournir tous les ingrédients de la réussite grâce un site web adapté à vos besoins</p>
                        <img class="img-responsive img-portfolio" src="http://daily.financialexecutives.org/wp-content/uploads/081114_Innovtion1_Wavebreakmedia.jpg"  alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Nos compétences</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/ios.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/android.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/css.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/html5.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/js.jpg" alt="">
            </div>
            <div class="col-md-4 col-sm-6">
                <img class="img-responsive img-portfolio img-hover" src="../resources/assets/images/services/php.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Mes outils de développement</h2>
            </div>
            <div class="col-md-6">
                <p>Coté Hardware</p>
                <ul>
                    <li>MacBook Pro 13 pouces rétina</li>
                    <li>Ipad Air</li>
                    <li>Iphone 6s</li>
                </ul>
                <br><br>
                <p>Coté Software</p>
                <ul>
                    <li>OS X El Capitan</li>
                    <li>IOS 9.3</li>
                    <li>Google Chrome</li>
                    <li>Sublime Text</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="../resources/assets/images/ide.jpg" alt="">
            </div>
        </div>

        <hr>
        
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Vous voulez vous lancer ? N'hésitez plus, demandez un devis gratuit et une réponse vous sera envoyée dans les plus bref délais !  </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="contact">Demander un devis</a>
                </div>
            </div>
        </div>

        <hr>
        
    </div>

@stop