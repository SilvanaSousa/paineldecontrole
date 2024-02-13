$(function(){

    cliqueMenu();
    function cliqueMenu(){
        $('#menu-principal a, .list-group a').click(function(){
            $('.list-group a').removeClass('active').removeClass('cor-padrao');
            $('#menu-principal a').parent().removeClass('active');
            $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
            $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao');

            return false;
        })
    }

    function scrollItem() {
        $('#menu-principal a, .list-group a').click(function () {
            var ref = '#'+ $(this).attr('ref_sys')+'_section';
            var offset = $(ref).offset().top;
            $('html,body').animate({'scrollTop': offset-50});
           if($(window)[0].innerWidth <= 768){
            $('.icon-bar').click();
           }

            
        });
    }
 
    scrollItem();
})
  