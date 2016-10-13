<div id="carousel" class="carousel slide home-carousel" data-ride="carousel">
    <% if $CarouselSlides.Count > 1 %>

        <ol class="carousel-indicators">
            <% loop $CarouselSlides %>
                <li data-target="#carousel" data-slide-to="$Pos(0)"
                    class="<% if $Pos(0) = 0 %>active<% end_if %>"></li>
            <% end_loop %>
        </ol>

    <% end_if %>

    <div class="carousel-inner" role="listbox">
        <% loop $CarouselSlides %>
            <div class="carousel-item <% if $Pos(0) = 0 %>active<% end_if %>">
                <img class="carousel-image large-screen" src="$DesktopImage.CroppedImage(2000,1000).URL" alt="$Title" />
                <img class="carousel-image small-screen" src="<% if $MobileImage %>$MobileImage.URL<% else %>$DesktopImage.CroppedImage(1000,2000).URL<% end_if %>" alt="$Title" />
                <div class="carousel-caption">
                    <div class="carousel-caption-inner">
                        <h1>$Header</h1>
                        <div class="caption">$Caption</div>
                        <a href="$ButtonLink.Link">$ButtonText</a>
                    </div>
                </div>
            </div>
        <% end_loop %>
    </div>

    <% if $CarouselSlides.Count > 1 %>

        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    <% end_if %>
</div>