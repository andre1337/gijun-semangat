
            <form action="" method="post">
                <input type="text" id="keluhan" name="keluhan" placeholder="Nama Keluhan" value="">
            </form>
        </div>

        <!-- Memanggil jQuery.js -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Memanggil Autocomplete.js -->
        <script src="../jquery.autocomplete.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Selector input yang akan menampilkan autocomplete.
                $( "#keluhan" ).autocomplete({
                    serviceUrl: "../source.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#keluhan" ).val("" + suggestion.keluhan);
                    }
                });
            })
        </script>