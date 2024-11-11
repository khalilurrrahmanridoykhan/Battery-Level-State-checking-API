@extends('layout.main')

@section('content')
    <h1>This is a text.</h1>
    <a name="" id="" class="btn btn-primary" href="#" onclick="get_data()" role="button">This is button</a>
@endsection



{{-- @section('EaxtaJS')
    <script type="text/javascript">
        alert("I am in");


        function get_data() {
            $.ajax({
                url: '{{ route('lightautomationsetoff') }}',
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type: 'POST',
                error: function(xhr, status, error) {
                    alert(status);
                    alert(xhr.responseText);
                },
                success: function(results) {
                    /* clear old results, then display the new results */
                    $("#divResults").empty().append(results);
                }
            });




        }
    </script>
@endsection --}}


@section('EaxtaJS')
    <script type="text/javascript">
        $.ajax({
            url: "{{ route('lightautomationsetoff') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}"
            },
            error: function(xhr, status, error) {
                    alert(status);
                    alert(xhr.responseText);
                },
                success: function(results) {
                    // alert("Done")
                }
        });
    </script>
@endsection
