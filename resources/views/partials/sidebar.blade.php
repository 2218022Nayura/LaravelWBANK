<div class="sidebar">
    <div class="logo-details">
        <i class="bx bx-category"></i>
        <span class="logo_name">WBANK</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/category" class="{{ request()->is('category*') ? 'active' : '' }}">
                <i class="bx bx-box"></i>
                <span class="links_name">Categories</span>
            </a>
        </li>
        <li>
            <a href="/transaction" class="{{ request()->is('transaction*') ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Transaction</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Back To Home</span>
            </a>
        </li>
    </ul>
</div>
