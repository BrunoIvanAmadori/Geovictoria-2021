<!-- Modal -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to start our alliance?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>We want to know more about you and your company and help you to achieve your goals! Fill the form below:</p>
                <?php
                // Program to display URL of current page.

                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $link = "https";
                else
                    $link = "http";

                // Here append the common URL characters.
                $link .= "://";

                // Append the host(domain name, ip) to the URL.
                $link .= $_SERVER['HTTP_HOST'];

                // Append the requested resource location to the URL
                $link .= $_SERVER['REQUEST_URI'];
                ?>

                <?php echo do_shortcode('[contact-form-7 id="136404" title="Formulario principal" html_class="potenciales-clientes gdpr" origen_zoho="' . $link . '"]'); ?>
            </div>
        </div>
    </div>
</div>