<style>
    .myflash-message {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .12), 0 0 6px rgba(0, 0, 0, .04);
        min-width: 300px;
        box-sizing: border-box;
        border-radius: 2px;
        position: fixed;
        left: 50%;
        top: -20px;
        transform: translateX(-50%);
        background-color: #fff;
        transition: opacity .3s, transform .4s;
        overflow: hidden;
        box-sizing: border-box;
        opacity: 0;
    }
    .myflash_message__group {
        margin-left: 15px;
        position: relative;
    }
    .myflash_message__group p {
        font-size: 14px;
        color: #8391a5;
        padding: 5px 0 5px 40px;
        text-align: justify;
        margin-right: 50px;
    }
    .myflash-icon{
        font-size: 30px;
        float: left;
    }
    .myicon-success{
        color: #13ce66;
    }

    .myicon-warning {
        color: #f7ba2a;
    }
    .myicon-error{
        color: #ff4949;
    }
    .myicon-info{
        color: #50bfff;
    }
    .icon-close{
        position: absolute;
        top: 5px;
        right: 20px;
        color: #d5d5d5;
        font-size: 20px;
    }
    .icon-close:hover{
        cursor: pointer;
    }
</style>
<div class="myflash-message" style="z-index: 2109;">
    <div class="myflash_message__group">
        @if(Session::get('myflash.type')=='success')
            <i class="myflash-icon myicon-success fa fa-check-circle-o"></i>
        @elseif(Session::get('myflash.type')=='warning')
            <i class="myflash-icon myicon-warning fa fa-exclamation-circle"></i>
        @elseif(Session::get('myflash.type')=='error')
            <i class="myflash-icon myicon-error fa fa-times-circle"></i>
        @elseif(Session::get('myflash.type')=='info')
            <i class="myflash-icon myicon-info fa fa-info-circle"></i>
        @endif

        <p>{{Session::get('myflash.message')}}</p>
        <i class="icon-close fa fa-times"></i>
    </div>
    <script>
        $('.myflash-message').animate({top:'20px',opacity:1}).fadeIn('fast').delay(2500).fadeOut();
        $('.icon-close').click(function(){
            $('.myflash-message').hide();
        });
    </script>
</div>