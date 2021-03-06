<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue CRUD Application</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
		<p>
		
		<div id="app">
			<router-link :to="{ name: 'DisplayItem' }" class="btn btn-primary">Display Item</router-link>
			<router-link :to="{ name: 'Purchases' }" class="btn btn-primary">Create Purchase</router-link>
			<transition name="fade">
                <router-view></router-view>
            </transition>
        </div>


		<script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
        </script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>