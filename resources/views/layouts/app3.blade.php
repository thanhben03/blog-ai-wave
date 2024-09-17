<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body>
    <main class="page-wrapper rbt-dashboard-page">
        <x-header />
        <x-mobileNav />
        <x-breadcrumb />
        @yield('content')
        <x-footer />
    </main>
    <x-comman />
    <x-script />

</body>

</html>
