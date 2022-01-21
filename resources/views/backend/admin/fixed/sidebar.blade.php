<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <br>
                <br>
                @if(auth()->user()->role == "admin")
                <a class="nav-link collapsed" href="{{ route('signed.users.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Signed In Users

                </a>

                <a class="nav-link" href="{{ route('show.company.profile') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                    Companies
                </a>


                <a class="nav-link" href="{{ route('show.candidate.profile') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Candidate
                </a>
                <a class="nav-link" href="{{ route('show.employer.profile') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-tie"></i></div>
                    Employer
                </a>


                <a class="nav-link" href="{{ route('post.job.show') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-mail-bulk"></i></div>
                    Posted Jobs
                </a>
                
                <a class="nav-link" href="{{ route('job.apply') }}">
                    <div class="sb-nav-link-icon"><i class="fab fa-adn"></i></div>
                    Job Apply
                </a>

                @endif

                @if(auth()->user()->role == "company")
                <a class="nav-link" href="{{ route('job.apply') }}">
                    <div class="sb-nav-link-icon"><i class="fab fa-adn"></i></div>
                    Job Apply
                </a>
                @endif
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="sb-sidenav-footer">
            <div class="small">Online Job Portal Management System</div>

        </div>
    </nav>
</div>
