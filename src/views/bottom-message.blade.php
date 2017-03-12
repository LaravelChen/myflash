<style>
    .myflash {
        font-family: Arial, sans-serif;
        padding: 12px 35px;
        border-radius: 4px;
        font-weight: 400;
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-size: 16px;
        color: #fff;
    }

    .myflash-success {
        background-color: #99c93d;
        color: #fff;
    }
    .myflash-warning{
        background-color: #f7ba2a;
        color: #fff;
    }
    .myflash-error{
        background-color: #ff4949;
        color: #fff;
    }
    .myflash-info{
        background-color: #50bfff;
        color: #fff;
    }
</style>

@if(Session::has('myflash.message'))
    <div class="myflash myflash-{{ Session::get('myflash.type') }}">
        <span class="myflash__body">{{Session::get('myflash.message')}}</span>
    </div>
    <script>
        $('.myflash').hide().fadeIn(500).delay(3000).animate({
            marginRight: "-100%"
        }, 1000, function () {
            $(this).remove();
        });
    </script>
@endif