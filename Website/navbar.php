<html>
<style>
    /* Font family */
    body {
        font-family: 'Open Sans', sans-serif;
    }

    /* default colour of logo link*/
    .logoLink {
        font-size: 1.3rem;
        transition: 250ms ease;
        color: black !important;
        font-weight: bold;
    }

    /* Colour of the logo link in the navbar after scrolling */
    .logoLink.scrolled {
        color: black !important;
    }

    /* default colour of link*/
    .link {
        font-size: 1.07rem;
        transition: 250ms ease;
        color: black !important;
        font-weight: 600;
    }

    /* Colour of the link in the navbar after scrolling */
    .link.scrolled {
        color: black !important;
    }

    /* Colour of navbar after scrolling */
    .bg.scrolled {
        background-color: #fff !important;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    }

    /* For screen smaller than 991px */
    @media (max-width: 991px) {

        /* Change the colour of nav bar to white */
        .bg {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            background-color: #fff !important;
            transition: background-color 0.2s ease;
        }

        /* Change the margin size, padding and colour of the logo */
        .logoLink {
            color: black !important;
            text-shadow: none;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        /* default colour of link*/
        .link {
            color: grey !important;
            text-shadow: none;
            font-weight: 500;
        }
    }

    /* For screen bigger than 991px */
    @media (min-width: 991px) {
        .bg {
            transition: 250ms ease;
            background-color: #fff !important;
        }
    }
</style>

<body>
    <!-- Start Navigation bar -->
    <nav class="navbar navbar-expand-xl navbar-light bg fixed-top">
        <a class="navbar-brand mr-auto ml-xl-5 logoLink" href="/index.php">Colorectal Cancer Text Mining</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 my-3" id="navbarNavDropdown">
            <ul class="navbar-nav text-nowrap mr-5 pr-5">
                <li class="nav-item mx-4">
                    <a class="nav-link link" href="/Website/riskfactors.php">Risk factors</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link link" href="/Website/statistics.php">Statistics</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End navigation bar -->
</body>

<!-- Change nav bar colour on scroll -->
<script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 120);
    });

    $(window).scroll(function() {
        $('a').toggleClass('scrolled', $(this).scrollTop() > 120);
    });
</script>

</html>