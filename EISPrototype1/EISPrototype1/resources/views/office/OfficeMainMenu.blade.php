<!DOCTYPE  html>
<html lang="en">
    <head>
        @include("layouts.Head")
        <title>Office-MainMenu</title>
        <link rel="stylesheet" href="/css/office.css"/>
        
    </head>
    <body>
        @include("layouts.Header")
        <br/>
        <h2 id="office-main-menu" class="Title center-text" >Office Main Menu</h2>


        <div class="grid-office">
            <section class="Reports grid-section">
                <h2 class="center-text">Reports</h2>
                <a href="{{ route('officemain') }}" > <button type="VendorsReport" class="btn btn-danger fill-space margin-top-bottom">Vendors Report</button> </a>
                <a href="{{ route('officemain') }}" > <button type="SponsorReport" class="btn btn-danger fill-space margin-top-bottom">Sponsor Report</button> </a>
                <a href="{{ route('officemain') }}" > <button type="ScheduleReport" class="btn btn-danger fill-space margin-top-bottom">Schedule Report</button> </a>
                <a href="{{ route('officemain') }}" > <button type="ClassReport" class="btn btn-danger fill-space margin-top-bottom">Class Report</button> </a> 
            </section>

            <section class="SearchBy grid-section">
                <h2 class="center-text">Search By</h2>
                 <a href="{{ route('searchlivestock') }}" > <button type="LivestockSearch" class="btn btn-danger fill-space margin-top-bottom">Livestock</button> </a> 
                 <a href="{{ route('searchnonlivestock') }}" > <button type="NonLivestockSearch" class="btn btn-danger fill-space margin-top-bottom">Non-Livestock</button> </a> 
                 <a href="{{ route('searchentrants') }}" > <button type="EntrantSearch" class="btn btn-danger fill-space margin-top-bottom">Entrant</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="VendorSearch" class="btn btn-danger fill-space margin-top-bottom">Vendor</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="SponsorSearch" class="btn btn-danger fill-space margin-top-bottom">Sponsors</button> </a>  
            </section>

            <section class="PrintPrograms grid-section">
                <h2 class="center-text">Print Programs</h2>
                 <a href="{{ route('officemain') }}" > <button type="VendorsReport" class="btn btn-danger fill-space margin-top-bottom">Announcers Program</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="SponsorReport" class="btn btn-danger fill-space margin-top-bottom">Light Horse Program</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="ScheduleReport" class="btn btn-danger fill-space margin-top-bottom">Non Livestock Judging Sheets</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="ClassReport" class="btn btn-danger fill-space margin-top-bottom">Light Horse - Judging Cards</button> </a>  
            </section>

            <section class="ExhibitorEnvelop grid-section">
                <h2 class="center-text">Exhibitor Envelops</h2>
                 <a href="{{ route('officemain') }}" > <button type="ExhibitorEnvelops-Livestock-Section" class="btn btn-danger fill-space margin-top-bottom">Print All Entrys</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="ExhibitorEnvelops-Livestock-Entry" class="btn btn-danger fill-space margin-top-bottom">Print Single Entry</button> </a> 
            </section>

            <section class="Miscellaneous grid-section">
                <h2 class="center-text">Miscellaneous</h2>
                 <a href="{{ route('officemain') }}" > <button type="ExhibitorEnvelops-Livestock-Section" class="btn btn-danger fill-space margin-top-bottom">Create Schedule</button> </a> 
                 <a href="{{ route('officemain') }}" > <button type="ExhibitorEnvelops-Livestock-Entry" class="btn btn-danger fill-space margin-top-bottom">Non Livestock Entries List</button> </a> 
            </section>
        </div>
    </body>

    @include("layouts.Footer");
</html>
