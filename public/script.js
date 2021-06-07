$(document).ready(function () {
    //handling responsive menu
    let mobile_nav = document.querySelector(".my-mobile-nav");
    let overlay = document.querySelector(".mobile-overlay");
    $("body").on("click", "#toggle-nav-btn", function (e) {
        mobile_nav.classList.add("show-nav");
        overlay.classList.add("show-overlay");
    });
    $("body").on("click", "#close-mobile-nav-btn", function (e) {
        mobile_nav.classList.remove("show-nav");
        overlay.classList.remove("show-overlay");
    });


    //adding the sticky navbar
    let navbar = document.getElementById("this-nav");
    window.onscroll = function () {
        let scrollY = window.scrollY;
        if (scrollY > 210) {
            navbar.classList.add("position");
        } else {
            navbar.classList.remove("position");
        }
    };

    //adding the active class to nav elements 
    let path = window.location.href
    $('.mynav-link').each(function() {
        if (this.href === path) {
            $(this).addClass('active-mynav')
        }
    })

    //showing and hiding adding a new listing form 
    //showing 
    $('#show-add-form').on('click' , function(e) {
        $('.hidden-form').addClass('show-hidden-form');
        $('.form-overlay').addClass('show-hidden-form-overlay');
    })
    //hiding
    $('.close-hidden-form-btn').on('click' , function(e) {
        e.preventDefault();
        $('.hidden-form').removeClass('show-hidden-form');
        $('.form-overlay').removeClass('show-hidden-form-overlay');
    });

    //showing edit form 
    $(document).on('click' , '.editListingBtn' , function(e) {
        $('.edit-form').addClass('show-hidden-edit-form');
        $('.edit-form-overlay').addClass('show-hidden-edit-form-overlay');
        //getting the data that to be edtitted 
        $('#prop_type').val($(this).data('type'));
        $('#prop_for').val($(this).data('for'));
        $('#prop_space').val($(this).data('space'));
        $('#prop_address').val($(this).data('address'));
        $('#prop_bedrooms').val($(this).data('bedrooms'));
        $('#prop_bathrooms').val($(this).data('bathrooms'));
        $('#prop_garges').val($(this).data('garges'));
        $('#prop_desc').text($(this).data('desc'));
        $('#edit-listing').data('listing-id' , $(this).data('id'));
    });
    //hiding edit form 
    $('.close-hidden-edit-form-btn').on('click' , function(e) {
        e.preventDefault();
        $('.edit-form').removeClass('show-hidden-edit-form');
        $('.edit-form-overlay').removeClass('show-hidden-edit-form-overlay');
    });

    //editing the listing 
    $('#edit-listing').on('click' , function(e) {
        e.preventDefault();
        let url = '/listing/edit/'+$(this).data('listing-id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              },
            url : url, 
            type : 'PUT',
            data : {
               property_type :  $('#prop_type').val(),
               property_for :  $('#prop_for').val(),
               property_space :  $('#prop_space').val(),
               property_address :  $('#prop_address').val(),
               property_bedrooms :  $('#prop_bedrooms').val(),
               property_bathrooms :  $('#prop_bathrooms').val(),
               property_garges :  $('#prop_garges').val(),
               property_desc :  $('#prop_desc').text()
            }
        }).done(function() {
            $('.edit-form').removeClass('show-hidden-edit-form');
            $('.edit-form-overlay').removeClass('show-hidden-edit-form-overlay');
            //showing data after being edit 
            let listing = '#listing-'+$('#edit-listing').data('listing-id')
            let listingSpace = ' #listing-'+$('#edit-listing').data('listing-id')
            $(listing).load(' #listing-'+$('#edit-listing').data('listing-id'));
        })
    });

    //delete an existing listing 
    $(document).on('click' , '.deleteListingBtn', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let url = '/listing/'+id;
        $.ajax({
            //for laravel and ajax thing 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              },
            url: url,
            type : 'DELETE'
        }).done(function(e) {
            alert('listing was deleted successfully');
            $('.listings-area').load(' .listings-area');
        });
    });
    //closing the loading screen
    window.setTimeout(() => {
        $('.loading-screen').css('display' , 'none');
    } , 4000);
});
