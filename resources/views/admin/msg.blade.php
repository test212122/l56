@if (session('status'))

    <div class="tools-alert tools-alert-green">
        {{ session('status') }}
    </div>
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div style="display: none;" class="alert_msg">{{ $error }}</div>
        <script type="text/javascript">
            $(function () {
                layer.msg($(".alert_msg").html());
            })

        </script>
    @endforeach

@endif