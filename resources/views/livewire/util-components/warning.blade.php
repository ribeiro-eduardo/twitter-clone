<div>
    <script>
        document.addEventListener('livewire:load', function () {
            Swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: '{{$message}}',
            showConfirmButton: false,
            timer: 2000
            })
        })
    </script>
</div>
