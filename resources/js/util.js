export function modalTemplate(template, model = null, id = null, size = null) {
    return Swal.fire({
        template: `#${template}`,
        width: `${size}`
    })
    .then((sweetAlertResult) => {
        if (sweetAlertResult.isConfirmed) {
            window.livewire.emit('modalConfirm', sweetAlertResult.value, model, id);
        }
        if (sweetAlertResult.isDenied) {
            window.livewire.emit('modalDenied', sweetAlertResult.value, model, id);
        }
        if (sweetAlertResult.isDismissed) {
            window.livewire.emit('modalDismissed', sweetAlertResult.value, model, id);
        }
    })

}
