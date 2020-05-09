<?php  require_once '../include/header.php'?>
<div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Deposer une annonce</h2>
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5">
                    <form action="" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Titre de l'annonce</label>
                                    <input type="text" id="" name="title" class="form-control">

                                </div>
                            </div>
                            <!--Grid column-->

                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Description</label>
                                    <input type="text" id="" name="description" class="form-control">
                                </div>
                            </div>

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="" class="">Adresse</label>
                                    <input type="email" name="address" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Mot de passe</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="">Confirmez votre mot de passe</label>
                                    <input type="password" i name="password_confirm" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-md-left mt-4">
                            <button class="btn btn-primary" type="submit">Déposer</button>
                        </div>
                    </form>
                </div>
            </div>
 </div>