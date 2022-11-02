<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="post" >

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

           

           <h2>Kontak Kami</h2>
            <div class="header">
                Jika anda membutuhkan bantuan atau pertanyaan, Dengan senang hati kami akan membantu anda.
            </div>

            <div class="form-group">
                <label><strong>Message</strong></label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

        <div class="side-bar">
        
        <div class="form-group">
                <a href="https://www.instagram.com/antarakitaphotostudio/" class="ml-1 underline">
                                Instagram
                </a>
                <!-- <input type="instagram" class="form-control" name="instagram" id="instagram"> -->
            </div>

            <div class="form-group">
                <a href="https://wa.me/082226401130" class="ml-1 underline">
                                Whatsapp
                </a>
            </div>
        </div>

        <div id="copyright">
		<p>ANTARKITA PHOTOGRAPHY</p>
        <p>Solusi anda untuk fotografi profesional. Yuk, abadikan momenmu!</p>
		</div>

    <!-- <div style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
    <p>ANTARKITA PHOTOGRAPHY</p>
    <p>Solusi anda untuk fotografi profesional. Yuk, abadikan momenmu!</p>
</div> -->

         </div>
        
</body>

</html>