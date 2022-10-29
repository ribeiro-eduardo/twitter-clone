<div>
    <script>
        document.addEventListener('livewire:load', function () {
            Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{$message}}',
            showConfirmButton: false,
            timer: 2000
            })
        })
    </script>
</div>
