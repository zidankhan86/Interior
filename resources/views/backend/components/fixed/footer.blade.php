<footer class="footer footer-transparent d-print-none fixed-footer">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto"></div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; {{ date('Y') }}
                        <a href="." class="link-secondary">{{ config('app.name') }}</a>.
                        All rights reserved.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .fixed-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f8f9fa; /* Adjust to your desired background color */
        z-index: 1030;
        box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1); /* Optional for a subtle shadow effect */
        padding: 10px 0; /* Reduce padding to make the footer smaller */
        font-size: 12px; /* Adjust font size for smaller text */
    }

    .fixed-footer .list-inline-item a {
        font-size: 12px; /* Ensure links also have a smaller font */
    }
</style>
