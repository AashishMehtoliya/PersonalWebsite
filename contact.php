<?php 
include 'header.php';

?>


<div class="contact-me-page">
    <div class="contact-page-main-container">
        <div class="contact-me-page inner-container">
            <div class="contact-me-page-contact-ashish">
                <div class="contact-aashish-left">
                    <h1 class="contact-aashish-left-heading">CONTACT AASHISH</h1>
                </div>
                <div class="contact-aashish-right">
                    <div class="electronic-mail">
                        <h2 class="contact-aashish-right-heading electronic-mail-heading">
                            ELECTRONIC MAIL
                        </h2>
                        <div class="electronic-mail-option contact-option">
                            <ul>
                                <a href="mailto:aashish.mehtoliya@gmail.com"><li>
                                    aashish.mehtoliya@gmail.com

                                </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="social-media">
                        <h2 class="contact-aashish-right-heading social-media-heading">
                            SOCIAL MEDIA
                        </h2>
                        <div class="social-media-option contact-option">
                            <ul>
                                <a href="https://www.linkedin.com/in/aashish-mehtoliya-4b6519133/" target="_blank"><li>
                                    LinkedIn

                                </li>
                                <a href="https://twitter.com/AshishMehtoliya" target="_blank"><li>
                                    Twitter

                                </li>
                                <a href=""><li>
                                    Instagram

                                </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-ashish-form">
                        <h2 class="contact-aashish-right-heading contact-form-heading">
                            CONTACT FORM
                        </h2>
                        
                        <div class="contact-form-main-container">
                            <form name="contact" method="POST" action="/dbc/save.php" class="contact-form-inner-container">
                            <!-- <input type="hidden" name="form-name" value="contact"> -->
                            <label for="name" class="contact-form-label">Name:</label>
                            <input id="name" class="contact-form-input" type="text" name="name">
                            <label for="email" class="contact-form-label">Email:</label>
                            <input id="email" class="contact-form-input" type="email" name="email">
                            <label for="formmessage" class="contact-form-label">Message:</label>
                            <textarea id="formmessage" name="message"></textarea>
                            <p>
                            <button class="contact-form-submit-btn" name="submit" type="submit">SEND</button>
                            </p>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'footer.php';

?>

<script>


</script>