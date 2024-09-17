<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <x-header2 />
        <x-mobileNav />
        <x-panel />
        @yield('content')
        <x-comman2 />
    </main>
    <div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
    <x-script />
</body>

</html>
