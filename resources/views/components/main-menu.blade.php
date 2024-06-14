<section class="ndt-menu bg-body-tertiary">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" d-block d-md-none><strong>Trang chủ</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       @foreach ($list_menu as $row_menu)
                           <x-main-menu-item :rowmenu="$row_menu"/>
                       @endforeach
                     
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</section>