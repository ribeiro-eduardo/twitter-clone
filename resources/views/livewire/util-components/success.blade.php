<div>
    <script>
        document.addEventListener('livewire:load', function () {
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{$message}}',
            showConfirmButton: false,
            timer: 2000
            })
        })
    </script>
</div>
