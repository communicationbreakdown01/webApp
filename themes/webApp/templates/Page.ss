<!DOCTYPE html>

<html lang="de">
    <head>
        <% base_tag %>
        $MetaTags
    </head>
    <body>
        <section id="container">

    <!--header start-->
            <% include Header %>
    <!--header end-->

    <!--sidebar start-->
            <% include Sidebar %>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i id="title" class="fa fa-angle-right"></i> Protokoll</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <p>
                        <% if $CurrentMember %>

                            $Content
                            $Layout

            <% end_if %>
                        $Form
                    </p>
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->


    <!--footer start-->
    <% include Footer %>
    <!--footer end-->
</section>
<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $('div.main-content').hide({
        message: '<h1>Premium Users only</h1>',
    });

</script>

</body>
</html>
