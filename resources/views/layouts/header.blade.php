<nav>
    <div class="topnav" id="myTopnav">
        <div class="active">
            <a href="{{route('pages.index')}}"
                ><img
                    src="{{ asset('public/svg/nesg_logo.svg') }}"
                    style="width: 200px; height: 50px; margin: 0;"
                    alt="NESG Logo"
            /></a>
        </div>
        <a class="link" href="#criteria">CRITERIA</a>
        <a class="link" href="#form">APPLY</a>
        <a class="link" href="#download">DOWNLOAD INSTRUCTION</a>
        @guest
            <a class="link" href="submit.html">Register to Apply</a>            
        @else
            <a class="link" href="#">SUBMIT ENTRY</a>
        
        @endguest
        <a class="link" href="mailto: info@nesgroup.org">CONTACT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</nav>