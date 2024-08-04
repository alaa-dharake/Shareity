<div class="app-menu">
    <div class="logo-box">
        <a href="index.html" class="logo-light">
            <img src="{{ asset('assets/images/logo__1_-removebg-preview.png') }}" alt="logo" class="logo-lg">
            <h1>Shareity</h1>
        </a>
    </div>
    <div class="scrollbar">
        <ul class="menu">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a class="menu-link" href="/edit-chef">
                    <span class="menu-icon"><i class="mdi mdi-account-edit"></i></span>
                    <span class="menu-text">Edit Profile</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#menuMeals" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-silverware"></i></span>
                    <span class="menu-text">Meals</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuMeals">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/meals" class="menu-link">
                                <span class="menu-text">Manage Meals</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/meals/create" class="menu-link">
                                <span class="menu-text">Add Meal</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/chef/orders" class="menu-link">
                                <span class="menu-text">Ordered Meals</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/meal-requests/manage" class="menu-link">
                                <span class="menu-text">Requested Meals</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuCampaigns" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-bullhorn"></i></span>
                    <span class="menu-text">Campaigns</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCampaigns">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/my-campaigns" class="menu-link">
                                <span class="menu-text">Manage Campaigns</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/create-campaign" class="menu-link">
                                <span class="menu-text">Add Campaign</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/campaign-requests/manage" class="menu-link">
                                <span class="menu-text">Requested Campaigns</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="/chef/ratings" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-message-draw"></i></span>
                    <span class="menu-text">Feedbacks</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/chatify" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-message-text-outline"></i></span>
                    <span class="menu-text">Messages</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="/change-password" class="menu-link">
                    <span class="menu-icon"><i class="mdi mdi-key"></i></span>
                    <span class="menu-text">Security</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); if(confirm('Are you sure you want to log out?')) { document.getElementById('logout-form').submit(); }">
                    <span class="menu-icon" style="color:#053b21"><i class="mdi mdi-logout"></i></span>
                    <span class="menu-text" style="color:#053b21">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
