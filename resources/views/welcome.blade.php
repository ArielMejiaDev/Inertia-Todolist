@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Frontend page.</h1>

        <h5 class="my-5">This page is a simple frontend, it use bootstrap and VueJS just to show that you can use blade views and Inertia SPA views in the same project.</h5>

        <p>Look on "resources/js/frontend.js" it use the default Vue registration and compile with Laravel Mix to "public/js/frontend".</p>

        <p>
            This project has two compiled js files but only once per use:
        </p>

        <ul>
            <li>The "public/js/frontend.js" file is used on all blade files to maintain traditional Blade.php usage.</li>
            <li>The "resources/js/app.js" file now initialize Inertia</li>
        </ul>

        <a href="{{ route('todos.index') }}" class="btn btn-primary mt-2">Go to SPA APP</a>

    </div>

@endsection
