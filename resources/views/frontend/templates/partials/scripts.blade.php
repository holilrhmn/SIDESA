<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script>
        M.AutoInit();

        const slider= document.querySelectorAll('.slider');
        M.Slider.init(slider,{
            indicators:false,
            height:500,
            transition:600,
            interval: 3000
        });
</script>
