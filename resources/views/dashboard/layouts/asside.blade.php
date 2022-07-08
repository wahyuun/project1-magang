        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="{{ route('dashboard') }}" class="app-brand-link">
                <span class="app-brand-logo demo mb-5">
                    <img class="mt-3" src="{{ asset('assets/img/logo.png') }}" width="150" alt="">

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>

              <!-- Extended components -->
            <li class="menu-item {{ Request::is('contact*') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-contact"></i>
                  <div data-i18n="Extended UI">Manajemen Kontak</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item {{ Request::is('contact') || Request::is('contact/create') ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}" class="menu-link">
                      <div data-i18n="Perfect Scrollbar" class="active">List Kontak</div>
                    </a>
                  </li>
                  <li class="menu-item {{ Request::is('contact/allcontact') ? 'active' : '' }}">
                    <a href="{{ route('contact.all') }}" class="menu-link">
                      <div data-i18n="Text Divider">Semua Kontak</div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="menu-item {{ Request::is('email-marketing*') ? 'active' : '' }}">
                <a href="{{ route('email.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-mail-send"></i>
                  <div data-i18n="Basic">Marketing Email</div>
                </a>
              </li>

              <li class="menu-item {{ Request::is('email-sender*') ? 'active' : '' }}">
                <a href="{{ route('sender.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-send"></i>
                  <div data-i18n="Basic">Manajemen Alamat Pengirim</div>
                </a>
              </li>

              <li class="menu-item {{ Request::is('laporan*') ? 'active' : '' }}">
                <a href="{{ route('laporan') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-report"></i>
                  <div data-i18n="Basic">Laporan</div>
                </a>
              </li>

              <li class="menu-item {{ Request::is('create-account*') ? 'active' : '' }}">
                <a href="{{ route('create.account') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user-account"></i>
                  <div data-i18n="Basic">Manajemen Akun</div>
                </a>
              </li>
          </aside>
          <!-- / Menu -->
