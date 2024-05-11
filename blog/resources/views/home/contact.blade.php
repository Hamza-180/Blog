<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <!-- Header part contains Title page and description -->
    <div class="header">
        <h2>Contact me</h2>
        <hr/>
        <p>
            Do you have a question? Send a message. <br>
        </p>
    </div>

    <div class="main">
        <div class="row">
            <!-- Contact form start here -->
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="{{ route('send.email') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <br>
                            <input type="text" class="form-control" id="name" name="name" required="">
                        </div>
                        <div class="form-group">
                            <br>
                            <label for="email">Email</label>
                            <br>
                            <input type="email" class="form-control" id="email" name="email" required="">
                        </div>
                        <div class="form-group">
                            <br>
                            <label for="message">Message</label>
                            <br>
                            <textarea class="form-control" rows="5" id="message" name="message" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Contact form finish here -->

            <!-- Contact details start here -->
            <div class="col-md-6">
                <div class="contact-us">
                    <h3>Contact Us</h3>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Nijverheidskaai 170
                    </p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i> +32 470 736 46
                    </p>
                    <p>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> admin@ehb.be
                    </p>
                </div>
            </div>
        </div>
        <a href="/" class="btn btn-primary">Back to Home</a>
    </div>
</div>

<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 3000); 
</script>



</body>



</html>
