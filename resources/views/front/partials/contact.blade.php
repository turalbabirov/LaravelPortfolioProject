<div class="container bg-white py-5" id="contact">
    <div class="row px-3">
        <div class="col-12">
            <h2 class="title position-relative pb-2 mb-4">Contact Me</h2>
        </div>
        <div class="col-12">
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="form-row">
                        <div class="control-group col-sm-6">
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                   required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group col-sm-6">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                   required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                               required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                  required="required"
                                  data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
