<!--   Core JS Files   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<script src="{{ asset("js/core/jquery.min.js") }}"></script>
<script src="{{ asset("js/core/popper.min.js") }}"></script>
<script src="{{ asset("js/core/bootstrap-material-design.min.js") }}"></script>
<script src="{{ asset("js/plugins/perfect-scrollbar.jquery.min.js") }}"></script>
<script src="{{ asset("js/plugins/moment.min.js") }}"></script>
<script src="{{ asset("js/plugins/sweetalert2.js") }}"></script>
<script src="{{ asset("js/plugins/jquery.validate.min.js") }}"></script>
<script src="{{ asset("js/plugins/jquery.bootstrap-wizard.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-selectpicker.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-datetimepicker.min.js") }}"></script>
<script src="{{ asset("js/plugins/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-tagsinput.js") }}"></script>
<script src="{{ asset("js/plugins/jasny-bootstrap.min.js") }}"></script>
<script src="{{ asset("js/plugins/fullcalendar.min.js") }}"></script>
<script src="{{ asset("js/plugins/jquery-jvectormap.js") }}"></script>
<script src="{{ asset("js/plugins/nouislider.min.js") }}"></script>
<script src="{{ asset("js/plugins/arrive.min.js") }}"></script>
<script src="{{ asset("js/plugins/chartist.min.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap-notify.js") }}"></script>
<script src="{{ asset("js/material-dashboard.js") }}" type="text/javascript"></script>

<script src="{{ asset("demo/demo.js") }}"></script>
<script>

  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
          $('.fixed-plugin .dropdown').addClass('open');
        }

      }

      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('background-color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-background-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').change(function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });

      $('.switch-sidebar-mini input').change(function() {
        $body = $('body');

        $input = $(this);

        if (md.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          md.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            md.misc.sidebar_mini_active = true;
          }, 300);
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);

      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initCharts();

    $('#search-input-products').keyup( function() {
        let value = this.value;
        console.log(value)
        $.ajax({
            type:'POST',
            url:'/product/search',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{"value" : value},
            success:function(response){
                $('#search-input-product-data-list').html(response);
                console.log(response)
            }
        });
    });

    $('#search-input-product-data-list').on('click', '.select-product-on-click', function() {
        let id = $(this).attr("data-value")
        $.ajax({
            type:'GET',
            url:'/product/' + id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(response){
                $('#wrap-selected-porducts').prepend(response);
            }
        });
    });

    $("#create-new-product").on("click", function() {

        var sku = $("#create-product-form :input[name='sku']").val();
        var mpn = $("#create-product-form :input[name='mpn']").val();
        var type = $("#create-product-form :input[name='type']").val();
        var name = $("#create-product-form :input[name='name']").val();
        var price = $("#create-product-form :input[name='price']").val();
        var quantity = $("#create-product-form :input[name='quantity']").val();

        $.ajax({
            type:'POST',
            url:'/product/create',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                "sku" : sku,
                "mpn" : mpn,
                "type" : type,
                "name" : name,
                "price" : price,
                "quantity" : quantity,
            },
            success:function(id){
                $.ajax({
                    type:'GET',
                    url:'/product/' + id,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success:function(response){
                        $('#wrap-selected-porducts').prepend(response);
                    }
                });
                $('#create-new-product-modal').modal('toggle');
            }
        });

    })

    $("#create-new-order").on("click", function() {
        let name = $("#create-new-order-form :input[name='name']").val();
        let sku = $("#create-new-order-form :input[name='sku']").val();
        let array = []

        $('#show-selected-product-table tbody tr').each(function() {
            var id = $(this).find(".product-id-td").html();
            var quantity = $(this).find(".quantity").val();
            array.push([id, quantity]);
        });

        $.ajax({
            type:'POST',
            url:'/order/create',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{
                "sku" : sku,
                "name" : name,
                "array" : array,
            },
            success:function(id){
                $.ajax({
                    type:'GET',
                    url:'/order/' + id,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success:function(response){
                        console.log(response)
                        $('#order-wraper-content').prepend(wrapOrder(response));
                    }
                });
                $('#create-new-order-modal').modal('toggle');
            }
        });
    })

    function wrapOrder(data) {
        let value = data[0]
        let output = "";
        output += "<tr>";
        output += "<td class='text-center'>"+value.id+"</td>";
        output += "<td>"+value.name+"</td>";
        output += "<td>"+value.sku+"</td>";
        output += "<td>2013</td>";
        output += "<td class='text-right'>&euro; "+value.price+"</td>";
        output += "<td class='td-actions text-right'>";
        output += "<button type='button' rel='tooltip' class='btn btn-info'>";
        output += "<i class='material-icons'>person</i>";
        output += "</button>";
        output += "<button type='button' rel='tooltip' class='btn btn-success'>";
        output += "<i class='material-icons'>edit</i>";
        output += "</button>";
        output += "<button type='button' rel='tooltip' class='btn btn-danger'>";
        output += "<i class='material-icons'>close</i>";
        output += "</button>";
        output += "</td>";
        output += "</tr>";
        return output;
    }

  });
</script>
