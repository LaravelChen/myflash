<style>
    .myflash-notification {
        width: 330px;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 2px;
        position: fixed;
        right: -350px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .12), 0 0 6px rgba(0, 0, 0, .04);
        transition: opacity .3s, transform .3s, right .3s, top .4s;
        overflow: hidden;
        opacity: 0;
    }

    .notification-icon {
        width: 40px;
        height: 40px;
        font-size: 40px;
        float: left;
        position: relative;
        top: 3px;
    }

    .notification__title {
        font-weight: 400;
        font-size: 16px;
        color: #1f2d3d;
        margin: 0;
    }

    .notification__content {
        font-size: 14px;
        line-height: 21px;
        margin: 10px 0 0;
        color: #8391a5;
        text-align: justify;
        font-weight: 400;
    }
    .notification__group{
        margin-left: 50px;
    }

    .notification__closeBtn {
        top: 20px;
        right: 20px;
        position: absolute;
        cursor: pointer;
        color: #bfcbd9;
        font-size: 18px;
    }

    .icon-success {
        color: #13ce66;
    }

    .icon-warning {
        color: #f7ba2a;
    }
    .icon-error{
        color: #ff4949;
    }
    .icon-info{
        color: #50bfff;
    }
</style>



@if(Session::has('myflash.message'))
    <div class="myflash-notification" style="top: 16px; z-index: 2015;">
        @if(Session::get('myflash.type')=='success')
            <i class="notification-icon fa fa-check-circle icon-success"></i>
        @elseif(Session::get('myflash.type')=='warning')
            <i class="notification-icon fa fa-exclamation-circle icon-warning"></i>
            @elseif(Session::get('myflash.type')=='error')
            <i class="notification-icon  fa fa-times-circle icon-error"></i>
            @elseif(Session::get('myflash.type')=='info')
            <i class="notification-icon fa fa-info-circle icon-info"></i>
        @endif

        <div class="notification__group is-with-icon"><h2 class="notification__title">成功</h2>
            <div class="notification__content">{{Session::get('myflash.message')}}</div>
            <i class="notification__closeBtn fa fa-times"></i>
        </div>
    </div>

    <script>
        $('.myflash-notification').animate({right:'16px',opacity:1}).fadeIn('fast').delay(3000).fadeOut(500);
        $('.notification__closeBtn').click(function(){
            $('.myflash-notification').hide();
        });
    </script>
@endif