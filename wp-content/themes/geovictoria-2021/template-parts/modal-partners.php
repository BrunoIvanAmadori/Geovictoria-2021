<!-- Modal -->

<div class="modal fade" id="partnersModal" tabindex="-1" aria-labelledby="partnersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="partnersModalLabel">¿Listo para empezar nuestra alianza?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Queremos conocer tu empresa para ofrecerte lo que necesitas. ¡Déjanos tus datos!</p>
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

                <?php echo do_shortcode('[contact-form-7 id="136530" html_id="partners" title="Partners" origen-zoho="' . $link . '"]'); ?>
            </div>
        </div>
    </div>
</div>