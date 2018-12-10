<!-- Contact -->
<div id="contact" class="contact col-lg-8 col-md-10 mx-auto clearfix">
    <h3></h3>
    <form name="sentMessage" id="contactForm" novalidate method="post" action="/contact">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Nom"  name="name" id="name" required data-validation-required-message="Entrer votre nom." minlength="2" maxlength="60">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom" name="fistname" id="firstname" required data-validation-required-message="Entrer votre Prénom." minlength="2" maxlength="60">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required data-validation-required-message="Entrer votre email." minlength="2" maxlength="60"/>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>message</label>
                <textarea rows="3" class="form-control" placeholder="Message"  name="message" id="message" required data-validation-required-message="Entrer votre message." minlength="2" maxlength="500"></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
        </div>
    </form>
</div>