<section class="content-item">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-left breadcrumb-c white">
                <a href="home">Home</a> > <span>Sports</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-left">
                <h1 class="page-title" style="position: relative;">
                    Sports
                </h1>
            </div>
            <div class="col-sm-12 col-md-10 mx-auto text-center home-cards">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6 mx-auto">
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" id="team-name" placeholder="Input team name" style="font-size: 1.5rem;">
                                </div>
                                <div class="col-3 text-left">
                                    <button type="button" class="btn btn-yellow search-btn" id="search-teams"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-10 mx-auto white" id="beaten-list">

            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $("#search-teams").on('click', function(event) {
        var team = $("#team-name").val();
        var data = [];
        data.push({name: 'team', value: team});

        $.ajax({
            type: "POST",
            url: "Sports/get_teams",
            dataType: 'json',
            data: data,
            success: function(result) {
                if (result) {
                    if(result.length > 0 ) {
                        $( "#beaten-list").html("");
                        var items = [];
                        $.each( result, function( key, val ) {
                            items.push( "<li>" + val.Team + "</li>" );
                        });

                        $( "<ol/>", {
                            "class": "my-new-list",
                            html: items.join( "" )
                        }).appendTo( "#beaten-list" );
                    } else {
                        $( "#beaten-list").html("").html("The list is empty!");
                    }
                }
            }
        });
    });
	$(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>