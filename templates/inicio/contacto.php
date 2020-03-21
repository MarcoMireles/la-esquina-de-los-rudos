<section id="contacto">
    <img class="imagen-taco" src="./dist/images/taco.png" alt="Tacos Rudos">
    <img class="imagen-hamburguesa" src="./dist/images/hamburguesa.png" alt="Tacos Rudos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
                <h2>Contáctanos</h2>
                <form action="sendmail" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-rudo">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>