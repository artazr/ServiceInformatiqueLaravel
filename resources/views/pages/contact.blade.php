@extends('layouts.template')

@section('contenu')
    <div class="container">
        <div class="bg-primary title">
                <h1>Demander un devis</h1>
        </div>
        <div class="row">
            <div class="form">
                <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Prénom et Nom" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Objet" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" name="Submit" class=" btn btn-primary" value="Envoyer">Envoyer</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84056.94913865207!2d2.23026713013063!3d48.82426538637476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6706369cb4fdb%3A0x40b82c3688b3cd0!2sVanves!5e0!3m2!1sfr!2sfr!4v1460407009267" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    26 rue Raymond marcheron</rp><br>92170 Vanves<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    Phone : 06 86 76 80 54</p>
                <p><i class="fa fa-envelope-o"></i> 
                    Email : <a href="mailto:name@example.com">alexmorand26@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    Horaires : Monday - Friday: 9:00 to 17:00</p>
                <!-- <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>

@stop