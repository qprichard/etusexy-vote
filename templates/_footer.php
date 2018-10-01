            </div>
        </div>

        <div class="col-md-7 mx-auto py-3 text-center">
            <hr>
            créé par <a href="https://github.com/danousna/portail-form" class="text-small img">
                danousna
            </a> - adapté par <a href="#" class="text-small img" >quentin</a>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script   src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- FancyBox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


    <!-- file input -->
    <script>
        /*
            By Osvaldas Valutis, www.osvaldas.info
            Available for use under the MIT License
        */

        'use strict';

        ;( function ( document, window, index )
        {
            var inputs = document.querySelectorAll( '.inputfile' );
            Array.prototype.forEach.call( inputs, function( input )
            {
                var label    = input.nextElementSibling,
                    labelVal = label.innerHTML;

                input.addEventListener( 'change', function( e )
                {
                    var fileName = '';
                    if( this.files && this.files.length > 1 )
                        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                    else
                        fileName = e.target.value.split( '\\' ).pop();

                    if( fileName )
                        label.querySelector( 'span' ).innerHTML = fileName;
                    else
                        label.innerHTML = labelVal;
                });

                // Firefox bug fix
                input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
                input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
            });
        }( document, window, 0 ));
    </script>

    <!-- custom js -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#post-btn").on('click', function(event) {
                $("#post-form").addClass("loading");

                setTimeout(function() {
                    $("#post-form").removeClass("loading");
                }, 200);
            });

            $("[data-fancybox]").fancybox({
                infobar: false,
                buttons: [
                    //"zoom",
                    //"share",
                    //"slideShow",
                    //"fullScreen",
                    //"download",
                    //"thumbs",
                    "close"
                ],
            });
        });
    </script>
</body>
</html>
