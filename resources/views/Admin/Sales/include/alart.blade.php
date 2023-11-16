
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>

@endif
@if(session()->has('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="border-bottom: 1px solid darkred">Successful!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            <li style="list-style: none; padding: 5px">{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    @if ($errors->any())

    Swal.fire({
        title: 'Validation Error!',
        html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
        icon: 'error'
    });
    @endif
</script>
