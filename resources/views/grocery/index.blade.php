<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Grocery Store</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <form action="#" id="myForm">
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="name">Type :</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="form-group">
                <label for="name">Price :</label>
                <input type="text" class="form-control" id="price">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#ajaxSubmit').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{url('/grocery/post')}}",
                    method: 'post',
                    data: {
                        name: jQuery('#name').val(),
                        type: jQuery('#type').val(),
                        price: jQuery('#price').val(),
                    },
                    success: function(result) {
                        jQuery('.alert').show();
                        jQuery('.alert').html(result.success);
                    }
                });
            });
        });
    </script>
</body>

</html>