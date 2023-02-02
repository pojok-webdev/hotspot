<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    $(document).ready(function(){
        var settings = {
        "url": "demo.kapesolusi.work/api/vit.kelurahan?query={id,display_name,kecamatan_id,name}",
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Cookie": "session_id=1291956c3a54196b31fae099766a30ad34477c5a"
        },
        };

        $.ajax(settings).done(function (response) {
        console.log(response);
        });

    });
</script>