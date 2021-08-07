<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ now()->format('Y') }} <a href="{{ config('app.url') }}">{{ config('company.name', 'Company Name') }}</a>.</strong> All rights reserved.
</footer>
