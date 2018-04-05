<div class="mapbox">
    <h3 class="text-center">Map &amp; Directions</h3>
    <iframe src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=miami+beach+collins+ave+1220&amp;aq=&amp;sll=25.861386,-80.120888&amp;sspn=0.205136,0.347786&amp;ie=UTF8&amp;hq=&amp;hnear=1220+Collins+Ave,+Miami+Beach,+Miami-Dade,+Florida+33139,+Stati+Uniti&amp;t=m&amp;z=14&amp;ll=25.783255,-80.131265&amp;output=embed"></iframe>
    <h4 class="text-center">{{$restaurant->full_address()}}</h4>
</div>

<style>
    .mapbox
    {
        padding:10px 20px;
        background:white;
        margin-bottom:30px;
    }

    .mapbox iframe {
        width:100%;
        min-height:200px;
    }
</style>