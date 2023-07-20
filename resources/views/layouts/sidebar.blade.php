<div class="sidebar border-info border-right col-md-3 col-lg-2 bg-body-tertiary border p-0">
    <div aria-labelledby="sidebarMenuLabel" class="offcanvas-lg offcanvas-end bg-body-tertiary" id="sidebarMenu"
        tabindex="-1">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">MAMAK</h5>
            <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                type="button"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column pt-lg-3 m-3 overflow-y-auto p-0">
            <ul class="nav nav-pills nav-fill flex-column">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link d-flex align-items-center active gap-2" href="#">
                        <svg height="1em" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-people-fill"></i>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ Request::is('/mahasiswa') ? 'active' : '' }} gap-2"
                        href="/mahasiswa">
                        <i class="bi bi-mortarboard-fill"></i>
                        Data Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ Request::is('/kelas') ? 'active' : '' }} gap-2"
                        href="/kelas">
                        <i class="bi bi-person-workspace"></i>
                        Kelas
                    </a>
                </li>

                <hr class="my-3">

                </a>
                </li>
            </ul>
        </div>
    </div>
</div>